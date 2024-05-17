<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalletaFortunaController extends Controller
{
    private $mensajes = [
        "Tendrás un día de alegrías y buenos momentos, disfrútalos como nunca.",
        "Concéntrate en lo que quieres lograr y ganarás. No lo olvides.",
        "El cielo será tu límite, pues grandes acontecimientos te sucederán.",
        "Te sentirás feliz como un niño y veras al mundo con sus ojos.",
        "Vivirás tu vejez con comodidades y riquezas materiales.",
        "Confía en tu suerte, que es mucha y te rodeara de prosperidad.",
        "No todo el mundo puede recibir las mismas cosas. Se practico.",
        "Te aguarda una larga y feliz vida.",
        "Muy pronto seras incluido en muchas reuniones, fiestas y tertulias.",
        "Tu corazón estallara de alegría con la llegada de buenas noticias."
        // Agrega todos los mensajes aquí
    ];

    public function obtenerMensaje()
    {
        $mensaje = $this->mensajes[array_rand($this->mensajes)];
        return response()->json(['mensaje' => $mensaje]);
    }
}
