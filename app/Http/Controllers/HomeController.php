<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }
    public function cursos(){
        return view('cursos');
    }
    public function diccionario(){
        return view('diccionario');
    }
    public function perfil(){
        return view('perfil');
    }
    public function colaboradores(){
        return view('colaboradores');
    }
    public function alfabeto(){
        return view('alfabeto');
    }
    public function numeracion(){
        return view('numeracion');
    }
    public function cuerpo(){
        return view('cuerpo');
    }
    public function animales(){
        return view('animales');
    }
    public function colores(){
        return view('colores');
    }
    public function meses(){
        return view('meses');
    }
}
