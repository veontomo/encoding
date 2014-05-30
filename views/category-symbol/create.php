<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\CategorySymbol $model
 */

$this->title = 'Create Category Symbol';
$this->params['breadcrumbs'][] = ['label' => 'Category Symbols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-symbol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
