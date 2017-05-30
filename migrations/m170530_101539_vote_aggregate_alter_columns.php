<?php

use yii\db\Migration;

class m170530_101539_vote_aggregate_alter_columns extends Migration
{
    public function safeUp()
    {
        $this->alterColumn('{{%vote_aggregate}}', 'entity', $this->bigInteger());
    }

    public function safeDown()
    {
        echo "m170530_101539_vote_aggregate_alter_columns cannot be reverted.\n";

        return false;
    }
}
