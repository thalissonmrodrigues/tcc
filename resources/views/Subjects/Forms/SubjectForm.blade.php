{{-- Page Content --}}
@section('content')
    @if ($route_form)
        <form action="{{ route('store.subject') }}" method="POST" class="p-3 my-2 mx-auto form-add-edit">
    @else
        <form action="{{ route('update.subject', ['id_subject' => $id ]) }}" method="POST" class="p-3 my-2 mx-auto form-add-edit">
    @endif

    @csrf
    <div class="ps-0">
      <label class="form-label">
        Nome da matéria
        <input required id="subjectName" type="text" class="form-control" name="name" value="{{ $name_subject }}">
      </label>
    </div>

    <div class="py-2">
      <button id="btnAddSubject"type="submit" class="btn btn-custom">Salvar</button>
      <a href="{{ route('list.subject') }}" class="btn">cancelar</a>
    </div>
  </form>
@endsection

{{-- Layout Settings  --}}
@extends('Layout')

@section('title_page')
    {{ $action }}
@endsection

@section('icon_title')
  <i class="fa-solid fa-book"></i>
@endsection
