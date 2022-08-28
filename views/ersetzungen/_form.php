<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ersetzungen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ersetzungen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php if($model->isNewRecord) echo $form->field($model, "cat")->hiddenInput()->label(false);
    else echo $form->field($model, 'cat')->dropDownList(app\models\ErsetzungenFilter::listAll(),['maxlength' => true]) ?>

    <?= $form->field($model, 'wort')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ersatz')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
