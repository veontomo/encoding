<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models;
// use amnah\yii2\user\models;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 */

$this->title = 'Modifiche avvenute';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="log-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // 'id',
            'table',
            'tableRowId',
            'time',
            [
                'label' => 'autore',
                'value' => function ($model, $key, $index, $widget) {
                    return amnah\yii2\user\models\User::findIdentity($model->author)->username;
                }
            ],
            // 'author',
            'action',
            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
