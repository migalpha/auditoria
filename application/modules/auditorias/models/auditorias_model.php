<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auditorias_model extends BF_Model {

	protected $table_name	= "auditorias";
	protected $key			= "id";
	protected $soft_deletes	= true;
	protected $date_format	= "datetime";

	protected $log_user 	= FALSE;

	protected $set_created	= true;
	protected $set_modified = false;
	protected $created_field = "created_on";

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
			"field"		=> "auditorias_auditoria_id",
			"label"		=> "Auditoria Id",
			"rules"		=> "trim|max_length[15]"
		),
		array(
			"field"		=> "auditorias_cod_base",
			"label"		=> "Cod Base",
			"rules"		=> "trim|max_length[4]"
		),
		array(
			"field"		=> "auditorias_auditor_id",
			"label"		=> "Auditor Id",
			"rules"		=> "trim|max_length[3]"
		),
		array(
			"field"		=> "auditorias_atendido_por",
			"label"		=> "Atendido Por",
			"rules"		=> "trim|max_length[255]"
		),
		array(
			"field"		=> "auditorias_cargo",
			"label"		=> "Cargo",
			"rules"		=> "trim|max_length[255]"
		),
		array(
			"field"		=> "auditorias_puntaje",
			"label"		=> "Puntaje",
			"rules"		=> "trim|max_length[11]"
		),
		array(
			"field"		=> "auditorias_deleted",
			"label"		=> "Deleted",
			"rules"		=> "trim|max_length[1]"
		),
		array(
			"field"		=> "auditorias_created_on",
			"label"		=> "Created On",
			"rules"		=> "trim|max_length[1]"
		),
		array(
			"field"		=> "auditorias_tipo_tienda_id",
			"label"		=> "Tipo Tienda Id",
			"rules"		=> "trim|max_length[4]"
		),
	);
	protected $insert_validation_rules 	= array();
	protected $skip_validation 			= FALSE;

	//--------------------------------------------------------------------

	public function actualizar_puntaje($id,$puntos)
	{
		$this->db->where('auditoria_id',$id);
		$this->db->update($this->table_name,$puntos);
	}
}
