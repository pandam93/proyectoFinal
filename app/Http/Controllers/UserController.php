<?php

namespace App\Http\Controllers;

use App\User;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;




class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        if (Gate::allows('student-home')) {
            $datosPerfil = Auth::user()->profile;
            $datosClase = Auth::user()->classrooms->first();
            //dd($datosClase->subjects);
            $asignaturas = $datosClase->subjects;

            return view('student.home')->with(compact('datosPerfil', 'asignaturas','datosClase'));
        }

        if (Gate::allows('professor-home')){
            $datosPerfil = Auth::user()->profile;
            $datosClase = Auth::user()->classrooms->first();
            $participantes = $datosClase->users;

            $students = DB::table('profiles')->join('classroom_user', function($join) {
                                            $join->on('profiles.id','=','classroom_user.user_id')
                                            ->where('classroom_user.classroom_id', '=', 1);
                            })->join('subject_user', function($join) {
                                            $join->on('profiles.id','=','subject_user.user_id')
                                            ->where('subject_user.subject_id', '=', 1);
                            })->join('role_user', function($join) {
                                            $join->on('profiles.id','=','role_user.user_id')
                                            ->where('role_user.role_id', '=', 2);
                            })->select('profiles.*')->get();

            $professors = DB::table('profiles')->join('classroom_user', function($join) {
                                            $join->on('profiles.id','=','classroom_user.user_id')
                                            ->where('classroom_user.classroom_id', '=', 1);
                            })->join('role_user', function($join) {
                                            $join->on('profiles.id','=','role_user.user_id')
                                            ->where('role_user.role_id', '=', 1);
                            })->select('profiles.*')->get();
                            

            return view('professor.home')
                        ->with(compact('datosPerfil','datosClase','professors','students'));
        }

        return "limbo>?";

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
