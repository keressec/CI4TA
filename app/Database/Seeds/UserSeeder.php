<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        //Seed 1 record
        // $data = [
        //     'nama_user'=> 'Administrator',
        //     'email_user'=> 'roy@roy.com',
        //     'password_user'=> password_hash('roy123', PASSWORD_BCRYPT),
        // ];
        // $this->db->table('user')->insert($data);
        
        //multi data
        $data = [
        [
            'nama_user'=> 'Roy Andani Putra',
            'email_user'=> 'roy@putra.com',
            'password_user'=> password_hash('roy123', PASSWORD_BCRYPT),
        ],
        [
            'nama_user'=> 'Ryan',
            'email_user'=> 'ryan@ryan.com',
            'password_user'=> password_hash('ryan123', PASSWORD_BCRYPT),
        ]
        ];
        $this->db->table('user')->insertBatch($data);

        
    }
}
