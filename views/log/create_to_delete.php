<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Log $model
 */

$this->title = 'Create Log';
$this->params['breadcrumbs'][] = ['label' => 'Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
