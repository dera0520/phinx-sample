<?php

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        $data = [];
        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'name' => $faker->name,
                'kana' =>  $faker->kanaName($gender = null|'male'|'female'),
                'login_code' => $faker->userName,
                'password' => $faker->password,
                'birth_day' => $faker->date($format='Y-m-d', $max='now'),
                'email' => $faker->email,
                'created' => date('Y-m-d H:i:s'),
            ];
        }
        $this->insert('users', $data);
    }
}
