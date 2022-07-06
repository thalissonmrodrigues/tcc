{{-- Page Content --}}
@section('content')
  <form action="#" method="POST" class="p-3 my-2 mx-auto form-add-edit">
    <div class="ps-0">
      <label class="form-label">
        Nome da matéria
        <input required id="subjectName" type="text" class="form-control" value="@if ($variavel_dados_temporaria) Alguma Coisa @endif">
      </label>
    </div>

    <div class="py-2">
      <button id="btnAddSubject"type="submit" class="btn btn-custom">@if ($variavel_dados_temporaria) Salvar @else Adicionar @endif</button>
      <a href="{{ route('list.subject') }}" class="btn">cancelar</a>
    </div>
  </form>
@endsection

{{-- Layout Settings  --}}
@extends('Layout')

@section('title_page')
  @if ($variavel_dados_temporaria)
    Editar Matéria
  @else
    Adicionar Matéria
  @endif
@endsection

@section('icon_title')
  <i class="fa-solid fa-book"></i>
@endsection