<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180518_093214_blog
 */
class m180520_212815_blog extends Migration
{

    public function safeUp()
    {
        $this->createTable('blog', [
            'id' => $this->primaryKey(),
            'title' =>$this-> string()->notNull() ,
            'description' =>$this->string()->notNull() ,
            'body' =>$this-> string(255)->notNull(),
            'created_at' =>$this-> timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP') ,
            'created_by' =>$this-> string()->notNull() ,
            'updated_at' =>$this-> timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP') ,
            'updated_by' =>$this-> string()->notNull(),
        ]);

    }

    public function safeDown()
    {
        $this->dropTable("blog");

    }
}
