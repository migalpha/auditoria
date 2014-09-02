<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_new_column extends Migration
{
	/**
	 * The name of the database table
	 *
	 * @var String
	 */
	private $table_name = 'preguntas';

	/**
	 * The table's fields
	 *
	 * @var Array
	 */
	private $fields = array(

		'tipo_pregunta' => array(
			'type' => 'TINYINT',
			'null' => FALSE,
		),
	);

	/**
	 * Install this migration
	 *
	 * @return void
	 */
	public function up()
	{
		$this->dbforge->add_column($this->table_name,$this->fields);
	}

	//--------------------------------------------------------------------

	/**
	 * Uninstall this migration
	 *
	 * @return void
	 */
	public function down()
	{
		$this->dbforge->drop_column($this->table_name,$this->fields);
	}

	//--------------------------------------------------------------------

}