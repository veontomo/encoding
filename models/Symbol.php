<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "symbol".
 *
 * @property integer $id
 * @property string $symbol
 * @property string $html
 * @property string $dec
 * @property string $hex
 * @property string $descr
 * @property string $ProtettiHtml
 *
 * @property CategorySymbol[] $categorySymbols
 */
class Symbol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'symbol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['symbol'], 'string', 'max' => 1],
            [['html'], 'string', 'max' => 10],
            [['dec', 'hex'], 'string', 'max' => 8],
            [['descr'], 'string', 'max' => 100],
            [['ProtettiHtml'], 'string', 'max' => 1],
            [['symbol'], 'unique'],
            [['html'], 'unique'],
            [['dec'], 'unique'],
            [['hex'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'symbol' => 'Symbol glyph',
            'html' => 'Html code',
            'dec' => 'Dec code',
            'hex' => 'Hex code',
            'descr' => 'Description',
            'ProtettiHtml' => 'Protetti Html',
            'NoHtml' => 'No Html',
            'property' => 'Proprietà'
        ];
    }


    /**
     * Tracks changes (update/create)
     * @param  string  $action   name of the actiopn performed
     * @return void
     */
    public function afterSave($isNew){
        $this->_saveLog($isNew ? Log::ACTION_INSERT : Log::ACTION_UPDATE);
    }

    /**
     * Tracks changes (delete).
     * @return bool
     */
    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            return $this->_saveLog(Log::ACTION_DELETE);
        } else {
            return false;
        }
    }

    /**
     * Saves info about changes (insert/update/delete) of current record into Log table.
     * @param  string   $actionName   type of change ("insert", "update", "delete")
     * @return bool
     */
    private function _saveLog($actionName)
    {
        $l = new Log();
        $l->author  = Yii::$app->user->id;
        $l->table = $this->tableName();
        $l->action = $actionName;
        $l->tableRowId = $this->id;
        return $l->save();
    }



    /**
     * Returns categories the symbol belongs to.
     * @return array   array of Category models
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['id' => 'cat_id'])
                ->viaTable('category_symbol', ['symbol_id' => 'id'])->all();

    }

    /**
     * Return a string with all categories the current symbol belongs to.
     */
    public function categoriesString()
    {
        $cats = $this->getCategories();
        // print_r($cats);
        // die();
        $output = [];
        foreach ($cats as $cat) {
           $output[] = $cat->name;
        }
        return implode(', ', $output);
    }


    public function getAllCategories()
    {
        return Category::find()->all();
    }

    /**
     * return true if the symbol has category with given id
     * @return boolean
     */
    public function hasCategory($catId)
    {
        $currentCats = $this->getCategories();
        foreach ($currentCats as $cat) {
            if ($cat->id == $catId){
                return true;
            }
        }
        return false;
    }

    /**
    * Sets records in category_symbol table:
    * 1. removes all records having symbol_id equal to id of the current model,
    * 2. for each element in $arr, pairs it with the id of the current element and
    * inserts all these pairs into category_symbol table.
    * @return void
    */
    public function setLinksToCategories($arr)
    {
        $tableName = 'category_symbol';
        $id = $this->id;
        // cleaning up table from records with given symbol_id
        Yii::$app->db->createCommand("
            DELETE FROM $tableName WHERE symbol_id = :sId",
            [':sId' => $id])->execute();
        // preparing data to insert
        $arrToInsert = [];
        foreach ($arr as $value) {
            $catId = intval($value);
            $arrToInsert[] = "($id, $catId)";
        }
        $strToInsert = implode(', ', $arrToInsert);
        // inserting
        if ($strToInsert){
            Yii::$app->db->createCommand(
                "INSERT INTO category_symbol (symbol_id, cat_id) VALUES $strToInsert"
            )->execute();
        }
    }

}
