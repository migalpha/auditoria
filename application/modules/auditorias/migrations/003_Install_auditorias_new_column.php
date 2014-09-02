<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_auditorias_new_column extends Migration
{
	/**
	 * The name of the database table
	 *
	 * @var String
	 */
	private $table_name = 'auditorias';

	/**
	 * The table's fields
	 *
	 * @var Array
	 */
	private $fields = array(

		'tipo_tienda_id' => array(
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