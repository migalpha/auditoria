<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * auditorias controller
 */
class auditorias extends Front_Controller
{

	//--------------------------------------------------------------------


	/**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->library('users/auth');
		$this->load->model('auditorias_model', null, true);
		$this->load->model('auditorias_datos_cliente_secreto/auditorias_datos_cliente_secreto_model', null, true);
		$this->load->model('preguntas/preguntas_model', null, true);
		$this->load->model('categorias/categorias_model', null, true);
		$this->load->model('respuestas/respuestas_model', null, true);
		$this->load->model('tiendas_tipo/tiendas_tipo_model', null, true);
		$this->load->model('observaciones/observaciones_model', null, true);
		$this->load->model('auditorias_tipo/auditorias_tipo_model', null, true);
		$this->load->model('tiendas/tiendas_model', null, true);
		$this->load->model('tiendas_grupos/tiendas_grupos_model', null, true);
		$this->auth->restrict();
		$this->lang->load('auditorias');
		$this->crear_user();
			Assets::add_js(Template::theme_url('js/editors/ckeditor/ckeditor.js'));
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
			Assets::add_css('jquery-ui-timepicker.css');
			Assets::add_js('jquery-ui-timepicker-addon.js');

		Assets::add_module_js('auditorias', 'auditorias.js');
	}

	//--------------------------------------------------------------------

		
	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{
		$id = str_pad($this->current_user->id,3,'0', STR_PAD_LEFT);/// arreglar 10 +

		$records = $this->auditorias_model->find_all_by(array('auditor_id' => $id, 'cerrado' => 0));

		Template::set('tiendas',  $this->tiendas_model->tiendas_nombres());
		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------

	/**
	 * Displays a list of asks.
	 *
	 * @return void
	 */
	public function cuestionario()
	{
		//$y = variable del id del grupo de preguntas
		//$z => 0 = auditoria normal; 1 = cliente secreto
		$z = $this->uri->segment(5);
		$y = $this->uri->segment(4);
		$x = $this->respuestas_model->count_by(array('auditoria_id' => $this->uri->segment(3), 'preguntas_grupos_id' => $y));
		$x1= $this->observaciones_model->count_by(array('auditoria_id' => $this->uri->segment(3), 'preguntas_grupos_id' => $y));
		if (isset($_POST['save']))
		{	

			$preguntas = $this->preguntas_model->find_all();

			$data = array();
			$data1 = array();
			$data2 = array();
			foreach ($this->input->post() as $key => $value)
			{
				if (substr($key, 0,1)=="p")
				{
					$k = substr($key, 1,3);
					$data[$k-1]['auditoria_id']			 = $this->input->post('id_auditoria');
					$data[$k-1]['pregunta_id']			 = $preguntas[$k-1]->id;
					$data[$k-1]['puntuacion'] 			 = $preguntas[$k-1]->puntuacion;
					$data[$k-1]['valor'] 	  			 = $value;
					$data[$k-1]['preguntas_grupos_id'] 	 = $y;
				}

			}

			if($x == 0)
			{
				$this->respuestas_model->insert_batch($data);
			}
			else
			{
				$where = array("auditoria_id" => $this->input->post('id_auditoria'));
				$this->respuestas_model->delete_where($where);
				$this->respuestas_model->insert_batch($data);
			}
			if ($x1 == 0) 
			{
				$data1['auditoria_id'] 			= $this->input->post('id_auditoria');
				$data1['preguntas_grupos_id'] 	= $y;
				$data1['observacion'] 			= $this->input->post('observacion');
				if($this->input->post('observacion')) 
				{
					
					$this->observaciones_model->insert($data1);
				}
			}
			else
			{
				$data1['observacion'] 			= $this->input->post('observacion');
				if($this->input->post('observacion')) 
				{
					$where = array("auditoria_id" => $this->input->post('id_auditoria'),"preguntas_grupos_id" => $y);
					$this->observaciones_model->update($where,$data1);
				}
			}

			if ($this->input->post('evaluacion'))
			{
				$data2['punt_audit'] = $this->input->post('evaluacion');
				$where = array("auditoria_id" => $this->input->post('id_auditoria'));
				$this->auditorias_datos_cliente_secreto_model->update($where,$data2);
			}
			/*$clase="danger";
			$mensaje = 'Su puntuación es '.$puntuacion.", tienda con graves problemas";
			if ($puntuacion >= 54)
			{
				$clase ="success";
				$mensaje = 'Su puntuación es '.$puntuacion.", tienda sin fallas";
			}
			elseif ($puntuacion >= 42) {
				$clase= "info"; 
				$mensaje = 'Su puntuación es '.$puntuacion.", tienda con fallas leves";
			}
			elseif ($puntuacion >=30) {
				$clase= "warning";
				$mensaje = 'Su puntuación es '.$puntuacion.", tienda con fallas moderadas";
			}
			Template::set_message($mensaje, $clase);*/
			if ($z==0)
			{
				redirect(site_url().'/auditorias/ver_auditoria/'.$this->uri->segment(3));
			}
			else
			{
				redirect(site_url().'/auditorias/ver_auditoria_sorpresa/'.$this->uri->segment(3));
			}
			
		}

		Template::set('respuestas', $this->respuestas_model->respuestas($this->uri->segment(3),$y)); 
		Template::set('nuevo',  $x);
		Template::set('auditoria', $this->auditorias_model->find_by('auditoria_id',$this->uri->segment(3)));
		Template::set('datos', $this->auditorias_datos_cliente_secreto_model->find_by('auditoria_id',$this->uri->segment(3)));  
		Template::set('tiendas',  $this->tiendas_model->tiendas_nombres());
		Template::set('preguntas', $this->preguntas_model->find_all_by(array('deleted' => 0,'preguntas_grupos_id' => $y)));
		Template::set('categorias', $this->categorias_model->find_all_by(array('deleted' => 0,'preguntas_grupos_id' => $y)));
		Template::set('observacion', $this->observaciones_model->find_by(array('auditoria_id' => $this->uri->segment(3),'preguntas_grupos_id' => $y)));
		Template::render();
	}

