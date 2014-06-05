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
     * Returns array of categories the symbol belongs to.
     * @return array   array of Category models
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['id' => 'cat_id'])
                ->viaTable('category_symbol', ['symbol_id' => 'id'])->all();

    }


    /**
     * Returns array of ids of the categories the symbol belongs to.
     * @return array   array of integers
     */
    public function getIdsOfCategories()
    {
        $catModels = $this->getCategories();
        $output = [];
        if (!empty($catModels)){
            foreach ($catModels as $catModel) {
                $output[] = $catModel->id;
            }
        }
        return $output;
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

    /*
     * Array of all categories.
     * @return Array
     */
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
    * Links current instance of Symbol class to an instance of Category class by means of CategorySymbol model.
    * Input parameter is an array of the form [1221 => 1, 1222 => 1, ...],
    * where keys correspond to category ids and values (in this case only one value (1) is present)
    * correspond to a fact whether the current symbol belongs to category with the given id.
    * Value 1 means that the current symbol belongs to the category, 0 - does not belong.
    * (In fact, the array contains only those categories which the symbol belongs to.)
    *
    * The method checks what links are missing and saves them. It checks as well what links are
    * excessive and deletes them.
    * @var    $arr          hash which keys are ids of the categories to which current symbol must belong.
    * @return void
    */
    public function setLinksToCategories($arr)
    {
        // ids of categories to which the symbol belongs currently
        $catActual = $this->getIdsOfCategories();
        // ids of categories to which the symbol must belong
        $catMust = array_keys($arr);

        // ids of categories to be deleted
        $catsToDelete = array_diff($catActual, $catMust);
        // ids of categories to be added
        $catsToAdd    = array_diff($catMust, $catActual);
        // id of current symbol
        $symbolId = $this->id;

        if (!empty($catsToDelete)){
            foreach ($catsToDelete as $catToDelete) {
                $modelToDelete = CategorySymbol::findByCategoryAndSymbol($catToDelete, $symbolId);
                if ($modelToDelete){
                    $modelToDelete->delete();
                }
            }
        }
        if (!empty($catsToAdd)){
            foreach ($catsToAdd as $catToAdd) {
                $modelToAdd = new CategorySymbol();
                $modelToAdd->cat_id = intval($catToAdd);
                $modelToAdd->symbol_id = intval($symbolId);
                $modelToAdd->save();
            }
        }
    }

}
