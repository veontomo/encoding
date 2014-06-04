<?php

use yii\db\Schema;

class m140604_122320_add_fk_to_log extends \yii\db\Migration
{
    private $targetTable = 'log';
    private $targetTableCol = 'author';
    private $refTable = 'user';
    private $refTableCol = 'id';
    private $fkName = 'log_author';


    public function up()
    {
    	$this->addForeignKey($this->fkName, $this->targetTable, $this->targetTableCol, $this->refTable, $this->refTableCol, 'RESTRICT', 'CASCADE');
    	echo "Foreign key $this->fkName is created." . PHP_EOL;
    }

    public function down()
    {
        $this->dropForeignKey($this->fkName, $this->targetTable);
    	echo "Foreign key $this->fk1Name is dropped." . PHP_EOL;
    }
}
