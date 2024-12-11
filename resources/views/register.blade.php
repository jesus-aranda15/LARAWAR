@extends('layouts.app')

@section('title', 'Registrar cuenta')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-4">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title text-center">Crear una cuenta</h4>
              <form method="POST" action="{{ route('register') }}">
                  @csrf
                  
                  <!-- Campo nombre -->
                  <div class="form-outline mb-4">
                      <input type="text" id="name" name="name" class="form-control" required />
                      <label class="form-label" for="name">Nombre completo</label>
                  </div>

                  <!-- Campo email -->
                  <div class="form-outline mb-4">
                      <input type="email" id="email" name="email" class="form-control" required />
                      <label class="form-label" for="email">Correo electrónico</label>
                  </div>

                  <!-- Campo password -->
                  <div class="form-outline mb-4">
                      <input type="password" id="password" name="password" class="form-control" required />
                      <label class="form-label" for="password">Contraseña</label>
                  </div>

                  {{-- <!-- Campo confirmación de contraseña -->
                  <div class="form-outline mb-4">
                      <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required />
                      <label class="form-label" for="password_confirmation">Confirmar contraseña</label>
                  </div> --}}

                  <!-- Botón de registro -->
                  <button type="submit" class="btn btn-primary btn-block mb-4">Registrar</button>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
