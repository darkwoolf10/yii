<?php

use yii\db\Migration;

class m170616_194200_create_password extends Migration
{
    public function up()
    {
        $this->insert('{{%user}}', [
        'id' => 1,
        'login' => 'admin',
        'email' => 'admin@example.com',
        'password_hash' => Yii::$app->security->generatePasswordHash('admin'),
    ]);
    }

    public function down()
    {
        $this->delete('{{%user}}', ['id' => 1]);
        
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
