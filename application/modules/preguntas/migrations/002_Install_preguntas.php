<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_preguntas extends Migration
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
		'id' => array(
			'type' => 'INT',
			'constraint' => 11,
			'auto_increment' => TRUE,
		),
		'descripcion' => array(
			'type' => 'VARCHAR',
			'constraint' => 1000,
			'null' => FALSE,
		),
		'puntuacion' => array(
			'type' => 'TINYINT',
			'null' => FALSE,
		),
		'categoria_id' => array(
			'type' => 'INT',
			'constraint' => 10,
			'null' => FALSE,
		),
			'deleted' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
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
		$this->dbforge->add_field($this->fields);
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table($this->table_name);
	}

	//--------------------------------------------------------------------

	/**
	 * Uninstall this migration
	 *
	 * @return void
	 */
	public function down()
	{
		$this->dbforge->drop_table($this->table_name);
	}

	//--------------------------------------------------------------------

}