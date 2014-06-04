<?php

use yii\db\Schema;

class m140604_104052_create_log_table extends \yii\db\Migration
{

	private $tableName = 'log';
	public function up()
	{
		$this->createTable($this->tableName, [
			'id'    => 'INT PRIMARY KEY AUTO_INCREMENT',
			'table'  => 'VARCHAR(40) NOT NULL',  // table name in which modification occurs
			'tableRowId' => 'INT',               // id of the row in which modification occurs
			'time' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP', // time of modification
			'author' => 'INT(10) UNSIGNED',                   // id of user that authors the modification
			'action' => 'VARCHAR(10)'            // type of modification: insert, update, delete (or other)
		]);
		echo "Table $this->tableName is created." . PHP_EOL;
	}

	public function down()
	{
	    $this->dropTable($this->tableName);
	    echo "Table $this->tableName is dropped." . PHP_EOL;
	    return true;
	}
}
