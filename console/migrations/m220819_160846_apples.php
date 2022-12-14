<?php

use yii\db\Migration;

/**
 * Class m220819_160846_apples
 */
class m220819_160846_apples extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%apples}}', [
            'id'          => $this->primaryKey(),
            'color_id'    => $this->integer(10),
            'status_id'   => $this->integer(10),
            'size'        => $this->decimal(6, 2)->defaultValue(100),
            'created_at'  => $this->timestamp(),
            'fell_at'     => $this->timestamp()
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function down() {
        $this->dropTable('{{%apples}}');
    }
}
