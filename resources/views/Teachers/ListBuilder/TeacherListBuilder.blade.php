{{-- Page Content --}}
@section('content')
  <div class="row content-area">
    {{-- Filters --}}
    @include('Teachers.Filters.TeacherFilter')

    {{-- Teachers listing table --}}
    <div class="content table-responsive">
      <table class="table mt-3">
        <thead>
          <tr>
            <th>RGM</th>
            <th>Professor</th>
            <th>Email do Professor</th>
            <th>Materia</th>
            <th>Sala</th>
            <th>Período</th>
            <th>Operações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.teacher', ['id_teacher' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.teacher', ['id_teacher' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.teacher', ['id_teacher' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.teacher', ['id_teacher' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.teacher', ['id_teacher' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.teacher', ['id_teacher' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.teacher', ['id_teacher' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
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
  {{ route('add.teacher')}}
@endsection
@section('cta_btn', 'Adicionar Professor')
@section('title_page', 'Listagem de Professores')
@section('icon_title')
  <i class="fa-solid fa-graduation-cap"></i>
@endsection
