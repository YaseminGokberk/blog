<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180519_203200_post
 */
class m180520_212952_post extends Migration
{
    public function safeUp()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'blog_id' =>$this-> integer()->notNull(),
            'category' =>$this-> string()->notNull(),
        ]);
        
        $this->addForeignKey('fk_post_blog_id','post','blog_id','blog','id');

    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_post_blog_id','post');
        $this->dropTable('post');
    }

}
