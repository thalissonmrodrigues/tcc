{{-- Page Content --}}
@section('content')
  <div class="work-info-area d-flex justify-content-between row my-3">
    {{-- Card Fixed --}}
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
        Corrigir Trabalho
      </button>
      <button class="btn btn-card-flip cancel w-75 my-3 m-auto d-none">
        Cancelar Envio
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
        <form action="#" method="POST" enctype="multipart/form">
          <label class="">
            <p>Nota do Trabalho</p>
            <input class="form-control w-50" id="nota" type="text" name="nota">
          </label>

          <label class="w-100">
            <p>Comentario <span>(opcional)</span></p>
            <textarea style="height: 150px;" class="form-control" name="body">Descrição do trabalho</textarea>
          </label>

          <span class="upload-area">
            <input class="input-file" type="file" name="file[]" multiple="multiple">
            <button type="button" class="btn-upload btn-outline-cyan btn">
              Selecionar Arquivo
              <i class="bi bi-cloud-arrow-up-fill"></i>
            </button>
            <span class="ps-2 file-name"></span>
          </span>

          <button type="submit" class="btn btn-outline-cyan">
            Enviar Correção
            <i class="bi bi-send-fill"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
@endsection

{{-- Layout Settings  --}}
@extends('Layout')

@section('title_page')
  Correção - {{ $nome_do_trabalho }}
@endsection
@section('icon_title')
  <i class="fa-solid fa-file"></i>
@endsection
@section('cta_route')
  {{ route('view.work', ['id_work' => 1])}}
@endsection
@section('cta_btn', 'Voltar')
