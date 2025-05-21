<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class guardaPago
{
    public static function localCliente(Request $request)
    {
        session()->forget('carrito');
    }

    public static function localPersonal(Request $request)
    {
        session()->forget('carrito');
    }

    public static function adomicilio($nombrePerona,$telefono,$ubiccion)
    {
        session()->forget('carrito');

    }


}
