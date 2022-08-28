<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ErsetzungenFilter */

$this->title = "Filter nicht leer!";
\yii\web\YiiAsset::register($this);
?>
<div class="ersetzungen-filter-view">

    <h1>Fehler beim Löschen</h1>

    <p>
        Der Filter kann nicht gelöscht werden, da noch Wörter enthalten sind. Es können nur leere Filter gelöscht werden!
    </p>


</div>
