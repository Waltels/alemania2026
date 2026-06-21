@extends('layout.master2')

@section('content')
<div class="row w-100 mx-0 auth-page">
  <div class="col-md-8 col-xl-4 mx-auto">
    <div class="card">
      <div class="row">
        <div class="ps-md-0">
          <div class="auth-form-wrapper px-4 py-5">
            <a href="#" class="nobleui-logo d-block mb-2">UE<span> Alemania</span></a>
            <h5 class="text-secondary fw-normal mb-4">Bienvenido a la página de administración.</h5>
            <form class="forms-sample"  action="{{ route('login') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="userEmail" class="form-label">Correo</label>
                <input type="email" name="email" class="form-control" id="userEmail" autocomplete="current-email" placeholder="Email">
              </div>
              <div class="mb-3">
                <label for="userPassword" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" id="userPassword" autocomplete="current-password" placeholder="Password">
              </div>
              <div class="mb-3 d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="authCheck">
                </div>
              </div>
              <div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
              </div>
              <p class="mt-3 text-secondary">Si no tienes una cuenta? <a href="{{ url('/register') }}">Regístrate aquí</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection