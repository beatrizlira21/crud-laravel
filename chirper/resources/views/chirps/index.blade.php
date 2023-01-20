<x-layout>
<div class="container container-sm m-5">
      <form method="POST" action="/cadastrar-pessoa">
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
    <h3>Lista de Clientes</h3>
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
        <tr>
          @foreach($pessoas as $pessoa)
          <td>{{$pessoa->id}}<td/>
          <td>{{$pessoa->nome}}</td>
          <td>{{$pessoa->email}}</td>
          <td>{{$pessoa->endereco}}</td>
          @endforeach
        </tr>
      </table>
    </div>
  </div>
</x-layout>