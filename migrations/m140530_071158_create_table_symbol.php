<?php

use yii\db\Schema;

class m140530_071158_create_table_symbol extends \yii\db\Migration
{
    private $tableName = 'symbol';
    public function up()
    {
    	$this->createTable($this->tableName, [
    		 'id'    => 'INT PRIMARY KEY AUTO_INCREMENT',
    		 'symbol'  => 'CHAR(1) UNIQUE',
    		 'html'  => 'CHAR(10) UNIQUE',
    		 'dec'  => 'CHAR(8) UNIQUE',
    		 'hex'  => 'CHAR(8) UNIQUE',
    		 'descr' => 'VARCHAR(100)',
             'ProtettiHtml' => 'TINYINT(1) NOT NULL',
             'NoHtml' => 'TINYINT(1) NOT NULL']);
    	echo "Table $this->tableName is created." . PHP_EOL;
    }

    public function down()
    {
        $this->dropTable($this->tableName);
        echo "Table $this->tableName is dropped." . PHP_EOL;
        return true;
    }
}
