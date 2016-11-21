<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function welcome()
    {
        return view('home.home');
    }


    public function contact(Request $request)
    {
        /*
        $this->validate($request,[
            'nombre' => 'required|string',
            'email' => 'required|e-mail',
            'telefono' => 'numeric',
            'comentario' => 'required|min:10|string'
        ]);
        $data = array(
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'comentario' => $request->comentario
        );
        */
        $contenido= '';
        if(isset($request["nombre"]) && isset($request["email"]) && isset($request["comentario"]) ){
        $to = "contacto@victoriabirchner.com.ar";
        $subject = "Mensaje Enviado";
        $contenido .= "Nombre: ".$request["nombre"]."\n";
        $contenido .= "Email: ".$request["email"]."\n\n";
        $contenido .= "Email: ".$request["comentario"]."\n\n";
        $header = "From: contacto@victoriabirchner.com.ar\nReply-To:".$request["email"]."\n";
        $header .= "Mime-Version: 1.0\n";
        $header .= "Content-Type: text/plain";
        if(mail($to, $subject, $contenido ,$header)){
            return redirect('/')->with('message', 'Hemos recibido su consulta.Nos comunicaremos a la brevedad. ');
        }
    }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
