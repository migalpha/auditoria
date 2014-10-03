<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tiendas_model extends BF_Model {

	protected $table_name	= "tiendas";
	protected $key			= "id";
	protected $soft_deletes	= true;
	protected $date_format	= "datetime";

	protected $log_user 	= FALSE;

	protected $set_created	= false;
	protected $set_modified = false;

	/*
		Customize the operations of the model without recreating the insert, update,
		etc methods by adding the method names to act as callbacks here.
	 */
	protected $before_insert 	= array();
	protected $after_insert 	= array();
	protected $before_update 	= array();
	protected $after_update 	= array();
	protected $before_find 		= array();
	protected $after_find 		= array();
	protected $before_delete 	= array();
	protected $after_delete 	= array();

	/*
		For performance reasons, you may require your model to NOT return the
		id of the last inserted row as it is a bit of a slow method. This is
		primarily helpful when running big loops over data.
	 */
	protected $return_insert_id 	= TRUE;

	// The default type of element data is returned as.
	protected $return_type 			= "object";

	// Items that are always removed from data arrays prior to
	// any inserts or updates.
	protected $protected_attributes = array();

	/*
		You may need to move certain rules (like required) into the
		$insert_validation_rules array and out of the standard validation array.
		That way it is only required during inserts, not updates which may only
		be updating a portion of the data.
	 */
	protected $validation_rules 		= array(
		array(
			"field"		=> "tiendas_cod_base",
			"label"		=> "Codigo Base",
			"rules"		=> "required|trim|is_numeric|max_length[4]"
		),
		array(
			"field"		=> "tiendas_nombre",
			"label"		=> "Nombre",
			"rules"		=> "required|trim|max_length[255]"
		),
		array(
			"field"		=> "tiendas_empresa",
			"label"		=> "Empresa",
			"rules"		=> "required|trim|max_length[255]"
		),
	);
	protected $insert_validation_rules 	= array();
	protected $skip_validation 			= FALSE;

	//--------------------------------------------------------------------

	public function tiendas_dropdown()
	{
		$query = $this->db->select('cod_base, nombre')->get($this->table_name);

		$options = array();
		foreach ($query->result() as $row)
		{
			$options[$row->cod_base] = $row->cod_base.'-'.strtoupper($row->nombre);
		}

		return $options;

	}

	public function tiendas_nombres()
	{
		$query = $this->db->select('cod_base, nombre')->get($this->table_name);

		$options = array();
		foreach ($query->result() as $row)
		{
			$options[$row->cod_base] = strtoupper($row->nombre);
		}

		return $options;

	}
	public function tiendas_grupos()
	{
		$query = $this->db->select('cod_base, cod_grupo_base')->get($this->table_name);

		$options = array();
		foreach ($query->result() as $row)
		{
			$options[$row->cod_base] = $row->cod_grupo_base;
		}

		return $options;

	}
}
