<x-layout title='Editar'>
<div class="container container-sm m-5">
      <form method="POST" action="{{route('pessoa.store')}}">
        @csrf
        <h1>Usuário</h1>
        <?var_dump($pessoas);?>

        <div class="w-50 p-2">
          <label class="form-label">Nome</label>  
          <input type="text" name="nome" class="form-control">  
        </div>
        <div class="w-50 p-2">
          <label class="form-label">Email</label>  
          <input type="text" name="email" class="form-control">  
        </div>
        <div class="mb-5 w-50 p-2">
          <label class="form-label">Endereço</label>  
          <input type="text" name="endereco" class="form-control">        
        </div>

        <div class="mb-5">
          <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
        </div>
        </form>
    
</div>
</x-layout>