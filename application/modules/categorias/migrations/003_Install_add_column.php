<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_add_column extends Migration
{
	/**
	 * The name of the database table
	 *
	 * @var String
	 */
	private $table_name = 'categorias';

	/**
	 * The table's fields
	 *
	 * @var Array
	 */
	private $fields = array(
		'preguntas_grupos_id' => array(
			'type' => 'INT',
			'constraint' => 3,
			'default' => '0',
			)
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
		$this->dbforge->drop_column($this->table_name,'preguntas_grupos_id');
	}

	//--------------------------------------------------------------------

}