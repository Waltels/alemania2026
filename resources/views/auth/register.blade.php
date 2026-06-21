@extends('layout.master2')

@section('content')
<div class="row w-100 mx-0 auth-page">
  <div class="col-md-8 col-xl-4 mx-auto">
    <div class="card">
      <div class="row">
        <div class="col-md-4 pe-md-0">
        </div>
        <div class="ps-md-0">
          <div class="auth-form-wrapper px-4 py-5">
            <a href="#" class="nobleui-logo d-block mb-2">UE<span> Alemania</span></a>
            <h5 class="text-secondary fw-normal mb-4">Bienvenido a la página de administración.</h5>
            <form class="forms-sample" method="POST" action="{{ route('register') }}">
              @csrf
              <div class="mb-3">
                <label for="exampleInputUsername1" class="form-label">Nombre de usuario</label>
                <input type="text" name="name" class="form-control" id="exampleInputUsername1" autocomplete="Username" placeholder="Nombre de usuario">
              </div>
              <div class="mb-3">
                <label for="userEmail" class="form-label">Dirección de correo electrónico</label>
                <input type="email" name="email" class="form-control" id="userEmail" placeholder="Correo electrónico">
              </div>
              <div class="mb-3">
                <label for="userPassword" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" id="userPassword" autocomplete="current-password" placeholder="Contraseña">
              </div>
              <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="authCheck">
                <label class="form-check-label" for="authCheck">
                  Recuerda la contraseña
                </label>
              </div>
              <div>
                <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0">Registrate</button>
              </div>
              <p class="mt-3 text-secondary">Si ya tienes una cuenta? <a href="{{ url('/login') }}">Ingresa aqui</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection