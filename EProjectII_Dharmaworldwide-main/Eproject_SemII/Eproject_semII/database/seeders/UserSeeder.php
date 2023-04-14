<?php

namespace Database\Seeders;

use App\Enums\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'fullName' => 'Hoang Minh Hieu',
                'email' => 'hieuhmth@fpt.edu.vn',
                'phone' => '0375886096',
                'address' => 'Thai Binh',
                'username' => 'NobleHDĐ',
                'password' => Hash::make('123456'),
                'role' => Role::ADMIN
            ],
            [
                'fullName' => 'Ngo Quang Dai',
                'email' => 'daingo@gmail.com',
                'phone' => '098968656',
                'address' => 'Hai Phong',
                'username' => 'Dai',
                'password' => Hash::make('123456'),
                'role' => Role::USER
            ],
            [
                'fullName' => 'Nguyen Ngoc Hung ',
                'email' => 'NguyenHung@gmail.com',
                'phone' => '0686789999',
                'address' => 'Ha Noi',
                'username' => 'Hung',
                'password' => Hash::make('123456'),
                'role' => Role::USER
            ],
            [
                'fullName' => 'Bui Tuan Anh',
                'email' => 'Tuananhbui@gmail.com',
                'phone' => '0123456789',
                'address' => 'Ha Noi',
                'username' => 'tuananh',
                'password' => Hash::make('123456'),
                'role' => Role::USER
            ],
            [
                'fullName' => 'Duong Cong Ke',
                'email' => 'CongKe@gmail.com',
                'phone' => '0987456321',
                'address' => 'Ha Noi',
                'username' => 'Ke',
                'password' => Hash::make('123456'),
                'role' => Role::USER
            ],
        ]);
    }
}
