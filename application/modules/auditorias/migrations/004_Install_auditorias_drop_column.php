<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_auditorias_drop_column extends Migration
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
		'nombre_tienda' => array(
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => FALSE,
		),
		'empresa' => array(
			'type' => 'VARCHAR',
			'constraint' => 255,
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
		$this->dbforge->drop_column($this->table_name,'nombre_tienda');
		$this->dbforge->drop_column($this->table_name,'empresa');
	}

	//--------------------------------------------------------------------

	/**
	 * Uninstall this migration
	 *
	 * @return void
	 */
	public function down()
	{
		$this->dbforge->add_column($this->table_name,$this->fields);
	}

	//--------------------------------------------------------------------

}