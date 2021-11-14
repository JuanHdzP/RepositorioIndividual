@extends('Layout/app')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <center>
                    <h3 class="text-white text-capitalize ps-3">Articulos</h3>
                </center>
                <div class="float-end">  
                    {{-- Button del modal --}}                
                      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fas fa-plus-circle"></i>
                      </button>
                  </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
              <div class="container">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">  
        <div class="modal-header-center">
          <br>
          <h5 class="modal-title text-center" id="exampleModalLabel">Ingresa Articulo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label=""></button>
        </div>
        <div class="modal-body">
          <div class="container">
          <div class="row">
            <form action="{{ route('article.store') }}" method="POST">
              {{ csrf_field() }} 
                <label class= "col" for="">Articulo:</label>
                <input class="col from-control" type="text" name="name" placeholder="Nombre">
      </div>
          <center>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
</center>
        <!-- </div> -->
      </form>
    </div>
  </div>
      </div>
    </div>
  </div>
      <div class="row">
                <table class="table align-items-center mb-0">
            <thead>
                <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Clave</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opciones</th>
                </tr>  
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                    <td>
                    <form action="{{ route('article.destroy', $article) }}" method="POST">
                            @method('DELETE')
                            @csrf
                          <input 
                          type="submit"
                          value="Eliminar" 
                          class="btn btn-sm btn-danger"
                          onClick="return confirm('estas seguro  a eliminar el registro?')">
                  </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection