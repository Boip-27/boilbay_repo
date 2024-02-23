<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        User::create([
            'name'=>'Braulio Ilbay',
            'identify'=>'1723625776',
            'birth'=>'1992-05-27',
            'blood'=>'O+',
            'city'=>'Quito',
            'phone'=>'0991436891',
            'grade'=>'Cabo Primero',
            'email'=>'braulio@gmail.com',
            'password'=>bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name'=>'Luis Brito',
            'identify'=>'1722625896',
            'birth'=>'1988-07-07',
            'blood'=>'O+',
            'city'=>'Quito',
            'phone'=>'0991852515',
            'grade'=>'Capitan',
            'email'=>'lucho@gmail.com',
            'password'=>bcrypt('12345678')
        ])->assignRole('Jefe');

        User::create([
            'name'=>'Carlos Figueroa',
            'identify'=>'0602240012',
            'birth'=>'1982-10-07',
            'blood'=>'O+',
            'city'=>'Riobamba',
            'phone'=>'0991896327',
            'grade'=>'Sargento Segundo',
            'email'=>'carlos@gmail.com',
            'password'=>bcrypt('12345678')
        ])->assignRole('Encargado Transportes');

        User::create([
            'name'=>'Luis Figueroa',
            'identify'=>'0602452112',
            'birth'=>'1988-05-07',
            'blood'=>'O+',
            'city'=>'Riobamba',
            'phone'=>'0963896357',
            'grade'=>'Sargento Segundo',
            'email'=>'luis@gmail.com',
            'password'=>bcrypt('12345678')
        ])->assignRole('Encargado Pertrechos');


    }
}
