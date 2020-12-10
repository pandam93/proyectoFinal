<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Classroom;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //PRIMER ANIO

        $classrooms = array('desarrollo de aplicaciones web', 
        'desarrollo de aplicaciones multiplataforma',
        'administracion de sistemas informaticos en red'
        );

        $shortClassroomsNames = array('1DAW',
                            '1DAM',
                            '1ASIR');

                                                    // Populate roles
                        $role1 = new App\Role();
                        $role1->name = 'professor';
                        $role1->description = 'Administrator';
                        $role1->save();
                        
                        $role2 = new App\Role();
                        $role2->name = 'student';
                        $role2->description = 'User';
                        $role2->save();

                        $roles = collect([$role1, $role2]);

        factory(App\Classroom::class, 3)->make()->each( function ($classroom) use(&$classrooms, &$shortClassroomsNames, $roles) {

            $classroom->name = array_pop($classrooms);
            $classroom->short_name = array_pop($shortClassroomsNames);


            $classroom->year = 1;

            

            $teachersCollection = factory(App\User::class, 6)->create()->each(function ($user) use ($roles) {
                (rand(0,1)) 
                ? 
                $user->profile()->save(factory(App\Profile::class)->make())
                :
                $user->profile()->save(factory(App\Profile::class)->state('female')->make());

                $user->roles()->attach(
                    $roles->get(0)->id
                ); 
            });
                            // Populate the pivot table
                            

                            
            $teachersCollectionClone = clone $teachersCollection;

            $classroom->tutor_id= $teachersCollection->random()->id;



            $studentsCollection = factory(App\User::class, 20)->create()->each(function ($user) use ($roles) { 
           // Populate the pivot table
            
           (rand(0,1)) 
           ? 
           $user->profile()->save(factory(App\Profile::class)->make())
           :
           $user->profile()->save(factory(App\Profile::class)->state('female')->make());

           $user->roles()->attach(
               $roles->get(1)->id
           ); 
            });
 
        

$teachersCollectionClone = clone $teachersCollection;

$classroom->tutor_id= $teachersCollection->random()->id;


            $studentsCollectionClone = clone $studentsCollection;

            $classroom->delegado_id = $studentsCollection->random()->id;
            
            $classroom->save();
            $id = $classroom->id;

            if($classroom->short_name == '1DAW'){

                $subjects = array('Sistemas informáticos', 
                'Bases de Datos',
                'Programación',
                'Lenguajes de marcas y sistemas de gestión de información',
                'Entornos de desarrollo',
                'Formación y Orientación Laboral'
                );
    
                $shortSubjectsNames = array('SI',
                                            'BBDD',
                                            'PROG',
                                            'LMSGE',
                                            'ED',
                                            'FOL');
    
                $subjectsOf1DAW = factory(App\Subject::class, 6)->make()->each(function ($subject) use(&$subjects, &$shortSubjectsNames, $studentsCollectionClone){
    
                    $subject->name = array_pop($subjects);
                    $subject->short_name = array_pop($shortSubjectsNames);
                    //$subject->professor_id = User::where('role','pr')->get()->random()->id;
                    $subject->classroom_id = Classroom::get()->last()->id;
                    $subject->save();

                        factory(App\Task::class,3)->make()->each(function ($task) use ($subject, $studentsCollectionClone){
                            dd($subject->name);


                            $task->title = 'La tarea de hoy';
                            $task->body = 'lo de faker va medio como el culo estoy por buscar otra cosa';
                            $task->subject_id = $subject->id;
                            $task->created_at = Carbon::now();
                            $task->expires_at = Carbon::now()->addDays(rand(1, 10));

                            $task->save();

                            foreach($studentsCollectionClone as $user){
                                DB::table('notes')->insert([
                                    'task_id' => $task->id,
                                    'user_id' => $user->id,
                                    'created_at' => Carbon::now()->subDays(rand(1, 10)),
                                    //'grade' => rand(1,10)
                                ]);
                            }
                        });
                });

                $subjectsOf1DAW->each(function($subjectOf1DAW) use($studentsCollection, &$teachersCollection) {

                    foreach($studentsCollection as $student){
                        DB::table('subject_user')->insert([
                            'user_id' => $student->id,
                            'subject_id' => $subjectOf1DAW->id,
 
                        ]);
                    }


                    DB::table('subject_user')->insert([
                        'user_id' => $teachersCollection->pop()->id,
                        'subject_id' => $subjectOf1DAW->id
                    ]);
                    
                });

                }elseif($classroom->short_name == '1DAMsssssssssssssssssssssssssssssssssssssssss'){

                $subjects = array('Sistemas informáticos',
                'Bases de Datos',
                'Programación',
                'Lenguajes de marcas y sistemas de gestión de información',
                'Entornos de desarrollo',
                'Formación y Orientación Laboral'
                );
    
                $shortSubjectsNames = array('SI',
                                            'BBDD',
                                            'PROG',
                                            'LMSGE',
                                            'ED',
                                            'FOL');
    
            $subjectsOf1DAM = factory(App\Subject::class, 6)->make()->each(function ($subject) use(&$subjects, &$shortSubjectsNames, $studentsCollectionClone){
    
                    $subject->name = array_pop($subjects);
                    $subject->short_name = array_pop($shortSubjectsNames);
                    //$subject->professor_id = User::where('role','pr')->get()->random()->id;
                    $subject->classroom_id = Classroom::get()->last()->id;
                    $subject->save();

                    factory(App\Task::class,3)->make()->each(function ($task) use ($subject, $studentsCollectionClone){
                        $task->title = 'La tarea de hoy';
                        $task->body = 'lo de faker va medio como el culo estoy por buscar otra cosa';
                        $task->subject_id = $subject->id;
                        $task->created_at = Carbon::now();
                        $task->expires_at = Carbon::now()->subDays(rand(1, 5));
                        $task->save();

                        foreach($studentsCollectionClone as $user){
                            DB::table('notes')->insert([
                                'task_id' => $task->id,
                                'user_id' => $user->id,
                                'grade' => rand(1,10)
                            ]);
                        }
                    });
    
                });

            $subjectsOf1DAM->each(function($subjectOf1DAM) use($studentsCollection, &$teachersCollection) {

                foreach($studentsCollection as $student){
                    DB::table('subject_user')->insert([
                        'user_id' => $student->id,
                        'subject_id' => $subjectOf1DAM->id,

                    ]);
                }


                DB::table('subject_user')->insert([
                    'user_id' => $teachersCollection->pop()->id,
                    'subject_id' => $subjectOf1DAM->id
                ]);
                
            });
            }elseif($classroom->short_name == '1ASIRssssssssssssssssssssssssssssssssssssssssss'){
    
                $subjects = array('Planificación y administración de redes', 
                'Implantación de sistemas operativos',
                'Fundamentos de hardware',
                'Gestión de bases de datos',
                'Lenguajes de marcas y sistemas de gestión de información',
                'Formación y Orientación Laboral'
                );
    
                $shortSubjectsNames = array('PAR',
                                            'ISO',
                                            'FH',
                                            'GBD',
                                            'LMSGI',
                                            'FOL');
    
                $subjectsOf1ASIR = factory(App\Subject::class, 6)->make()->each(function ($subject) use(&$subjects, &$shortSubjectsNames,$studentsCollectionClone){
    
                    $subject->name = array_pop($subjects);
                    $subject->short_name = array_pop($shortSubjectsNames);
                    //$subject->professor_id = User::where('role','pr')->get()->random()->id;
                    $subject->classroom_id = Classroom::get()->last()->id;
                    $subject->save();

                    /*factory(App\Task::class,3)->make()->each(function ($task) use ($subject, $studentsCollectionClone){
                        $task->title = 'La tarea de hoy';
                        $task->body = 'lo de faker va medio como el culo estoy por buscar otra cosa';
                        $task->subject_id = $subject->id;
                        $task->created_at = Carbon::now();
                        $task->save();

                        foreach($studentsCollectionClone as $user){
                            DB::table('notes')->insert([
                                'task_id' => $task->id,
                                'user_id' => $user->id,
                                'grade' => rand(1,10)
                            ]);
                        }

                    });*/
    
                });

                $subjectsOf1ASIR->each(function($subjectOf1ASIR) use($studentsCollection, &$teachersCollection) {

                    foreach($studentsCollection as $student){
                        DB::table('subject_user')->insert([
                            'user_id' => $student->id,
                            'subject_id' => $subjectOf1ASIR->id,
 
                        ]);
                    }


                    DB::table('subject_user')->insert([
                        'user_id' => $teachersCollection->pop()->id,
                        'subject_id' => $subjectOf1ASIR->id
                    ]);
                    
                });
            }

            
            $teachersCollectionClone->each(function ($teacher) use($id){
                DB::table('classroom_user')->insert([
                    'user_id' => $teacher->id,
                    'classroom_id' => $id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),

                ]);

            });

            $studentsCollection->each(function ($student) use($id){
                DB::table('classroom_user')->insert([
                    'user_id' => $student->id,
                    'classroom_id' => $id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),

                ]);

            });

            



        });

        //SEGUNDO ANIO

        $classrooms = array('desarrollo de aplicaciones web', 
        'desarrollo de aplicaciones multiplataforma',
        'administracion de sistemas informaticos en red'
        );

        $shortClassroomsNames = array('2DAW',
                            '2DAM',
                            '2ASIR');

        /*factory(App\Classroom::class, 3)->make()->each( function ($item) use(&$classrooms, &$shortClassroomsNames) {
            $item->name = array_pop($classrooms);
            $item->short_name = array_pop($shortClassroomsNames);
            $item->year = 'segundo';
            $item->save();
        });*/
    }
}
