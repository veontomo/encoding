<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

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

    <?= $form->field($model, 'descr')->textInput(['maxlength' => 100]) ?>

    <?php
        if (isset($categories)){
            foreach ($categories as $cat) {
                echo Html::checkboxList('CuisineId',$list2,$list);
            }
        } else {
            echo 'categories are not set' . PHP_EOL;
        }
        if (isset($symbolCats)){
            echo 'current categories are set'. PHP_EOL;
        } else {
            echo 'current categories are not set'. PHP_EOL;
        }
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
