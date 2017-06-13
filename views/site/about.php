<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <h3>
       Page is about me
    </h3>

    <code>This my first project on framework Yii and my thesis jobs.</code><br />
    <h2>Мы предоставляем товар с таких магазинов как: </h2>
    <div class="conteiner">
	    <div class="row">
	    	<div class="logoApple">
	    		<?php// echo Html::img('@web/uploads/Apple-App-Store.png') ?>
	    	</div>
	    	<div class="logoAndroid">
	    		<?php// echo Html::img('@web/uploads/google-play-logo-banner-1024x1024.png') ?>
	    	</div>
	    </div>
    </div>

</div>
