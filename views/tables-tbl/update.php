<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TablesTbl */

$this->title = 'Update Tables Tbl: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tables Tbls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tables-tbl-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