	//--------------------------------------------------------------------

	/**
	 * Displays a form for create a auditory.
	 *
	 * @return void
	 */
	public function create()
	{
		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_auditorias())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('auditorias_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'auditorias');

				Template::set_message('La auditoría se creó satisfactoriamente', 'success');
				redirect( site_url('/auditorias/ver_auditoria/'.$insert_id));
			}
			else
			{
				Template::set_message(lang('auditorias_create_failure') . $this->auditorias_model->error, 'error');
			}
		}

		Template::set('tiendas',  $this->tiendas_model->tiendas_dropdown());
		Template::set('tiendas_tipo', $this->tiendas_tipo_model->formato_dropdown());
		Template::set('auditorias_tipo', $this->auditorias_tipo_model->formato_dropdown());
		Template::render();
	}

	//--------------------------------------------------------------------

	/**
	 * Displays a form for create a auditory.
	 *
	 * @return void
	 */
	public function create_sorpresa()
	{
		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_auditorias_sorpresa())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('auditorias_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'auditorias');

				Template::set_message('La auditoría se creó satisfactoriamente', 'success');
				redirect( site_url('/auditorias/ver_auditoria_sorpresa/'.$insert_id));
			}
			else
			{
				Template::set_message(lang('auditorias_create_failure') . $this->auditorias_model->error, 'error');
			}
		}


		Template::set('tiendas',  $this->tiendas_model->tiendas_dropdown());
		Template::set('minutos',  $this->minutos());
		Template::set('horas',  $this->horas());
		Template::render();
	}


	//--------------------------------------------------------------------
	/**
	*Setea los datos del usuario logueado
	*
	*
	*/
	public function crear_user()
	{
		 if ($this->auth->is_logged_in() )
		 {
		 	$this->set_current_user();
		 }
	}

	//--------------------------------------------------------------------
	public function ver_auditoria()
	{
		
		Template::set('tiendas',  $this->tiendas_model->tiendas_nombres());
		Template::set('auditoria', $this->auditorias_model->find_by('auditoria_id',$this->uri->segment(3)));
		Template::set('atencion',  $this->respuestas_model->count_by(array('auditoria_id' => $this->uri->segment(3), 'preguntas_grupos_id' => 2)));
		Template::set('operativa', $this->respuestas_model->count_by(array('auditoria_id' => $this->uri->segment(3), 'preguntas_grupos_id' => 1)));	
		Template::render();
	}
	//--------------------------------------------------------------------
	public function ver_auditoria_sorpresa()
	{
		
		Template::set('tiendas',  $this->tiendas_model->tiendas_nombres());
		Template::set('auditoria', $this->auditorias_model->find_by('auditoria_id',$this->uri->segment(3)));
		Template::set('atencion',  $this->respuestas_model->count_by(array('auditoria_id' => $this->uri->segment(3), 'preguntas_grupos_id' => 6)));
		Template::render();
	}
	//--------------------------------------------------------------------
	//Metodo para cerrar las auditorias
	//--------------------------------------------------------------------
	public function cerrar()
	{
		$data   = array();
		$data1	= array();
		$data['cerrado'] = 1;
		$where = array("auditoria_id" => $this->uri->segment(3));
		$this->auditorias_model->update($where,$data);
		$data1['puntaje'] = $this->calcular_puntos($this->uri->segment(3));
		$this->auditorias_model->actualizar_puntaje($this->uri->segment(3),$data1);
		Template::set_message('Los datos de la auditoría se enviaron correctamente', 'success');
		redirect(site_url().'/auditorias');
		/*if ($current_user->role_id != 7 )
		{
			redirect(site_url().'/auditorias/ver_auditoria/'.$this->uri->segment(3));
		}
		else
		{
			redirect(site_url().'/auditorias/ver_auditoria_sorpresa/'.$this->uri->segment(3));
		}*/
		
	}
	public function ver_cerradas()
	{
		$records = $this->auditorias_model->find_all_by(array('cerrado' => 1));

		Template::set('tiendas',  $this->tiendas_model->tiendas_nombres());
		Template::set('records', $records);
		Template::render();
	}
	public function exportar()
	{
		$auditoria 		= $this->auditorias_model->find_by('auditoria_id',$this->uri->segment(3));
		$grupos 		= $this->tiendas_grupos_model->formato_dropdown();
		$datos 			= $this->auditorias_datos_cliente_secreto_model->find_by('auditoria_id',$this->uri->segment(3));
		$tiendas 		= $this->tiendas_model->tiendas_dropdown();
		$tiendas_grupos	= $this->tiendas_model->tiendas_grupos();
		$preguntas 		= $this->preguntas_model->find_all_by(array('deleted' => 0,'preguntas_grupos_id' => 6));
		$categorias 	= $this->categorias_model->find_all_by(array('deleted' => 0,'preguntas_grupos_id' => 6));
		$observacion 	= $this->observaciones_model->find_by(array('auditoria_id' => $this->uri->segment(3),'preguntas_grupos_id' => 6));
		$respuestas 	= $this->respuestas_model->respuestas($this->uri->segment(3),6);
		$mensaje = 'Defieciente';
		if ($auditoria->puntaje >= 45)
		{
			$mensaje = 'Excelente';
		}
		elseif ($auditoria->puntaje >= 35) {
			$mensaje = 'Buena';
		}
		elseif ($auditoria->puntaje >=25) {
			$mensaje = 'Regular';
		}
		$this->load->library('fpdf/pdf');
		
		//creacion del pdf
		$pdf = new PDF();
		$pdf->SetTitle($this->uri->segment(3));
		$pdf->AddPage();
		$pdf->cabecera1();
		$pdf->datos_cabecera1($tiendas[$auditoria->cod_base],$datos->nombre.' '.$datos->apellidos,date_format(date_create($datos->fecha_audit), 'd-m-Y H:i:s'));
		$pdf->cabecera2();
		$pdf->datos_cabecera2($grupos[$tiendas_grupos[$auditoria->cod_base]],$auditoria->puntaje.'/50 - '.$mensaje);
		$pdf->cuerpo($categorias,$preguntas,$respuestas);
		$pdf->observaciones($observacion);
		$pdf->evaluacion($datos->punt_audit);
		$pdf->Output();
	}
	//---------------------------------------------------------------------------
	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/**
	 * Summary
	 *
	 * @param String $type Either "insert" or "update"
	 * @param Int	 $id	The ID of the record to update, ignored on inserts
	 *
	 * @return Mixed    An INT id for successful inserts, TRUE for successful updates, else FALSE
	 */
	private function save_auditorias($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		$this->form_validation->set_rules('auditorias_cod_base','Codigo Base','required|xss_clean|max_length[4]');
		$this->form_validation->set_rules('auditorias_auditor_id','Auditor','required|xss_clean|max_length[3]');
		$this->form_validation->set_rules('auditorias_atendido_por','Atendido por:','trim|required|xss_clean|max_length[255]');
		$this->form_validation->set_rules('auditorias_cargo','Cargo:','trim|required|xss_clean|max_length[255]');
		$this->form_validation->set_rules('auditorias_tipo_tienda_id','Tipo de Tienda','required|xss_clean|max_length[3]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want

		$data = array();
		
		$data['cod_base']       	= $this->input->post('auditorias_cod_base');
		$data['auditoria_id'] 		= $this->input->post('auditorias_cod_base').str_pad($this->input->post('auditorias_auditor_id'),3,'0', STR_PAD_LEFT).date('dmY');
		$data['auditor_id']     	= str_pad($this->input->post('auditorias_auditor_id'),3,'0', STR_PAD_LEFT);
		$data['atendido_por']   	= $this->input->post('auditorias_atendido_por');
		$data['cargo']        		= $this->input->post('auditorias_cargo');
		$data['tipo_tienda_id'] 	= $this->input->post('auditorias_tipo_tienda_id');

		if ($type == 'insert')
		{
			$id = $this->auditorias_model->insert($data);

			if (is_numeric($id))
			{
				$return = $id;
			}
			else
			{
				$return = FALSE;
			}
		}
		elseif ($type == 'update')
		{
			$return = $this->auditorias_model->update($id, $data);
		}

		return $data['auditoria_id'];
	}

	private function save_auditorias_sorpresa()
	{

		$this->form_validation->set_rules('nombre','Nombre','required|xss_clean|max_length[50]');
		$this->form_validation->set_rules('apellido','Apellidos','required|xss_clean|max_length[50]');
		$this->form_validation->set_rules('ci','Documento de Identidad','trim|required|xss_clean|max_length[8]');
		$this->form_validation->set_rules('ciudad','Ciudad','trim|required|xss_clean|max_length[255]');
		$this->form_validation->set_rules('telf','Teléfono','required|xss_clean|max_length[15]');
		$this->form_validation->set_rules('fecha_audit','Fecha de Auditoría','required|xss_clean|max_length[20]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want

		$data = array();
		$data1 = array();
		
		$data['cod_base']       	= $this->input->post('auditorias_cod_base');
		$data['auditoria_id'] 		= $this->input->post('auditorias_cod_base').str_pad($this->input->post('auditorias_auditor_id'),3,'0', STR_PAD_LEFT).date('dmY');
		$data['auditor_id']     	= str_pad($this->input->post('auditorias_auditor_id'),3,'0', STR_PAD_LEFT);
		$data['atendido_por']   	= "N/A";
		$data['cargo']        		= "N/A";
		$data['puntaje']        	= 50;
		$data['auditoria_tipo_id']	= 3;

		$data1['nombre']		=strtoupper($this->input->post('nombre'));
		$data1['auditoria_id'] 	=$this->input->post('auditorias_cod_base').str_pad($this->input->post('auditorias_auditor_id'),3,'0', STR_PAD_LEFT).date('dmY');
		$data1['apellidos']		=strtoupper($this->input->post('apellido'));
		$data1['ci']			=$this->input->post('ci');
		$data1['ciudad']		=strtoupper($this->input->post('ciudad'));
		$data1['telefono']		=$this->input->post('telf');
		$data1['fecha_audit']	=$this->input->post('fecha_audit').' '.$this->input->post('horas').':'.$this->input->post('minutos').':00';
		
		$id = $this->auditorias_model->insert($data);
		$id2 = $this->auditorias_datos_cliente_secreto_model->insert($data1);

		return $data['auditoria_id'];
	}

	private function calcular_puntos($id)
	{
		$auditoria 	= $this->auditorias_model->find_by('auditoria_id',$id);
		$puntaje 	= $auditoria->puntaje;
		$respuestas = $this->respuestas_model->find_all_by('auditoria_id',$id);

		foreach ($respuestas as $row)
		{
			if (is_numeric($row->valor))
			{
				$puntaje -= $row->puntuacion*$row->valor;
			}
		}

		return $puntaje;
	}
	private function minutos()
	{
		$minutos = array('00'=>'00',);
		for ($i=10; $i <51 ; $i++) { 
			$minutos[$i]=$i;
			$i+=9;
		}
		return $minutos;
	}
	private function horas()
	{
		$horas = array('00'=>'00','01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09',);
			for ($i=10; $i <24 ; $i++)
		{ 
			$horas[$i]=$i;
		}
		return $horas;
	}
}