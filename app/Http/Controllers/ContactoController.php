<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use ZipArchive;

class ContactoController extends Controller
{
    

    public function show (){
        return view('contacto'); 
    }

    public function store (Request $request){
        
       $msj = $request->validate([
            'nombre' => ['required'],
            'correo' => ['required','email'],
            'mensaje' => ['required','min:30']
        ]);
        
        Mail::to('hola@impulsoui.com.mx')->send(new MessageReceived($msj));

        

        return redirect()->route('contacto.show')->with('info','Mensaje enviado');

        
    }

    
}
