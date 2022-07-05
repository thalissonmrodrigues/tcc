{{-- Page Content --}}
@section('content')
  <div class="row content-area">
    {{-- Filters --}}
    @include('Classrooms.Filters.ClassroomFilter')

    {{-- Rooms listing table --}}
    <div class="content table-responsive">
      <table class="table mt-3">
        <thead>
          <tr>
            <th>Sala</th>
            <th>Período</th>
            <th>Professor Responsável</th>
            <th>Aluno Representante</th>
            <th>Operações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>8º A</td>
            <td>Tarde</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('list.info.classroom', ['id_classroom' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('edit.classroom', ['id_classroom' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>8º A</td>
            <td>Tarde</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('list.info.classroom', ['id_classroom' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('edit.classroom', ['id_classroom' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>8º A</td>
            <td>Tarde</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('list.info.classroom', ['id_classroom' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('edit.classroom', ['id_classroom' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>8º A</td>
            <td>Tarde</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('list.info.classroom', ['id_classroom' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('edit.classroom', ['id_classroom' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>8º A</td>
            <td>Tarde</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('list.info.classroom', ['id_classroom' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('edit.classroom', ['id_classroom' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>8º A</td>
            <td>Tarde</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('list.info.classroom', ['id_classroom' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('edit.classroom', ['id_classroom' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection

{{-- Layout Settings  --}}
@extends('Layout')

@section('cta_route')
  {{ route('add.classroom')}}
@endsection
@section('cta_btn', 'Adicionar Sala')
@section('title_page', 'Listagem de Salas')
@section('icon_title')
  <i class="fa-solid fa-school"></i>
@endsection
