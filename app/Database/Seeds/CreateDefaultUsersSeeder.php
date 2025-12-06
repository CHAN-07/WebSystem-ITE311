<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CreateDefaultUsersSeeder extends Seeder
{
    public function run()
    {
        // Ensure the users table exists. If it doesn't, this will throw a DB error.
        $builder = $this->db->table('users');

        $data = [
            [
                'name'       => 'Admin User',
                'email'      => 'admin@example.com',
                'password'   => password_hash('AdminPass123!', PASSWORD_DEFAULT),
                'role'       => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];

        foreach ($data as $user) {
            $exists = $builder->where('email', $user['email'])->get()->getRow();
            if (!$exists) {
                $builder->insert($user);
            }
        }

        echo "Admin account created (if it did not already exist).\n";
    }
}
