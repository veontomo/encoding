<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Symbol $model
 */

$this->title = 'Update Symbol: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Symbols', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="symbol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'categories' => $categories,
        'symbolCats' => $symbolCats
    ]) ?>


</div>
