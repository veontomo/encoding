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
            'cat_id' => 'Cat ID',
            'symbol_id' => 'Symbol ID',
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
}
