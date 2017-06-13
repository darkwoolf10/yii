<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TablesTbl */

$this->title = 'Create Tables Tbl';
$this->params['breadcrumbs'][] = ['label' => 'Tables Tbls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tables-tbl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
