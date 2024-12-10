@extends('layouts.app')

@section('content')
<h1>Tu Carrito</h1>

@if ($cartItems->isEmpty())
    <p>No tienes productos en tu carrito.</p>
@else
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $cartItem)
                <tr>
                    <td>{{ $cartItem->computer->name }}</td>
                    <td>
                        <form action="{{ route('cart.update', $cartItem->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input 
                                type="number" 
                                name="quantity" 
                                value="{{ $cartItem->quantity }}" 
                                min="1" 
                                class="form-control d-inline w-auto"
                            >
                            <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
                        </form>
                    </td>
                    <td>${{ $cartItem->computer->price }}</td>
                    <td>${{ $cartItem->computer->price * $cartItem->quantity }}</td>
                    <td>
                        <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
<div class="col d-grid">
    <a class="btn btn-success btn-lg" href="/shop">Volver</a>                                
</div>
@endsection
