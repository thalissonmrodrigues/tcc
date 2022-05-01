{{-- Layout Settings  --}}
@extends('layout')

@section('title_page')
  Trabalho - {{ $nome_do_trabalho }}
@endsection
@section('icon_title')
  <i class="fa-solid fa-file"></i>
@endsection
@section('cta_route')
  {{ route('visualiza.trabalho', ['trabalhos' => 1])}}
@endsection
@section('cta_btn', 'Voltar')

{{-- Page Content --}}
@section('content')
  {{-- Card Fixed --}}
  <div class="work-info-area d-flex justify-content-between row my-3">
    <div class="work-info col-md-5">
      <div class="row">
        <p><span>Aluno: </span>Thalisson Manso Rodrigues</p>
        <p><span>Data de entrega: </span>20/10/2022</p>
        <p><span>Professor: </span>Eduardo Nascimento Rodrigues</p>
        <p><span>Materia: </span>Dispositivos moveis</p>
        <p><span>Periodo: </span>Tarde</p>
        <p><span>Sala: </span>8º A</p>
        <p><span>Pontos: </span>2.0</p>
      </div>

      <button class="btn btn-card-flip w-75 my-3 m-auto">
        Ver Correção
      </button>
      <button class="btn btn-card-flip cancel w-75 my-3 m-auto d-none">
        Voltar
      </button>
    </div>

    {{-- Card Flipping --}}
    <div class="card col-md-6">
      <div class="face front">
        <p>Comentario</p>
        <textarea disabled class="form-control">Comentario</textarea>

        <p>Arquivos</p>
        <div class="files">
          <a href="#">Arquivo para baixar</a>
          <a href="#">Arquivo para baixar</a>
          <a href="#">Arquivo para baixar</a>
        </div>
      </div>

      <div class="face back d-none">
          <label class="nota">
            <p>Nota do Trabalho: <span>1.50</span></p>
          </label>

          <label class="w-100 mt-2">
            <p>Comentario do Professor</p>
            <textarea disabled style="height: 185px;" class="form-control" name="body">Descrição do trabalho</textarea>
          </label>

          <p>Arquivos da Correção</p>
          <div class="files">vos moveis 	Eduardo Nascimento Rodrigues 	eduardonascimento@test.com 	8º A 	Tarde 	5 	
Dispositivos moveis 	Eduardo Nascimento Rodrigues 	eduardonascimento@test.com 	8º A 	Tarde 	5 	
Dispositivos moveis 	Eduardo Nascimento Rodrigues 	eduardonascimento@test.com 	8º A 	Tarde 	5 	
Dispositivos moveis 	Eduardo Nascimento Rodrigues 	eduardonascimento@test.com 	8º A 	Tarde 	5 	
Dispositivos moveis 	Eduardo Nascimento Rodrigues 	eduardonascimento@test.com 	8º A 	Tarde 	5 	
Dispositivos moveis 	Eduardo Nascimento Rodrigues 	eduardonascimento@test.com 	8º A 	Tarde 	aixar</a>
            <a href="#">Arquivo para baixar</a>
          </div>
      </div>
    </div>
  </div>
@endsection