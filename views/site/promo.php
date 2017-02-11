<?php
use yii\helpers\Html;	
use yii\widgets\ActiveForm;
?>
<div class="promo">
	<form>
		<input class="email" type="email" placeholder="Enter email" required/>
		<button class="button"><i class="fa fa-gift fa-4x" aria-hidden="true"></i></button>
		<!--<i class="fa fa-hand-o-right" aria-hidden="true"></i>     Значок вместо gift-->
	</form>
</div>

<!--Надо понять как прикрутить эту хуйню!!!-->
<!--<p>Вы ввели имя <b><?//=$name?></b> и email <b><?//=$email?></b></p>
<?php// $f = ActiveForm::begin(); ?>
	<?//=f->field($form, 'email')?>
<?php// Html::submitButton('send') ?>
<?php// ActiveForm::end()?>