{{-- Page Content --}}
@section('content')
  <div class="row content-area">
    {{-- Filters --}}
    @include('Subjects.Filters.SubjectFilter')

    {{-- Subjects listing table --}}
    <div class="content table-responsive">
      <table class="table mt-3">
        <thead>
          <tr>
            <th>Nome da Materia</th>
            <th>Professor</th>
            <th>Email do Professor</th>
            <th>Sala</th>
            <th>Período</th>
            <th>Trabalhos</th>
            <th>Operações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Dispositivos moveis</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>5</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.subject', ['id_subject' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Dispositivos moveis</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>5</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.subject', ['id_subject' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Dispositivos moveis</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>5</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.subject', ['id_subject' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Dispositivos moveis</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>5</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.subject', ['id_subject' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Dispositivos moveis</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>5</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.subject', ['id_subject' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Dispositivos moveis</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>5</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.subject', ['id_subject' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

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
  {{ route('add.subject')}}
@endsection
@section('cta_btn', 'Adicionar Matéria')
@section('title_page', 'Listagem de Matérias')
@section('icon_title')
  <i class="fa-solid fa-book"></i>
@endsection
