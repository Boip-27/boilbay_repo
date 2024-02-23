<?php

namespace Database\Seeders;

use App\Models\Admin\Pertrecho;
use Illuminate\Database\Seeder;

class PertrechoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $pertrecho = new Pertrecho();

        $pertrecho->tipo_arma = 'Corta';
        $pertrecho->nombre = 'Pistola';
        $pertrecho->descripcion= 'Glock 19';
        $pertrecho->codigo= 'PG_001';
        
        $pertrecho->save();

        $pertrecho2 = new Pertrecho();

        $pertrecho2->tipo_arma = 'Larga';
        $pertrecho2->nombre = 'Pistola';
        $pertrecho2->descripcion= 'Taser';
        $pertrecho2->codigo= 'PT_001';
        
        $pertrecho2->save();

        $pertrecho3 = new Pertrecho();

        $pertrecho3->tipo_arma = 'Larga';
        $pertrecho3->nombre = 'Escopeta';
        $pertrecho3->descripcion= 'Mosberg calibre 12 letal';
        $pertrecho3->codigo= 'EM_001';
        
        $pertrecho3->save();
        
        $pertrecho4 = new Pertrecho();

        $pertrecho4->tipo_arma = 'Larga';
        $pertrecho4->nombre = 'Escopeta';
        $pertrecho4->descripcion= 'Mosberg calibre 12 no letal';
        $pertrecho4->codigo= 'EM_002';
        
        $pertrecho4->save();

        $pertrecho5 = new Pertrecho();

        $pertrecho5->tipo_arma = 'Larga';
        $pertrecho5->nombre = 'Fusil';
        $pertrecho5->descripcion= 'M16';
        $pertrecho5->codigo= 'FM_016';
        
        $pertrecho5->save();

        $pertrecho6 = new Pertrecho();

        $pertrecho6->tipo_arma = 'Larga';
        $pertrecho6->nombre = 'Fusil';
        $pertrecho6->descripcion= 'M4';
        $pertrecho6->codigo= 'FM_004';
        
        $pertrecho6->save();

        $pertrecho7 = new Pertrecho();

        $pertrecho7->tipo_arma = 'Larga';
        $pertrecho7->nombre = 'Carabina';
        $pertrecho7->descripcion= 'Ruger';
        $pertrecho7->codigo= 'CR_001';
        
        $pertrecho7->save();

        $pertrecho8 = new Pertrecho();

        $pertrecho8->tipo_arma = 'Larga';
        $pertrecho8->nombre = 'Escopeta';
        $pertrecho8->descripcion= 'Lanza gas truflite';
        $pertrecho8->codigo= 'ELG_001';
        
        $pertrecho8->save();

    }
}