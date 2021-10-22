@extends('Layout/app')
    @section('content')
    <div class="container">
      <div class="row">
          <table class="table">
              <thead>
                  <tr>
                  <th>Clave</th>
                  <th>nombre</th>
                  <th>Opciones</th>
                  </tr>  
              </thead>
              <tbody>
                  @foreach($articles as $article)
                  <tr>
                      <td>{{$article->id}}</td>
                      <td>{{$article->title}}</td>
                      <td>
                        <form action="{}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input 
                            type="submit"
                            value="Eliminar" 
                            class="btn btn-sm btn-danger"
                            onClick="return confirm('estas seguro  a eliminar el registro?')">
                        </form>
                    </td>
                  </tr>
                  @endforeach
              </tbody>

          </table>
      </div>
  </div> 
    @endsection