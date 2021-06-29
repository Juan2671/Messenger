<?php

namespace App\Observers;

use App\Models\Conversacion;
use App\Models\Mensajes;

class ObservadorMensajes
{

    public function created(Mensajes $mensajes)
    {
        $conver = Conversacion::where('user_id', $mensajes->from_id)
        ->where('contacto_id', $mensajes->to_id)->first();

        if($conver){
            $conver->ultimo_mensages = " TÚ: $mensajes->contenido";
            $conver->hora_ultimo_mensage = $mensajes->created_at;
            $conver->save();
        }

        $conver = Conversacion::where('contacto_id', $mensajes->from_id)
        ->where('user_id', $mensajes->to_id)->first();

        if($conver){
            $conver->ultimo_mensages = " $conver->contact_name: $mensajes->contenido";
            $conver->hora_ultimo_mensage = $mensajes->created_at;
            $conver->save();
        }
    }

}
