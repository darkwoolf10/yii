<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coment".
 *
 * @property integer $id
 * @property string $text
 * @property integer $user_id
 * @property integer $article_id
 * @property integer $status
 */
class Coment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'coment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'article_id', 'status'], 'integer'],
            [['text'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'user_id' => 'User ID',
            'article_id' => 'Article ID',
            'status' => 'Status',
        ];
    }
}
