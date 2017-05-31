<?php

use yii\db\Migration;

class m170531_110335_vote_alter_fields extends Migration
{
    public function safeUp()
    {
        $this->alterColumn('vote', 'entity', $this->bigInteger());
        $this->alterColumn('vote', 'user_id', $this->bigInteger());
    }

    public function safeDown()
    {
        echo "m170531_110335_vote_alter_fields cannot be reverted.\n";

        return false;
    }
}
