<?php

namespace kouosl\blog\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $blog_id
 * @property string $category
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['blog_id', 'category'], 'required'],
            [['blog_id'], 'integer'],
            [['category'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'blog_id' => 'Blog ID',
            'category' => 'Category',
        ];
    }
}
