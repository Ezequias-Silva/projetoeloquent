<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editora;

class EditoraController extends Controller
{
    //cria o metodo index
    public function index(){
      $editoras = Editora::all();
      return View('editora.index',compact('editoras'));
    }
}
