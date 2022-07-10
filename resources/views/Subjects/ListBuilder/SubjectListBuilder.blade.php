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
            <th>ID</th>
            <th>Nome da Materia</th>
            {{-- <th>Professor</th>
            <th>Email do Professor</th>
            <th>Sala</th>
            <th>Período</th>
            <th>Trabalhos</th> --}}
            <th>Operações</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
                <tr>
                    <td>{{ $subject->id }}</td>
                    <td>{{ $subject->name }}</td>
                    {{-- <td>Eduardo Nascimento Rodrigues</td>
                    <td>eduardonascimento@test.com</td>
                    <td>8º A</td>
                    <td>Tarde</td>
                    <td>5</td> --}}
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('edit.subject', ['id_subject' => $subject->id ]) }}" class="btn btn-sm btn-outline-gray">Editar</a>

                            <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <form action="{{ route('destroy.subject', ['id_subject' => $subject->id ]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item" onclick="return confirm('Deletar esta matéria ?')">Remover</b>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
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
