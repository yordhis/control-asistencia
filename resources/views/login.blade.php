<x-layouts.app>

    
    {{-- <div class="col-sm-12">
        <nav class="">

        </nav>
    </div> --}}
    <div class="col-sm-4"> </div>
    <div class="col-sm-4">
        
        <form action="/login" method="post" class="form-control " enctype="multipart/form-data">
            @csrf

            
            @php    $value = old("name", $user->name ?? ($request->name ?? ''))  @endphp
            <x-forms.input 
                    title="Usuario" 
                    name="name" 
                    id="name" 
                    type="text" 
                    commentHelp="Ingrese su nombre de Usuario" 
                    value="{{$value}}"
            />
           
            <x-forms.input 
                    title="Contraseña" 
                    name="password" 
                    id="password" 
                    type="password" 
                    commentHelp="Ingrese Su Password" 
            />

            <x-forms.input 
                    title="" 
                    name="submit" 
                    id="submit" 
                    type="submit" 
                    commentHelp="" 
                    value="Entrar" 
            />
                
    
            
        
            <spam class="text-danger fs-6"> {{$message ?? ''}}</spam>
        </form>
    </div>

    <div class="col-sm-4"></div>

    {{-- <x-alert/> --}}


</x-layouts.app>
