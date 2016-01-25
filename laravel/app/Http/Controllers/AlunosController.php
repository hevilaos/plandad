<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AlunosController extends Controller
{
     public function getIndex(){

        Excel::load('public/teste.xlsx', function($alunos))->get();


        //return view('alunos.index');

    }

}
