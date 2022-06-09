{{-- Layout Settings  --}}
@extends('layout')

@section('title_page', 'Configurações')

@section('icon_title')
  <i class="fa-solid fa-gear"></i>
@endsection

{{-- Page Content --}}
@section('content')
  <form action="#" method="POST" class="row g-3 my-2 form-add-edit config">
    @if($permissão)
      <div class="col-md-12 ps-0">
        <label class="form-label w-100">
          Nome
          <input required id="configName" type="text" class="form-control" value="Alguma Coisa">
        </label>
      </div>

      <div class="col-md-12 ps-0">
        <label class="form-label w-100">
          Sobrenome
          <input required id="configSurname" type="text" class="form-control" value="Alguma Coisa">
        </label>
      </div>
    @endif

    <div class="col-md-12 ps-0">
      <label class="form-label w-100">
        Email
        <input required type="email" class="form-control" value="Alguma Coisa">
      </label>
    </div>

     <div class="col-md-12 ps-0">
     <label class="form-label w-100">
        Senha
        <input required type="password" class="form-control" minlength="6">
      </label>
    </div>

    <div class="mb-3 col-md-12 ps-0">
      <label>
        Foto
        <input disabled class="form-control" type="file" multiple="multiple">
      </label>
    </div>

    <div class="col-12 ps-0">
      <button type="submit" class="btn btn-custom">Salvar</button>
      <a href="{{ route('home') }}" class="btn">cancelar</a>
    </div>
  </form>
@endsection