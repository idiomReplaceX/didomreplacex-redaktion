<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ErsetzungenFilter */

$this->title = 'Neuer Filter';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ersetzungen-filter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
