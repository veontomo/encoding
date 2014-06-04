<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Log $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="log-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'table')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <?= $form->field($model, 'tableRowId')->textInput() ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'action')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
