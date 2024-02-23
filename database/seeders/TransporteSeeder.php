<?php

namespace Database\Seeders;

use App\Models\Admin\Transporte;
use Illuminate\Database\Seeder;

class TransporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $transportes = new Transporte();

        $transportes->tipo = 'Automovil';
        $transportes->marca = 'Kia';
        $transportes->modelo = 'Cerato';
        $transportes->placa = 'PEC-7726';
        $transportes->chasis = '741QWE852QW963';
        $transportes->motor = '789QAZ852WSD741';
        $transportes->kilometraje = '328564';
        $transportes->cilindraje = '1800';
        $transportes->carga = '5T';
        $transportes->pasajeros = '05';

        $transportes->save();

        $transportes2 = new Transporte();

        $transportes2->tipo = 'Camioneta';
        $transportes2->marca = 'Kia';
        $transportes2->modelo = 'Sportage';
        $transportes2->placa = 'PEC-8227';
        $transportes2->chasis = '841QWE452QW921';
        $transportes2->motor = '989QAZ742WSD787';
        $transportes2->kilometraje = '528564';
        $transportes2->cilindraje = '2000';
        $transportes2->carga = '10T';
        $transportes2->pasajeros = '05';

        $transportes2->save();

        $transportes3 = new Transporte();

        $transportes3->tipo = 'Automovil';
        $transportes3->marca = 'Kia';
        $transportes3->modelo = 'Cerato';
        $transportes3->placa = 'PEC-1226';
        $transportes3->chasis = '931QWE852QW963';
        $transportes3->motor = '589QAZ852WSD741';
        $transportes3->kilometraje = '428564';
        $transportes3->cilindraje = '1800';
        $transportes3->carga = '5T';
        $transportes3->pasajeros = '05';

        $transportes3->save();
    
        $transportes4 = new Transporte();

        $transportes4->tipo = 'Automovil';
        $transportes4->marca = 'Kia';
        $transportes4->modelo = 'Cerato';
        $transportes4->placa = 'PEC-7026';
        $transportes4->chasis = '417QWE852QW978';
        $transportes4->motor = '219QAZ852WSD621';
        $transportes4->kilometraje = '245564';
        $transportes4->cilindraje = '1800';
        $transportes4->carga = '5T';
        $transportes4->pasajeros = '05';

        $transportes4->save();

        $transportes5 = new Transporte();

        $transportes5->tipo = 'Automovil';
        $transportes5->marca = 'Kia';
        $transportes5->modelo = 'Cerato';
        $transportes5->placa = 'PEC-8076';
        $transportes5->chasis = '852FEJ852QW421';
        $transportes5->motor = '564FAZ842EFJ752';
        $transportes5->kilometraje = '412251';
        $transportes5->cilindraje = '1800';
        $transportes5->carga = '5T';
        $transportes5->pasajeros = '05';

        $transportes5->save();

        $transportes6 = new Transporte();

        $transportes6->tipo = 'Camioneta';
        $transportes6->marca = 'Kia';
        $transportes6->modelo = 'Sportage';
        $transportes6->placa = 'PEC-8727';
        $transportes6->chasis = '4782QWE452QW968';
        $transportes6->motor = '216QAZ742WSD742';
        $transportes6->kilometraje = '328554';
        $transportes6->cilindraje = '2000';
        $transportes6->carga = '10T';
        $transportes6->pasajeros = '05';

        $transportes6->save();
    }
}
