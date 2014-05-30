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
            'symbol' => 'Symbol',
            'html' => 'Html',
            'dec' => 'Dec',
            'hex' => 'Hex',
            'descr' => 'Descr',
        ];
    }

    /**
     * @return ...
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['id' => 'cat_id'])
                ->viaTable('category_symbol', ['symbol_id' => 'id']);

    }


    public function getAllCategories()
    {
        return Category::find()->asArray()->all();

    }


}
