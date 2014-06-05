<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 */

$this->title = 'Category Symbols';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-symbol-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category Symbol', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // 'id',
            'cat_id',
            'symbol_id',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
