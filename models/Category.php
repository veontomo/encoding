<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 * @property string $descr
 *
 * @property CategorySymbol[] $categorySymbols
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 40],
            [['descr'], 'string', 'max' => 100],
            [['name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'descr' => 'Descr',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategorySymbols()
    {
        return $this->hasMany(CategorySymbol::className(), ['cat_id' => 'id']);
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
