<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
        	[
	        	'nombres' => 'Alex Osca',
	        	'apellidos' => 'Gamarra Solis',
	        	'edad' => 28,
	        	'sexo' => 'Masculino',
	        	'ci' => 70218511,
	        	'tipo_sangre' => 'A+',
	        	'telefono' => 94312435,
	        	'correo' => 'alex@gmail.com',
	        	'direccion' => 'Jr. Ramón Castilla 110'
        	],
        	[
	        	'nombres' => 'María Perla',
	        	'apellidos' => 'Saruc Main',
	        	'edad' => 34,
	        	'sexo' => 'Femenino',
	        	'ci' => 80218522,
	        	'tipo_sangre' => 'A-',
	        	'telefono' => 95231243,
	        	'correo' => 'maria@gmail.com',
	        	'direccion' => 'Jr. Manuel Ruíz 230'
        	],
        	[
	        	'nombres' => 'Julio Ramón',
	        	'apellidos' => 'Quiroga Hasher',
	        	'edad' => 52,
	        	'sexo' => 'Masculino',
	        	'ci' => 23219913,
	        	'tipo_sangre' => 'A+',
	        	'telefono' => 97712333,
	        	'correo' => 'julio@gmail.com',
	        	'direccion' => 'Jr. Enrique Palacios 202'
        	],
        	[
        		'nombres' => 'Mario Idalgo',
				'apellidos' => 'Cuerbo Nieto',
				'edad' => 18,
				'sexo' => 'Masculino',
				'ci' => 80218511,
				'tipo_sangre' => 'B+',
				'telefono' => 93211235,
				'correo' => 'mario@gmail.com',
				'direccion' => 'Jr. Manuel Ruiz 800'
        	],
        	[
        		'nombres' => 'María Rosa',
        		'apellidos' => 'Jara Uri',
				'edad' => 40,
				'sexo' => 'Femenino',
				'ci' => 62215777,
				'tipo_sangre' => 'AB+',
				'telefono' => 95177435,
				'correo' => 'maría@gmail.com',
				'direccion' => 'Jr. Ramón Castilla 401'
        	],
        	[
        		'nombres' => 'Kevin Juan',
				'apellidos' => 'Rodriguez Ezquivel',
				'edad' => 49,
				'sexo' => 'Masculino',
				'ci' => 78218555,
				'tipo_sangre' => 'A+',
				'telefono' => 93499435,
				'correo' => 'kevin@gmail.com',
				'direccion' => 'Jr. Alfonso Ugarte 2020'
        	],
        	[
        		'nombres' => 'Cielo Celeste',
				'apellidos' => 'Lázaro Peterson',
				'edad' => 50,
				'sexo' => 'Femenino',
				'ci' => 23888591,
				'tipo_sangre' => 'A-',
				'telefono' => 97166115,
				'correo' => 'cielo@gmail.com',
				'direccion' => 'Jr. Francisco Bolognesi'
        	]
        ]);
    }
}
