<?php

$usuario = [
    'id',
    'email',
    'rgm',
    'senha',
    'nome',
    'permissão',
    'alunoSala', // aluno === aluno : recebe id sala ? NULL
];

$sala = [
    'id',
    'serie',
    'sigla',
    'periodo',
    'profResponsavel',
    'alunoRepresentante',
];

$materia = [
    'id',
    'nomeMateria',
];

$alunoMateria = [
    'id',
    'alunoId',
    'materiaId',
];

$profSala = [
    'id',
    'profId',
    'salaId',
    'materiaId',
];

$Trabalho = [
    'id',
    'nome',
    'descrição',
    'pontos',
    'dataLimite',
    'profSalaId',
];

$trabalhoEnviado = [
    'id',
    'trabalhoId',
    'alunoId',
    'comentarioAluno',
    'arquivos',
    'status',
    'trabalhoCorrigidoId',
];

$trabalhoCorrigido = [
    'id',
    'trabalhoEnviadoId',
    'nota',
    'arquivosCorrigido',
    'comentarioProfessor',
];











profMateria
profMateriaTurma
alunoExecutaTrabalho
ProfMateriaTurmaSolicitaTrabalho
alunoExecutaTrabalho































?>
