@extends('layout.master')

@push('plugin-styles')
  
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Organización</a></li>
    <li class="breadcrumb-item active" aria-current="page">Paralelos</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-5 grid-margin stretch-card mx-auto">
    <div class="card">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addParaleloModal">
              Agregar Paralelo
            </button>
      <div class="card-body">
        <h6 class="card-title">Basic Table</h6>
        <p class="text-secondary mb-3">Add class <code>.table</code></p>
        <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th style="text-align: right;">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($paralelos as $paralelo)
                <tr>
                  <th>{{ $paralelo->id }}</th>
                  <td>{{ $paralelo->nombre }}</td>
                  <td>
                    <div class="example" style="text-align: right;">
                        <button type="button" class="btn btn-primary btn-icon" data-bs-toggle="modal" data-bs-target="#editParaleloModal{{ $paralelo->id }}"><i data-lucide="check-square"></i></button>
                        <!-- modal para editar -->
                        <div class="modal fade" id="editParaleloModal{{ $paralelo->id }}" tabindex="-1" aria-labelledby="editParaleloModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editParaleloModalLabel">Editar Paralelo</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="{{ route('paralelos.update', $paralelo->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                  <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre del Paralelo</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $paralelo->nombre }}" required>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <form class="delete-form" action="{{ route('paralelos.destroy', $paralelo->id) }}" method="POST" style="display: inline-block;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-icon"><i data-lucide="trash-2"></i></button>
                        </form>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal para crear nueva gestión -->
<div class="modal fade" id="addParaleloModal" tabindex="-1" aria-labelledby="addParaleloModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addParaleloModalLabel">Agregar Nuevo Paralelo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('paralelos.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Paralelo</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
      <script>
        forms = document.querySelectorAll('.delete-form');
        forms.forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminarlo!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush

@push('custom-scripts')
   
@endpush