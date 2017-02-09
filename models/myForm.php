<?php  
class myForm extends \yii\base\Model
{
	public $email;

	// Функция которая описывает ввод email адреса на подписку
	public function rules() {
		return [
			[['email'], 'required'],
			['email', 'email']
		];
	}
}

?>