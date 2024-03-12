<!-- Conhecimentos adquiridos no curso "Avançando com PHP: Arrays, Strings, Funções e Web":

Projeto: Criação de um sistema de gerenciamento de tarefas.

Descrição: O objetivo desse projeto é criar um sistema que permita ao usuário cadastrar, visualizar, editar e excluir tarefas. Cada tarefa deve possuir um título, uma descrição e um status (pendente, em andamento ou concluída).

Requisitos:
Criar uma página inicial que exiba todas as tarefas cadastradas.
Permitir ao usuário cadastrar uma nova tarefa, informando o título, a descrição e o status.
Permitir ao usuário visualizar os detalhes de uma tarefa específica.
Permitir ao usuário editar os dados de uma tarefa existente.
Permitir ao usuário excluir uma tarefa.
Implementar a funcionalidade de marcar uma tarefa como concluída.
Implementar a funcionalidade de filtrar as tarefas por status (pendente, em andamento ou concluída).

Dicas:
Utilize arrays para armazenar as informações das tarefas.
Utilize funções para realizar as operações de cadastro, visualização, edição e exclusão de tarefas.
Utilize loops e estruturas condicionais para controlar o fluxo do programa.
Utilize formulários HTML para capturar os dados informados pelo usuário.
Lembre-se de testar o seu sistema com diferentes cenários e validar os resultados. Divirta-se desenvolvendo o projeto e boa sorte! -->

<?php

require './avancando/funcoes.php';

 $tarefas = [
    'pagarConta' => [
        'descricao' => 'conta de luz',
        'status' => 'realizado'
    ],
    'fazerCompra' =>  [
        'descricao' => 'mercado',
        'status' => 'pendente'
    ],
    'fazerExercicio' => [
        'descricao' => 'Fazer exercícios físicos',
        'status' => 'realizado'
    ],
    'estudar' => [
        'descricao' => 'fazer curso alura',
        'status' => 'andamento'
    ],
];


foreach ($tarefas as $seila => $fodase) {
    ['descricao' => $descricao, 'status' => $status] = $fodase;
    exibeMensagem ("$seila \t\r  $descricao \t\r $status \t\r");
}
