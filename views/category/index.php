<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
        $cols = [
            // ['class' => 'yii\grid\SerialColumn'],
            // 'id',
            'name',
            'descr',
            // ['class' => 'yii\grid\ActionColumn'],
        ];
        if (!Yii::$app->user->isGuest) {
            $cols[] = ['class' => 'yii\grid\ActionColumn'];
        }
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => $cols,
    ]); ?>

</div>
