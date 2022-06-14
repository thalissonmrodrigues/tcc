{{-- Layout Settings  --}}
@extends('layout')

@section('title_page')
  @if ($variavel_dados_temporaria)
    Editar Sala - 8ºA Tarde
  @else
    Adicionar Sala
  @endif
@endsection

@section('icon_title')
  <i class="fa-solid fa-school"></i>
@endsection

{{-- Page Content --}}
@section('content')
  <form action="#" method="POST" class="row g-3 my-2 mx-auto form-add-edit">
    <div class="col-md-12 ps-0">
      <label class="form-label">
        Série
        <select class="form-select">
          <option selected>Selecione a série</option>
          <option value="9">9º</option>
          <option value="8">8º</option>
          <option value="7">7º</option>
          <option value="6">6º</option>
        </select>
      </label>
    </div>

    <div class="col-md-12 ps-0">
      <label class="form-label">
        Sigla
        <select class="form-select">
          <option selected>Selecione a sigla</option>
          <option value="A">A</option>
          <option value="B">B</option>
        </select>
      </label>
    </div>

    <div class="col-md-12 ps-0">
      <label class="form-label">
        Período
        <select class="form-select">
          <option selected>Selecione o período</option>
          <option value="manha">Manhã</option>
          <option value="tarde">Tarde</option>
        </select>
      </label>
    </div>

    <div class="col-md-6 ps-0">
      <label class="form-label w-100">
      Professor Representante
        <input required id="representativeTeacherName" type="text" class="form-control">
      </label>
    </div>

    <div class="col-md-12 ps-0">
      <label class="form-label">
      Professor Representante
        <select class="form-select">
          <option selected>Selecione o professor</option>
          <option value="prof1">Eduardo</option>
          <option value="prof2">Fabiano</option>
          <option value="prof3">Claudia</option>
        </select>
      </label>
    </div>

    <div class="col-12 ps-0">
      <button type="submit" class="btn btn-custom">@if ($variavel_dados_temporaria) Salvar @else Adicionar @endif</button>
      <a href="{{ route('listagem.salas') }}" class="btn">cancelar</a>
    </div>
  </form>
@endsection