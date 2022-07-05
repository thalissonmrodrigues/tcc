<div class="p-0">
    {{-- Work menu tabs --}}
    <ul class="nav nav-tabs mt-3">
        <li class="nav-item">
            <a class="nav-link active" data-page="recebidos">Recebidos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-page="corrigidos">Corrigidos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-page="enviado">Enviado - Aluno</a>
        </li>
    </ul>

    <div class="row">
        <div class="content table-responsive">
        {{-- Recived listing --}}
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>RGM</th>
                    <th>Aluno</th>
                    <th>Email do Aluno</th>
                    <th>Operações</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>20727674</td>
                    <td>Thalisson Manso Rodrigues</td>
                    <td>thalissonrodrigues@test.com</td>
                    <td>
                    <div class="btn-group">
                        <a href="{{ route('correction.work', ['id_work' => 1, 'id_send_work' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                    </div>
                    </td>
                </tr>

                <tr>
                    <td>20727674</td>
                    <td>Thalisson Manso Rodrigues</td>
                    <td>thalissonrodrigues@test.com</td>
                    <td>
                    <div class="btn-group">
                        <a href="{{ route('correction.work', ['id_work' => 1, 'id_send_work' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                    </div>
                    </td>
                </tr>

                <tr>
                    <td>20727674</td>
                    <td>Thalisson Manso Rodrigues</td>
                    <td>thalissonrodrigues@test.com</td>
                    <td>
                    <div class="btn-group">
                        <a href="{{ route('correction.work', ['id_work' => 1, 'id_send_work' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                    </div>
                    </td>
                </tr>

                <tr>
                    <td>20727674</td>
                    <td>Thalisson Manso Rodrigues</td>
                    <td>thalissonrodrigues@test.com</td>
                    <td>
                    <div class="btn-group">
                        <a href="{{ route('correction.work', ['id_work' => 1, 'id_send_work' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                    </div>
                    </td>
                </tr>

                <tr>
                    <td>20727674</td>
                    <td>Thalisson Manso Rodrigues</td>
                    <td>thalissonrodrigues@test.com</td>
                    <td>
                    <div class="btn-group">
                        <a href="{{ route('correction.work', ['id_work' => 1, 'id_send_work' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                    </div>
                    </td>
                </tr>
            </tbody>
        </table>

        {{-- Sent listing --}}
        <table class="table mt-3 d-none">
            <thead>
                <tr>
                    <th>RGM</th>
                    <th>Aluno</th>
                    <th>Email do Aluno</th>
                    <th>Nota</th>
                    <th>Operações</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>20727674</td>
                    <td>Thalisson Manso Rodrigues</td>
                    <td>thalissonrodrigues@test.com</td>
                    <td>1.5</td>
                    <td>
                    <div class="btn-group">
                        <a href="{{ route('view.correction', ['id_work' => 1, 'id_send_work' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                    </div>
                    </td>
                </tr>

                <tr>
                    <td>20727674</td>
                    <td>Thalisson Manso Rodrigues</td>
                    <td>thalissonrodrigues@test.com</td>
                    <td>1.5</td>
                    <td>
                    <div class="btn-group">
                        <a href="{{ route('view.correction', ['id_work' => 1, 'id_send_work' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                    </div>
                    </td>
                </tr>

                <tr>
                    <td>20727674</td>
                    <td>Thalisson Manso Rodrigues</td>
                    <td>thalissonrodrigues@test.com</td>
                    <td>1.5</td>
                    <td>
                    <div class="btn-group">
                        <a href="{{ route('view.correction', ['id_work' => 1, 'id_send_work' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                    </div>
                    </td>
                </tr>

                <tr>
                    <td>20727674</td>
                    <td>Thalisson Manso Rodrigues</td>
                    <td>thalissonrodrigues@test.com</td>
                    <td>1.5</td>
                    <td>
                    <div class="btn-group">
                        <a href="{{ route('view.correction', ['id_work' => 1, 'id_send_work' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                    </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="table mt-3 d-none">
            <thead>
                <tr>
                    <th>RGM</th>
                    <th>Aluno</th>
                    <th>Email do Aluno</th>
                    <th>Nota</th>
                    <th>Operações</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>20727674</td>
                    <td>Thalisson Manso Rodrigues</td>
                    <td>thalissonrodrigues@test.com</td>
                    <td>1.5</td>
                    <td>
                    <div class="btn-group">
                        <a href="{{ route('view.correction', ['id_work' => 1, 'id_send_work' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                    </div>
                    </td>
                </tr>

                <tr>
                    <td>20727674</td>
                    <td>Thalisson Manso Rodrigues</td>
                    <td>thalissonrodrigues@test.com</td>
                    <td>1.5</td>
                    <td>
                    <div class="btn-group">
                        <a href="{{ route('view.correction', ['id_work' => 1, 'id_send_work' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                    </div>
                    </td>
                </tr>

                <tr>
                    <td>20727674</td>
                    <td>Thalisson Manso Rodrigues</td>
                    <td>thalissonrodrigues@test.com</td>
                    <td>1.5</td>
                    <td>
                    <div class="btn-group">
                        <a href="{{ route('view.correction', ['id_work' => 1, 'id_send_work' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                    </div>
                    </td>
                </tr>

                <tr>
                    <td>20727674</td>
                    <td>Thalisson Manso Rodrigues</td>
                    <td>thalissonrodrigues@test.com</td>
                    <td>1.5</td>
                    <td>
                    <div class="btn-group">
                        <a href="{{ route('view.correction', ['id_work' => 1, 'id_send_work' => 2]) }}" class="btn btn-sm btn-outline-gray">ver mais</a>
                    </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
