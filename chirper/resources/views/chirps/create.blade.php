<x-layout title='Cadastrar Pessoas'>
<div class="container container-sm m-5">
      <form method="POST" action="{{route('pessoa.store')}}">
        @csrf
        <h1>Usuário</h1>
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
    <h3>Lista de Pessoas</h3>
    <div class="content table table-striped">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>TELEFONE</th>
            
          </tr>
        </thead>
        <tbody>
        @foreach ($pessoas as $list)
          <tr>          
            <td>{{$list->id}}</td>
            <td>{{$list->nome}}</td>
            <td>{{$list->email}}</td>
            <td>{{$list->endereco}}</td>
            <td><a href=""><span class="material-symbols-outlined">delete</span></a></td>
            <td><a href="{{ route('pessoa.edit', $list->id) }}"><span class="material-symbols-outlined">edit</span></a>
                      
          </tr>
          @endforeach 
        </tbody>
      </table>
    </div>
  </div>
</x-layout>