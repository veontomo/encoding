<?php

use yii\db\Schema;

class m140530_084102_seed_category_table extends \yii\db\Migration
{
	private $seedData = [
		1217 => "Punctuation",
		1218 => "Currency",
		1219 => "Math",
		1220 => "Diactritics",
		1221 => "Spanish",
		1222 => "Currency Symbol",
		1223 => "German",
		1224 => "French",
		1225 => "Italian",
		1226 => "Czech",
		1227 => "Slovak",
		1228 => "Slovenian",
		1229 => "Romanian",
		1230 => "Turkish",
		1231 => "Polish",
		1232 => "Greek",
		1233 => "Russian"
	];
	private $tableName = 'category';

    public function up()
    {
    	foreach ($this->seedData as $key => $value) {
    		$this->insert($this->tableName, ['id' => $key, 'name' => $value]);
    	}
    	echo "Table $this->tableName is seeded with provided data."  . PHP_EOL;
    }

    public function down()
    {
    	foreach ($this->seedData as $key => $value) {
    		$this->delete($this->tableName, 'id = :id AND name = :name',  ['id' => $key, 'name' => $value]);
    	}
    	echo "Table $this->tableName is cleaned from provided data."  . PHP_EOL;
    	return true;
    }
}
