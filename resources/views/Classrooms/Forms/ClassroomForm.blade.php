{{-- Page Content --}}
@section('content')
  <form action="#" method="POST" class="p-3 my-2 mx-auto form-add-edit">
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

    <div class="ps-0">
      <label class="form-label">
        Sigla
        <select class="form-select">
          <option selected>Selecione a sigla</option>
          <option value="A">A</option>
          <option value="B">B</option>
        </select>
      </label>
    </div>

    <div class="ps-0">
      <label class="form-label">
        Período
        <select class="form-select">
          <option selected>Selecione o período</option>
          <option value="manha">Manhã</option>
          <option value="tarde">Tarde</option>
        </select>
      </label>
    </div>

    <div class="py-2">
      <button type="submit" class="btn btn-custom">@if ($variavel_dados_temporaria) Salvar @else Adicionar @endif</button>
      <a href="{{ route('list.classroom') }}" class="btn">cancelar</a>
    </div>
  </form>
@endsection

{{-- Layout Settings  --}}
@extends('Layout')

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
