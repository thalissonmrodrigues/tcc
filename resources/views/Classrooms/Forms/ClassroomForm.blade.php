{{-- Page Content --}}
@section('content')
    @if ($route_form)
        <form action="{{ route('store.classroom') }}" method="POST" class="p-3 my-2 mx-auto form-add-edit">
    @else
        <form action="{{ route('update.classroom', ['id_classroom' => $id ]) }}" method="POST" class="p-3 my-2 mx-auto form-add-edit">
    @endif
    @csrf
    <div class="col-md-12 ps-0">
    <label class="form-label">
        Série
        <select class="form-select" name="serie">
            @for ($i = 0; $i <= 9; $i++)
                @if ($route_form)
                    @if ($i == 0)
                        <option value="" selected>Selecione a série</option>
                    @else
                        <option value="{{ $i }}">{{ $i }}º</option>
                    @endif
                @elseif ($i !== 0)
                    @if ($i == $room['serie'])
                        <option value="{{ $i }}" selected>{{ $i }}º</option>
                    @else
                        <option value="{{ $i }}">{{ $i }}º</option>
                    @endif
                @endif
            @endfor
        </select>
    </label>
    </div>

    <div class="ps-0">
    <label class="form-label">
        Sigla
        <select class="form-select" name="letter">
            @foreach (['Selecione a sigla', 'A', 'B', 'C', 'D'] as $key => $value)
                @if ($route_form)
                    @if ($key == 0)
                        <option value="" selected>{{ $value }}</option>
                    @else
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endif
                @elseif ($key !== 0)
                    @if ($value == $room['letter'])
                        <option value="{{ $value }}" selected>{{ $value }}</option>
                    @else
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endif
                @endif
            @endforeach
        </select>
    </label>
    </div>

    <div class="ps-0">
    <label class="form-label">
        Período
        <select class="form-select" name="period">
            @foreach (['Selecione o período', 'Manhã', 'Tarde', 'Noite'] as $key => $value)
                @if ($route_form)
                    @if ($key == 0)
                        <option value="" selected>{{ $value }}</option>
                    @else
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endif
                @elseif ($key !== 0)
                    @if ($value == $room['period'])
                        <option value="{{ $value }}" selected>{{ $value }}</option>
                    @else
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endif
                @endif
            @endforeach
        </select>
    </label>
    </div>

    <div class="py-2">
    <button type="submit" class="btn btn-custom">Salvar</button>
    <a href="{{ route('list.classroom') }}" class="btn">cancelar</a>
    </div>
</form>
@endsection

{{-- Layout Settings  --}}
@extends('Layout')

@section('title_page')
  @if ($action)
    {{ $action }}
  @else
    {{ $action }}
  @endif
@endsection

@section('icon_title')
  <i class="fa-solid fa-school"></i>
@endsection
