<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    
    public function carro(Request $request)
    {
        $id = $request->input('id');
        $btn = $request->input('btn');
        $nombre = $request->input('nombre');
        $precio = $request->input('precio');
        $carrito = session()->get('carrito', []);

        switch ($btn) {
            case 'btn-agregar':
                $existe = false;
                foreach ($carrito as $index => $producto) {
                    if ($producto['id'] == $id) {
                        $carrito[$index]['cantidad']++;
                        $existe = true;
                        break;
                    }
                }
                if (!$existe) {
                    $carrito[] = [
                        'id' => $id,
                        'nombre' => $nombre,
                        'precio' => $precio,
                        'cantidad' => 1
                    ];
                }
                session(['carrito' => $carrito]);
                return redirect()->back()->with('exito', 'Producto agregado al carrito');

            case 'btn-reducir':
                foreach ($carrito as $index => $producto) {
                    if ($producto['id'] == $id) {
                        $carrito[$index]['cantidad']--;
                        if ($carrito[$index]['cantidad'] <= 0) {
                            unset($carrito[$index]);
                        }
                        break;
                    }
                }
                session(['carrito' => array_values($carrito)]); // Reindexar
                return redirect()->back()->with('exito', 'Producto reducido del carrito');

            case 'btn-eliminar':
                foreach ($carrito as $index => $producto) {
                    if ($producto['id'] == $id) {
                        unset($carrito[$index]);
                        break;
                    }
                }
                session(['carrito' => array_values($carrito)]); // Reindexar
                return redirect()->back()->with('exito', 'Producto eliminado del carrito');

            case 'btn-editar':
                $existe = false;
                $nuevaCantidad = $request->input('cantidad');

                if (is_numeric($nuevaCantidad) && $nuevaCantidad > 0) {
                    foreach ($carrito as $index => $producto) {
                        if ($producto['id'] == $id) {
                            $carrito[$index]['cantidad'] = (int) $nuevaCantidad;
                            $existe = true;
                            break;
                        }
                    }

                    if (!$existe) {
                        $carrito[] = [
                            'id' => $id,
                            'nombre' => $nombre,
                            'precio' => $precio,
                            'cantidad' => (int) $nuevaCantidad
                        ];
                    }

                    session(['carrito' => $carrito]);
                    return redirect()->back()->with('exito', 'Cantidad editada correctamente');
                }

                return redirect()->back()->with('error', 'Cantidad no válida');
        }

        return redirect()->back()->with('error', 'Acción no válida');
    }
}
