<?php

use yii\db\Schema;

class m140530_082633_add_column_to_symbol extends \yii\db\Migration
{
    private $tableName = 'symbol';
    private $colName = 'property';

    public function up()
    {
    	$this->addColumn($this->tableName, $this->colName, 'VARCHAR(50)');
    	echo "Column $this->colName is inserted into the table $this->tableName." . PHP_EOL;
    }

    public function down()
    {
    	$this->dropColumn($this->tableName, $this->colName);
    	echo "Column $this->colName is droppped from the table $this->tableName." . PHP_EOL;
        return true;
    }
}
