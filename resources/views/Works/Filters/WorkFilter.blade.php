<div class="filter-area d-none col-md-4">
    <form action="#" method="post" class="filters">
        <h3>Filtros</h3>

        <label>
            Status <br>
            <select class="form-select"  name="status">
            <option selected>Selecione o status</option>
            <option value="pendente">Pendente</option>
            <option value="entregue">Entregue</option>
            <option value="Atrasado">Atrasado</option>
            </select>
        </label>

        <label>
            Data de entrega <br>
            <input type="text" placeholder="DD/MM/YYYY" id="input-delivery-date" class="form-control" name="delivery-date">
        </label>

        <label>
            Materia <br>
            <select class="form-select" name="materia">
            <option selected>Selecione a materia</option>
            <option value="matematica">Matematica</option>
            <option value="portugues">Portugues</option>
            <option value="ciencias">Ciencias</option>
            </select>
        </label>

        <label>
            Série <br>
            <select class="form-select" name="materia">
            <option selected>Selecione a série</option>
            <option value="8">8º</option>
            <option value="7">7º</option>
            <option value="6">6º</option>
            </select>
        </label>

        <label>
            Sigla <br>
            <select class="form-select" name="materia">
            <option selected>Selecione a sigla</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            </select>
        </label>

        <br>
        <input type="submit" value="Filtrar">
    </form>
</div>
