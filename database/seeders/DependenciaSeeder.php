<?php

namespace Database\Seeders;

use App\Models\Admin\Dependencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DependenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $dependencia = new Dependencia();

        $dependencia->provincia = 'Loja';
        $dependencia->parroquia = 'Vilcabamba';
        $dependencia->num_distrito = '09';
        $dependencia->cod_distrito = '11D01';
        $dependencia->distrito = 'Loja';
        $dependencia->num_circuito = '22';
        $dependencia->cod_circuito = '11D01C01';
        $dependencia->circuito = 'Vilcabamba';
        $dependencia->num_subcircuito = '1';
        $dependencia->cod_subcircuito = '11D01C01S01';
        $dependencia->subcircuito = 'Vilcabamba 1';

        $dependencia->save();

        $dependencia2 = new Dependencia();

        $dependencia2->provincia = 'Loja';
        $dependencia2->parroquia = 'Quinara';
        $dependencia2->num_distrito = '09';
        $dependencia2->cod_distrito = '11D01';
        $dependencia2->distrito = 'Loja';
        $dependencia2->num_circuito = '22';
        $dependencia2->cod_circuito = '11D01C02';
        $dependencia2->circuito = 'Yangana';
        $dependencia2->num_subcircuito = '1';
        $dependencia2->cod_subcircuito = '11D01C02S01';
        $dependencia2->subcircuito = 'Yangana 1';

        $dependencia2->save();

        $dependencia3 = new Dependencia();

        $dependencia3->provincia = 'Loja';
        $dependencia3->parroquia = 'Malacatos';
        $dependencia3->num_distrito = '09';
        $dependencia3->cod_distrito = '11D01';
        $dependencia3->distrito = 'Loja';
        $dependencia3->num_circuito = '22';
        $dependencia3->cod_circuito = '11D01C03';
        $dependencia3->circuito = 'Malacatos';
        $dependencia3->num_subcircuito = '1';
        $dependencia3->cod_subcircuito = '11D01C03S01';
        $dependencia3->subcircuito = 'Malacatos 1';

        $dependencia3->save();

        $dependencia4 = new Dependencia();

        $dependencia4->provincia = 'Loja';
        $dependencia4->parroquia = 'Chuquiribamba';
        $dependencia4->num_distrito = '09';
        $dependencia4->cod_distrito = '11D01';
        $dependencia4->distrito = 'Loja';
        $dependencia4->num_circuito = '22';
        $dependencia4->cod_circuito = '11D01C04';
        $dependencia4->circuito = 'Taquil';
        $dependencia4->num_subcircuito = '2';
        $dependencia4->cod_subcircuito = '11D01C04S01';
        $dependencia4->subcircuito = 'Taquil 1';

        $dependencia4->save();

        $dependencia5 = new Dependencia();

        $dependencia5->provincia = 'Loja';
        $dependencia5->parroquia = 'Taquil';
        $dependencia5->num_distrito = '09';
        $dependencia5->cod_distrito = '11D01';
        $dependencia5->distrito = 'Loja';
        $dependencia5->num_circuito = '22';
        $dependencia5->cod_circuito = '11D01C04';
        $dependencia5->circuito = 'Taquil';
        $dependencia5->num_subcircuito = '2';
        $dependencia5->cod_subcircuito = '11D01C04S02';
        $dependencia5->subcircuito = 'Taquil 2';

        $dependencia5->save();

        $dependencia6 = new Dependencia();

        $dependencia6->provincia = 'Loja';
        $dependencia6->parroquia = 'Loja';
        $dependencia6->num_distrito = '09';
        $dependencia6->cod_distrito = '11D01';
        $dependencia6->distrito = 'Loja';
        $dependencia6->num_circuito = '22';
        $dependencia6->cod_circuito = '11D01C05';
        $dependencia6->circuito = 'Zamora Huayco';
        $dependencia6->num_subcircuito = '1';
        $dependencia6->cod_subcircuito = '11D01C05S01';
        $dependencia6->subcircuito = 'Zamora Huayco 1';

        $dependencia6->save();

        $dependencia7 = new Dependencia();

        $dependencia7->provincia = 'Loja';
        $dependencia7->parroquia = 'Loja';
        $dependencia7->num_distrito = '09';
        $dependencia7->cod_distrito = '11D01';
        $dependencia7->distrito = 'Loja';
        $dependencia7->num_circuito = '22';
        $dependencia7->cod_circuito = '11D01C06';
        $dependencia7->circuito = 'Esteban Godoy';
        $dependencia7->num_subcircuito = '2';
        $dependencia7->cod_subcircuito = '11D01C06S01';
        $dependencia7->subcircuito = 'Esteban Godoy 1';

        $dependencia7->save();

        $dependencia8 = new Dependencia();

        $dependencia8->provincia = 'Loja';
        $dependencia8->parroquia = 'Loja';
        $dependencia8->num_distrito = '09';
        $dependencia8->cod_distrito = '11D01';
        $dependencia8->distrito = 'Loja';
        $dependencia8->num_circuito = '22';
        $dependencia8->cod_circuito = '11D01C06';
        $dependencia8->circuito = 'Esteban Godoy';
        $dependencia8->num_subcircuito = '2';
        $dependencia8->cod_subcircuito = '11D01C06S01';
        $dependencia8->subcircuito = 'Esteban Godoy 2';

        $dependencia8->save();

        $dependencia9 = new Dependencia();

        $dependencia9->provincia = 'Loja';
        $dependencia9->parroquia = 'Loja';
        $dependencia9->num_distrito = '09';
        $dependencia9->cod_distrito = '11D01';
        $dependencia9->distrito = 'Loja';
        $dependencia9->num_circuito = '22';
        $dependencia9->cod_circuito = '11D01C07';
        $dependencia9->circuito = 'El Paraíso';
        $dependencia9->num_subcircuito = '1';
        $dependencia9->cod_subcircuito = '11D01C07S01';
        $dependencia9->subcircuito = 'El Paraíso 1';

        $dependencia9->save();

        $dependencia10 = new Dependencia();

        $dependencia10->provincia = 'Loja';
        $dependencia10->parroquia = 'Loja';
        $dependencia10->num_distrito = '09';
        $dependencia10->cod_distrito = '11D01';
        $dependencia10->distrito = 'Loja';
        $dependencia10->num_circuito = '22';
        $dependencia10->cod_circuito = '11D01C08';
        $dependencia10->circuito = 'Celi Roman';
        $dependencia10->num_subcircuito = '1';
        $dependencia10->cod_subcircuito = '11D01C08S01';
        $dependencia10->subcircuito = 'Celi Roman 1';

        $dependencia10->save();

        $dependencia11 = new Dependencia();

        $dependencia11->provincia = 'Loja';
        $dependencia11->parroquia = 'Loja';
        $dependencia11->num_distrito = '09';
        $dependencia11->cod_distrito = '11D01';
        $dependencia11->distrito = 'Loja';
        $dependencia11->num_circuito = '22';
        $dependencia11->cod_circuito = '11D01C09';
        $dependencia11->circuito = 'IV Centenario';
        $dependencia11->num_subcircuito = '1';
        $dependencia11->cod_subcircuito = '11D01C09S01';
        $dependencia11->subcircuito = 'IV Centenario 1';

        $dependencia11->save();

        $dependencia12 = new Dependencia();

        $dependencia12->provincia = 'Loja';
        $dependencia12->parroquia = 'Loja';
        $dependencia12->num_distrito = '09';
        $dependencia12->cod_distrito = '11D01';
        $dependencia12->distrito = 'Loja';
        $dependencia12->num_circuito = '22';
        $dependencia12->cod_circuito = '11D01C10';
        $dependencia12->circuito = 'Tebaida';
        $dependencia12->num_subcircuito = '1';
        $dependencia12->cod_subcircuito = '11D01C10S01';
        $dependencia12->subcircuito = 'Tebaida 1';

        $dependencia12->save();

        $dependencia13 = new Dependencia();

        $dependencia13->provincia = 'Loja';
        $dependencia13->parroquia = 'Loja';
        $dependencia13->num_distrito = '09';
        $dependencia13->cod_distrito = '11D01';
        $dependencia13->distrito = 'Loja';
        $dependencia13->num_circuito = '22';
        $dependencia13->cod_circuito = '11D01C11';
        $dependencia13->circuito = 'Los Molinos';
        $dependencia13->num_subcircuito = '1';
        $dependencia13->cod_subcircuito = '11D01C11S01';
        $dependencia13->subcircuito = 'Los Molinos 1';

        $dependencia13->save();

    }
}
