<div class="filter-area d-none col-md-4">
    <form action="{{ route('show.list.subject') }}" method="GET" class="filters">
        <h3>Filtros</h3>

        <label>
            Nome da Materia <br>
            <input type="text" placeholder="Digite o nome da materia" class="form-control" name="name">
        </label>

        <br>
        <input type="submit" value="Filtrar">
    </form>
</div>
