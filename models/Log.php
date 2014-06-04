<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "log".
 *
 * @property integer $id
 * @property string $table
 * @property integer $tableRowId
 * @property string $time
 * @property string $author
 * @property string $action
 *
 * @property User $author0
 */
class Log extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['table', 'time'], 'required'],
            [['tableRowId', 'author'], 'integer'],
            [['time'], 'safe'],
            [['table'], 'string', 'max' => 40],
            [['action'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'table' => 'Table',
            'tableRowId' => 'Table Row ID',
            'time' => 'Time',
            'author' => 'Author',
            'action' => 'Action',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor0()
    {
        return $this->hasOne(User::className(), ['id' => 'author']);
    }
}
