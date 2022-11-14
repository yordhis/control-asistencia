<x-layouts.app>
  

   <!-- Flexbox container for aligning the toasts -->
  
<div class="container">
  <div class="row">
    <div class="col-sm-12 mt-5"></div>

    <div class="col-sm-4"></div>
    <div class="col-sm-4 text-center">

      <h1>Esta verificando tu correo</h1>
      <a href="/confirmationEmail/{{$user->id ?? $user['id']}}">
        <button class="btn btn-success btn-lg">
          Confirmar Email
        </button>
      </a>
    </div>

  </div>
</div>
  


    

   

   


</x-layouts.app>