<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MiCorreo;
use Illuminate\Support\Facades\Mail;

class CorreoController extends Controller
{
    public function enviarCorreo()
    {
        $details = [
            'title' => 'Título del correo',
            'body' => 'Contenido del correo'
        ];

        try {
            Mail::to('destinatario@example.com')->send(new MiCorreo($details));
            return 'Correo enviado con éxito';
        } catch (\Exception $e) {
            return 'Error al enviar el correo: ' . $e->getMessage();
        }
    }
}
