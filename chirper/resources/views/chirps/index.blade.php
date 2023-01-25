<x-layout title='Title'>
<div>
      <h1>LISTA</h1>
      <ul>
        @foreach ($pessoaslist as $list)
        <li>
          {{$list->id}}
          {{$list->nome}}
          {{$list->email}}
          {{$list->endereco}}
        </li>
        @endforeach
      </ul>  
  </div>
</x-layout>