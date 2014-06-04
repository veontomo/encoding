<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use kartik\widgets\ActiveForm;
// use kartik\builder\Form;


/**
 * @var yii\web\View $this
 * @var app\models\Symbol $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="symbol-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'symbol')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'html')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'dec')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'hex')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'ProtettiHtml')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'NoHtml')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'descr')->textInput(['maxlength' => 100]) ?>

    <?php
        foreach ($model->getAllCategories() as $cat) {
            $id = $cat->id;
            echo Html::checkbox("category[$id]", $model->hasCategory($id), ['label' => $cat->name]);
        }

    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
