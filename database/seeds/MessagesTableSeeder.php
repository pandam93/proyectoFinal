<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;



class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Usuario 1
        factory(App\Message::class)->state('id_1')->create([
            'subject' => 'testing',
            'body' => 'hola',
            'created_at' => Carbon::now()->addMinutes(2)->format('Y-m-d H:i:s')
        ]);

        factory(App\Message::class)->state('id_1')->create([
            'subject' => 'testing',
            'body' => 'bien bien, gracias, y tu?',
            'created_at' => Carbon::now()->addMinutes(4)->format('Y-m-d H:i:s')
        ]);

        factory(App\Message::class)->state('id_1')->create([
            'subject' => 'testing',
            'body' => 'adios',
            'created_at' => Carbon::now()->addMinutes(6)->format('Y-m-d H:i:s')
        ]);

        //Usuario 2
        factory(App\Message::class)->state('id_2')->create([
            'subject' => 'testing',
            'body' => 'ey',
            'created_at' => Carbon::now()->addMinute()->format('Y-m-d H:i:s')
        ]);

        factory(App\Message::class)->state('id_2')->create([
            'subject' => 'testing',
            'body' => 'que tal?',
            'created_at' => Carbon::now()->addMinutes(3)->format('Y-m-d H:i:s')
        ]);

        factory(App\Message::class)->state('id_2')->create([
            'subject' => 'testing',
            'body' => 'bien bien. Bueno, adios',
            'created_at' => Carbon::now()->addMinutes(5)->format('Y-m-d H:i:s')
        ]);




        //CONVERSACION DUMMY ENTRE PROFESOR Y ALUMNO

        //PROFESOR
        factory(App\Message::class)->state('professor')->create([
            'subject' => 'testing',
            'body' => 'Buenas tardes, asi es, el examen se mantiene el lunes apesar de que ira un sustituto por mi ya que no puedo ir',
            'created_at' => Carbon::now()->addMinutes(2)->format('Y-m-d H:i:s')
        ]);

        factory(App\Message::class)->state('professor')->create([
            'subject' => 'testing',
            'body' => 'no lo se, sera quien pueda, igual aunque vaya yo sabes que va a ser un examen facil',
            'created_at' => Carbon::now()->addMinutes(4)->format('Y-m-d H:i:s')
        ]);

        factory(App\Message::class)->state('professor')->create([
            'subject' => 'testing',
            'body' => 'gracias, adios y buena suerte',
            'created_at' => Carbon::now()->addMinutes(6)->format('Y-m-d H:i:s')
        ]);

        //ALUMNO
        factory(App\Message::class)->state('student')->create([
            'subject' => 'testing',
            'body' => 'Hola profe, necesitaba saber si el examen sera este lunes al final o no',
            'created_at' => Carbon::now()->addMinute()->format('Y-m-d H:i:s')
        ]);

        factory(App\Message::class)->state('student')->create([
            'subject' => 'testing',
            'body' => 'vale, pero sabe si sera un sustituto que conozca de la materia? por si podemos preguntarle algo',
            'created_at' => Carbon::now()->addMinutes(3)->format('Y-m-d H:i:s')
        ]);

        factory(App\Message::class)->state('student')->create([
            'subject' => 'testing',
            'body' => 'gracias, informare a los companieros por el grupo de whatsapp de esto. Bueno, adios',
            'created_at' => Carbon::now()->addMinutes(5)->format('Y-m-d H:i:s')
        ]);
    }
}
