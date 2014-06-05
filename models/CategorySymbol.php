<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category_symbol".
 *
 * @property integer $cat_id
 * @property integer $symbol_id
 *
 * @property Symbol $symbol
 * @property Category $cat
 */
class CategorySymbol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_symbol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id', 'symbol_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => 'category',
            'symbol_id' => 'symbol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSymbol()
    {
        return $this->hasOne(Symbol::className(), ['id' => 'symbol_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Category::className(), ['id' => 'cat_id']);
    }

    /**
     * Returns a CategorySymbol model that corresponds to link between category with id $cat
     * and symbol with id $symb.
     * @param  integer $catId       category id
     * @param  integer $symbId      symbol id
     * @return ActiveRecord|Null
     */
    public static function findByCategoryAndSymbol($catId, $symbId)
    {
        return CategorySymbol::find()
            ->where('cat_id = :cId AND symbol_id = :sId', [':cId' => $catId, ':sId' => $symbId])
            ->one();
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
}
