<x-layout title='Editar'>
<div class="container container-sm m-5">
      <form method="POST" action="{{route('pessoa.update', $pessoa->id)}}">
        @csrf
        @method('PUT')
        <h1>Usuário</h1>
        

        <div class="w-50 p-2">
          <label class="form-label" >Nome</label>  
          <input type="text" name="nome" class="form-control" value="{{ $pessoa->nome }}">  
        </div>
        <div class="w-50 p-2">
          <label class="form-label">Email</label>  
          <input type="text" name="email" class="form-control" value="{{ $pessoa->email }}">  
        </div>
        <div class="mb-5 w-50 p-2">
          <label class="form-label" >Endereço</label>  
          <input type="text" name="endereco" class="form-control" value="{{ $pessoa->endereco }}">        
        </div>

        <div class="mb-5">
          <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
        </div>
        </form>
    
</div>
</x-layout>