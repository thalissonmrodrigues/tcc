{{-- Page Content --}}
@section('content')
  {{-- Room menu tabs --}}
  <ul class="nav nav-tabs mt-3">
    <li class="nav-item">
      <a class="nav-link active" data-page="alunos">Alunos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-page="professores">Professores</a>
    </li>
  </ul>

  <div class="row content-area">
    <div class="content table-responsive">
      {{-- Student listing --}}
      <table class="table mt-3">
        <thead>
          <tr>
            <th>RGM</th>
            <th>Aluno</th>
            <th>Email do Aluno</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Thalisson Manso Rodrigues</td>
            <td>thalissonrodrigues@test.com</td>
          </tr>
        </tbody>
      </table>

      {{-- Teacher listing --}}
      <table class="table mt-3 d-none">
        <thead>
          <tr>
            <th>RGM</th>
            <th>Professor</th>
            <th>Email do Professor</th>
            <th>Materia</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
          </tr>

          <tr>
            <td>20727674</td>
            <td>Eduardo Nascimento Rodrigues</td>
            <td>eduardonascimento@test.com</td>
            <td>Dispositivos moveis</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection

{{-- Layout Settings  --}}
@extends('Layout')

@section('title_page')
  {{ $serie . 'º ' . $sigla . ' - ' . $periodo }}
@endsection
@section('icon_title')
  <i class="fa-solid fa-school"></i>
@endsection

{{-- apenas adm e prof --}}
@section('cta_route')
  {{ route('list.classroom')}}
@endsection
@section('cta_btn', 'Voltar')
