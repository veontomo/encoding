<?php

use yii\db\Schema;

class m140530_072109_create_table_category_symbol extends \yii\db\Migration
{
    private $tableName = 'category_symbol';
    private $fk1Name   = 'fk-category';
    private $fk1TableName  = 'category';
    private $fk1ColName  = 'id';
    private $fk2Name   = 'fk-symbol';
    private $fk2TableName  = 'symbol';
    private $fk2ColName  = 'id';

    public function up()
    {
    	$this->createTable($this->tableName, [
    		 'id' => 'INT PRIMARY KEY AUTO_INCREMENT',
    		 'cat_id'    => 'INT',
    		 'symbol_id'  => 'INT']);
    	echo "Table $this->tableName is created." . PHP_EOL;

    	$this->addForeignKey($this->fk1Name, $this->tableName, 'cat_id', $this->fk1TableName, $this->fk1ColName, 'RESTRICT', 'CASCADE');
    	echo "Foreign key $this->fk1Name is created." . PHP_EOL;
    	$this->addForeignKey($this->fk2Name, $this->tableName, 'symbol_id', $this->fk2TableName, $this->fk2ColName, 'RESTRICT', 'CASCADE');
    	echo "Foreign key $this->fk2Name is created." . PHP_EOL;
    }

    public function down()
    {
    	$this->dropForeignKey($this->fk2Name, $this->tableName);
    	echo "Foreign key $this->fk2Name is dropped." . PHP_EOL;
    	$this->dropForeignKey($this->fk1Name, $this->tableName);
    	echo "Foreign key $this->fk1Name is dropped." . PHP_EOL;
        $this->dropTable($this->tableName);
        echo "Table $this->tableName is dropped." . PHP_EOL;
        return true;
    }
}
