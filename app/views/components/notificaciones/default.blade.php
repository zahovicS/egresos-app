@php
    $color = flash()->display('color');
    $mensaje = flash()->display('mensaje');
@endphp
@if ($mensaje)
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div class="toast fade show text-bg-{{ $color }} border-0" role="alert" aria-live="assertive"
            aria-atomic="true" data-bs-autohide="true" data-bs-delay="5000">
            <div class="toast-header">
                <strong class="me-auto">Mensaje del sistema:</strong>
                <small>Hace 2 seg.</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {!! html_entity_decode($mensaje) !!}
            </div>
        </div>
    </div>
@endif
