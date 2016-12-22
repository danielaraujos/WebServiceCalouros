<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'name' => 'Administrador',
                'username' => 'admin',
                'password' => '$2y$10$BUQPO7PVDn9gDXdOhuT2VOsyKYWVueR1fS.hnmAfmNtkSZ6nMEQNK',
                'email' => 'admin@admin.com',
            ],
        ];


        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
