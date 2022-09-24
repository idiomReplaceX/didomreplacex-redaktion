<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ErsetzungenFilter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ersetzungen-filter-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'filtername')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'art')->dropDownList(app\models\ErsetzungenFilter::listFilterArt(),['maxlength' => true]); ?>
    <?= $form->field($model, 'autorin')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
