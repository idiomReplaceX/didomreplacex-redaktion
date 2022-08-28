<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ErsetzungenFilter */

$this->title = 'Update Filter: ' . $model->filtername;
$this->params['breadcrumbs'][] = ['label' => 'Filter', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ersetzungen-filter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
