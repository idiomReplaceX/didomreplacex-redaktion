<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ersetzungen */

$this->title = 'Update Ersetzung';
$this->params['breadcrumbs'][] = ['label' => 'Filter', 'url' => ['ersetzungenfilter/index']];
$this->params['breadcrumbs'][] = ['label' => 'Ersetzungen', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ersetzungen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
