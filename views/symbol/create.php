<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Symbol $model
 */

$this->title = 'Create Symbol';
$this->params['breadcrumbs'][] = ['label' => 'Symbols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="symbol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
	<?php


	?>

</div>
