<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        $data = [
            'title' => 'Health',
            'slug' => 'health',
            'body'=>'Health would thus be a dimension of human existence that remains in existence regardless of the presence of diseases, somewhat like the sky that remains in place even when covered with clouds.
            '
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('news')->insert($data);
    }
}
