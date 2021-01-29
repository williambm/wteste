@extends('Layout.site')

@section('titulo','Cursos :: editar')

@section('conteudo')
    <div class="container">
        <h3 class='center'>Editando Curso</h3>
        <div class="row">
            <form action="{{route('admin.cursos.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.cursos._form')

                <button class="btn deep-orange">Atualizar</button>
            </form>
        </div>        
    </div>    
@endsection