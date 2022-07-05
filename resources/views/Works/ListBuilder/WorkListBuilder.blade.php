{{-- Page Content --}}
@section('content')
  <div class="row content-area">
    {{-- Filters --}}
    @include('Works.Filters.WorkFilter')

    {{-- Job listing table --}}
    <div class="content table-responsive">
      <table class="table mt-3">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Sala</th>
            <th>Status</th>
            <th>Data de Entrega</th>
            <th>Materia</th>
            <th>Pontos</th>
            <th>Operações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Trabalho de conclusão de curso</td>
            <td>8º A</td>
            <td>Pendente</td>
            <td>20/10/2022</td>
            <td>Dispositivos moveis</td>
            <td>2.0</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('view.work', ['id_work' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('edit.work', ['id_work' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Trabalho de conclusão de curso</td>
            <td>8º A</td>
            <td>Pendente</td>
            <td>20/10/2022</td>
            <td>Dispositivos moveis</td>
            <td>2.0</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('view.work', ['id_work' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('edit.work', ['id_work' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Trabalho de conclusão de curso</td>
            <td>8º A</td>
            <td>Pendente</td>
            <td>20/10/2022</td>
            <td>Dispositivos moveis</td>
            <td>2.0</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('view.work', ['id_work' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('edit.work', ['id_work' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Trabalho de conclusão de curso</td>
            <td>8º A</td>
            <td>Pendente</td>
            <td>20/10/2022</td>
            <td>Dispositivos moveis</td>
            <td>2.0</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('view.work', ['id_work' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('edit.work', ['id_work' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Trabalho de conclusão de curso</td>
            <td>8º A</td>
            <td>Pendente</td>
            <td>20/10/2022</td>
            <td>Dispositivos moveis</td>
            <td>2.0</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('view.work', ['id_work' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('edit.work', ['id_work' => 1 ]) }}">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Trabalho de conclusão de curso</td>
            <td>8º A</td>
            <td>Pendente</td>
            <td>20/10/2022</td>
            <td>Dispositivos moveis</td>
            <td>2.0</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('view.work', ['id_work' => 1]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('edit.work', ['id_work' => 1 ]) }}">Editar</a></li>
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
  {{ route('add.work')}}
@endsection
@section('cta_btn', 'Adicionar Trabalho')
@section('title_page', 'Listagem de Trabalhos')
@section('icon_title')
  <i class="fa-solid fa-file"></i>
@endsection
@section('active_menu_header', 'trabalhos')

