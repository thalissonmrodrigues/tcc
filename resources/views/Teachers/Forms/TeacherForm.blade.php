{{-- Page Content --}}
@section('content')
  <form action="#" method="POST" class="p-3 my-2 form-add-edit">
    <div class="col-md-6 ps-0">
      <label class="form-label w-100">
        Nome
        <input required id= "nameTeacher" type="text" class="form-control" value="@if ($variavel_dados_temporaria) Alguma Coisa @endif">
      </label>
    </div>

    <div class="col-md-6 ps-0">
      <label class="form-label w-100">
        Email
        <input required type="email" class="form-control" value="@if ($variavel_dados_temporaria) Alguma Coisa @endif">
      </label>
    </div>

     <div class="col-md-4 ps-0">
     <label class="form-label w-100">
        Senha
        <input required type="password" class="form-control">
      </label>
    </div>

    <div class="ps-0">
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

    <div class="ps-0">
      <label class="form-label">
        Sala
        <select class="form-select">
          <option selected>Selecione a sala</option>
          <option value="6">6ºA- Manhã</option>
          <option value="6">6ºB- Tarde</option>
          <option value="7">7ºA- Manhã</option>
          <option value="7">7ºB- Tarde</option>
          <option value="8">8ºA- Manhã</option>
          <option value="8">8ºB- Tarde</option>
          <option value="9">9ºA- Manhã</option>
          <option value="9">9ºB- Tarde</option>
        </select>
      </label>
    </div>

    <div class="py-3">
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" @if ($variavel_dados_temporaria) checked @endif>
          Responsavél da sala
        </label>
      </div>
    </div>

    <div class="ps-0">
      <button type="submit" class="btn btn-custom">@if ($variavel_dados_temporaria) Salvar @else Adicionar @endif</button>
      <a href="{{ route('list.teacher') }}" class="btn">cancelar</a>
    </div>
  </form>
@endsection

{{-- Layout Settings  --}}
@extends('Layout')

@section('title_page')
  @if ($variavel_dados_temporaria)
    Editar Professor
  @else
    Adicionar Professor
  @endif
@endsection

@section('icon_title')
  <i class="fa-solid fa-graduation-cap"></i>
@endsection
