<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\CategorySymbol $model
 */

$this->title = 'Update Category Symbol: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Category Symbols', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-symbol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
