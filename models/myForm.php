<?php  
namespace app\models;

use Yii;
use yii\base\Model;

class myForm extends Model
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