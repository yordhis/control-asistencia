<x-layouts.app>

    
    <h1>Bienvenidos al panel de control</h1>
    <p>
        <h2>Datos del usuario</h2><br>
        <hr>
        usuario: {{$user->name}} <br><br>
        
        <h2>Datos De la galleta</h2>
        <hr>
        {{-- Nombre De la Galleta: {{$cookie->creado}} <br> --}}
        {{-- valor: {{$cookie->value}} <br>
        Tiempo: {{$cookie->minutes}} <br> --}}

    </p>


    <br>
    <a href="/out">
        <button class="btn btn-danger btn-lg">
            Cerrar Sessión
        </button>
    </a>
    


</x-layouts.app>