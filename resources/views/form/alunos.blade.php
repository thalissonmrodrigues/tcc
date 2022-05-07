{{-- Layout Settings  --}}
@extends('layout')

@section('title_page')
  @if ($variavel_dados_temporaria)
    Editar Aluno
  @else
    Adicionar Aluno
  @endif
@endsection

@section('icon_title')
<i class="fa-solid fa-people-group"></i>
@endsection

{{-- Page Content --}}
@section('content')
  <form action="#" method="POST" class="row g-3 my-2 form-add-edit">
    <div class="col-md-6 ps-0">
      <label class="form-label w-100">
        Nome
        <input required id="studentName" type="text" class="form-control" value="@if ($variavel_dados_temporaria) Alguma Coisa @endif">
      </label>
    </div>

    <div class="col-md-6 ps-0">
      <label class="form-label w-100">
        Sobrenome
        <input required id="studentSurname" type="text" class="form-control" value="@if ($variavel_dados_temporaria) Alguma Coisa @endif">
      </label>
    </div>

    <div class="col-md-6 ps-0">
      <label class="form-label w-100">
        Email
        <input required type="email" class="form-control" value="@if ($variavel_dados_temporaria) Alguma Coisa @endif">
      </label>
    </div>

     <div class="col-md-6 ps-0">
     <label class="form-label w-100">
        Senha
        <input required type="password" class="form-control">
      </label>
    </div>

    <div class="col-md-3 ps-0">
      <label class="form-label">
        Série
        <select class="form-select">
          <option selected>Selecione a série</option>
          <option value="8">8º</option>
          <option value="7">7º</option>
          <option value="6">6º</option>
        </select>
      </label>
    </div>

    <div class="col-md-3 ps-0">
      <label class="form-label">
        Sigla
        <select class="form-select">
          <option selected>Selecione a sigla</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </label>
    </div>

    <div class="col-md-3 ps-0">
      <label class="form-label">
        Período
        <select class="form-select">
          <option selected>Selecione o período</option>
          <option value="manha">Manhã</option>
          <option value="tarde">Tarde</option>
          <option value="noite">Noite</option>
        </select>
      </label>
    </div>

    <div class="col-12 ps-0">
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" @if ($variavel_dados_temporaria) checked @endif>
          Representante da sala
        </label>
      </div>
    </div>

    <div class="col-12 ps-0">
      <button type="submit" class="btn btn-custom">@if ($variavel_dados_temporaria) Salvar @else Adicionar @endif</button>
      <a href="{{ route('listagem.alunos') }}" class="btn">cancelar</a>
    </div>
  </form>
@endsection