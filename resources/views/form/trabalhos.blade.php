{{-- Layout Settings  --}}
@extends('layout')

@section('title_page')
  @if ($variavel_dados_temporaria)
    Editar Trabalho
  @else
    Adicionar Trabalho
  @endif
@endsection

@section('icon_title')
  <i class="fa-solid fa-file"></i>
@endsection

{{-- Page Content --}}
@section('content')
  <form action="#" method="POST" class="row g-3 my-2 form-add-edit">
    <div class="col-md-6 ps-0">
      <label class="form-label w-100">
        Nome
        <input required id="nomeTrab" type="text" class="form-control" value="@if ($variavel_dados_temporaria) Alguma Coisa @endif">
      </label>
    </div>

    <div class="col-md-4 ps-0">
      <label class="form-label w-100">
        Data de entrega
        <input required type="text" class="form-control" id="input-delivery-date" value="@if ($variavel_dados_temporaria) 20/10/2022 @endif">
      </label>
    </div>

    <div class="col-md-2 ps-0">
      <label class="form-label w-100">
        Pontos
        <input required type="text" class="form-control" id="nota" value="@if ($variavel_dados_temporaria) 1.50 @endif">
      </label>
    </div>

    <div class="col-md-12 ps-0">
      <label class="form-label w-100">
        Descrição
        <textarea class="form-control">@if ($variavel_dados_temporaria) Alguma Coisa @endif</textarea>
      </label>
    </div>


    <div class="col-md-3 ps-0">
      <label class="form-label">
        Matéria
        <select class="form-select">
          <option selected>Selecione a matéria</option>
          <option value="id_materia">Dispositivos Moveis</option>
          <option value="id_materia">Dispositivos Moveis</option>
          <option value="id_materia">Dispositivos Moveis</option>
        </select>
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

    <div class="mb-3 col-md-12 ps-0">
      <input class="form-control" type="file" multiple="multiple">
    </div>

    <div class="col-12 ps-0">
      <button type="submit" class="btn btn-custom">@if ($variavel_dados_temporaria) Salvar @else Adicionar @endif</button>
      <a href="{{ route('listagem.trabalhos') }}" class="btn">cancelar</a>
    </div>
  </form>
@endsection