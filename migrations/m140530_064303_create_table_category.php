<?php

use yii\db\Schema;

class m140530_064303_create_table_category extends \yii\db\Migration
{
    private $tableName = 'category';
    public function up()
    {
    	$this->createTable($this->tableName, [
    		 'id'    => 'INT PRIMARY KEY AUTO_INCREMENT',
    		 'name'  => 'VARCHAR(40) UNIQUE',
    		 'descr' => 'VARCHAR(100)']);
    	echo "Table $this->tableName is created." . PHP_EOL;
    }

    public function down()
    {
        $this->dropTable($this->tableName);
        echo "Table $this->tableName is dropped." . PHP_EOL;
        return true;
    }
}
