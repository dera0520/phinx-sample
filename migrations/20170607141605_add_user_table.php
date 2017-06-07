<?php

use Phinx\Migration\AbstractMigration;

class AddUserTable extends AbstractMigration
{
    /**
     * simple query migration 
     *  create users talbe
     */
    public function up(){
        $count = $this->execute('
            CREATE TABLE `users` (
              `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
              `name` varchar(100) DEFAULT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ');
    }

    /**
     * drop users table
     */
    public function down(){
        $count = $this->execute('DROP TABLE users;');
    }
}
