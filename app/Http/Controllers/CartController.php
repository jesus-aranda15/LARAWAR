<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Computer;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function addToCart(Request $request, $compId)
    {
        // Verifica si el producto existe en la tabla computers
        $product = Computer::find($compId);

        if ($product) {
            // Busca si el producto ya está en el carrito
            $cartItem = Cart::where('computer_id', $compId)->first();

            if ($cartItem) {
                // Si ya está, incrementa la cantidad
                $cartItem->quantity += 1;
                $cartItem->save();
            } else {
                // Si no está, crea una nueva fila en la tabla carts
                Cart::create([
                    'computer_id' => $compId,
                    'quantity' => 1,
                ]);
            }
        }

        // Redirige al carrito
        return redirect('/cart');
    }

    public function showCart()
    {
        // Obtiene todos los productos en el carrito con sus relaciones
        $cartItems = Cart::with('computer')->get();
        return view('cart', compact('cartItems'));
    }


    public function removeFromCart($cartId)
    {
        Cart::find($cartId)->delete();
        return redirect('/cart');
    }

    public function updateCart(Request $request, $cartId)
        {
            // Encuentra el item del carrito
            $cartItem = Cart::find($cartId);

            if ($cartItem) {
                // Actualiza la cantidad
                $cartItem->quantity = $request->quantity;
                $cartItem->save();
            }

            // Redirige nuevamente al carrito
            return redirect('/cart')->with('success', 'Cantidad actualizada correctamente.');
        }

}
    