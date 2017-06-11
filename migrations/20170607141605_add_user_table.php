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
              `kana` varchar(100) DEFAULT NULL,
              `login_code` varchar(30) DEFAULT NULL,
              `password` varchar(30) DEFAULT NULL,
              `birth_day` date DEFAULT NULL,
              `email` varchar(255) DEFAULT NULL,
              `created` datetime NOT NULL,
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
