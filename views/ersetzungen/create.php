<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ersetzungen */

$this->title = 'Neue Ersetzung';
$this->params['breadcrumbs'][] = ['label' => 'Ersetzungen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ersetzungen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
