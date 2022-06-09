{{-- Layout Settings  --}}
@extends('layout')

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

{{-- Page Content --}}
@section('content')
  <form action="#" method="POST" class="row g-3 my-2 mx-auto form-add-edit">
    <div class="col-md-12 ps-0">
      <label class="form-label">
        Nome da matéria
        <input required id="subjectName" type="text" class="form-control" value="@if ($variavel_dados_temporaria) Alguma Coisa @endif">
      </label>
    </div>

    <div class="col-12 ps-0">
      <button id="btnAddSubject"type="submit" class="btn btn-custom">@if ($variavel_dados_temporaria) Salvar @else Adicionar @endif</button>
      <a href="{{ route('listagem.materias') }}" class="btn">cancelar</a>
    </div>
  </form>
@endsection