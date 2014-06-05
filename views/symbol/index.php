<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 */

$this->title = 'Symbols';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="symbol-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Symbol', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
        $cols  = [
            ['class' => 'yii\grid\SerialColumn'],
            // 'id',
            'symbol',
            'html',
            'dec',
            'hex',
            'descr',
             [
                'label' => 'Category',
                'value' => function ($model, $key, $index, $widget) {
                    return $model->categoriesString();
                }
            ],
            'ProtettiHtml',
            'NoHtml',
            'property'
        ];
        if (!Yii::$app->user->isGuest) {
            $cols[] = ['class' => 'yii\grid\ActionColumn'];
        }
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => $cols
    ]); ?>

</div>
