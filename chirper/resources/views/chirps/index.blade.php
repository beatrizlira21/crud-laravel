<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <title>Formulário</title>
</head>
<body>
  <div class="container container-sm m-5">
      <form method="POST" action="{{ route('chirps.store') }}">
        <h1>Usuário</h1>
        <div class="w-50 p-2">
          <label class="form-label">Nome</label>  
          <input type="text" name="nome" class="form-control">  
        </div>
        <div class="w-50 p-2">
          <label class="form-label">CPF</label>  
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
      </table>
    </div>
  </div>


  <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>