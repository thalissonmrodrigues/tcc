{{-- Page Content --}}
@section('content')
  <div class="row content-area">
    {{-- Filters --}}
    @include('Students.Filters.StudentFilter')

    {{-- Students listing table --}}
    <div class="content table-responsive">
      <table class="table mt-3">
        <thead>
          <tr>
            <th>RGM</th>
            <th>Aluno</th>
            <th>Email do Aluno</th>
            <th>Sala</th>
            <th>Período</th>
            <th>Operações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.student', ['id_student' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.student', ['id_student' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.student', ['id_student' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.student', ['id_student' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.student', ['id_student' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.student', ['id_student' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Remover</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
            <td>8º A</td>
            <td>Tarde</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('edit.student', ['id_student' => 1 ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

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
  {{ route('add.student')}}
@endsection
@section('cta_btn', 'Adicionar Aluno')
@section('title_page', 'Listagem de Alunos')
@section('icon_title')
  <i class="fa-solid fa-people-group"></i>
@endsection
