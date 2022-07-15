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
                        <th>Professor Representante</th>
                        <th>Aluno Representante</th>
                        <th>Operações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rooms as $room)
                        <tr>
                            <td>{{ $room['serie'] . 'º ' . $room['letter']}}</td>
                            <td>{{ $room['period'] }}</td>
                            <td>{{ $room['representative_teacher'] }}</td>
                            <td>{{ $room['representative_student']}}</td>
                            <td>
                            <div class="btn-group">
                                <a href="{{ route('list.info.classroom', ['id_classroom' => $room['id'] ]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>

                                <button type="button" class="btn btn-outline-gray btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('edit.classroom', ['id_classroom' => $room['id'] ]) }}">Editar</a></li>
                                <li><form action="{{ route('destroy.classroom', ['id_classroom' => $room['id'] ]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="dropdown-item" onclick="return confirm('Deletar esta sala ?')">Remover</b>
                                </form></li>
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
  {{ route('add.classroom')}}
@endsection
@section('cta_btn', 'Adicionar Sala')
@section('title_page', 'Listagem de Salas')
@section('icon_title')
  <i class="fa-solid fa-school"></i>
@endsection
