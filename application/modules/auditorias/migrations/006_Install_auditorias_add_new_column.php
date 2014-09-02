<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_auditorias_add_new_column extends Migration
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
		'auditoria_tipo_id' => array(
			'type' => 'TINYINT',
			'constraint' => 2,
			'default' => '0',
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
		$this->dbforge->drop_column($this->table_name,'auditoria_tipo_id');
	}

	//--------------------------------------------------------------------

}