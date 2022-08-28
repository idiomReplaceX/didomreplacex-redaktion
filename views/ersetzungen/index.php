<?php

use yii\bootstrap4\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Ersetzungen;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ersetzungen';
$this->params['breadcrumbs'][] = ['label' => 'Filter', 'url' => ['ersetzungenfilter/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ersetzungen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Neue Esetzung', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'filtername',
            'wort',
            'ersatz',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ersetzungen $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
                'template' => '{update} {delete}'
            ],
        ],
    ]);
    ?>


</div>
