<?php
$arrDados = array(

    'tabela' => 'equipa',
    'tabela_ordem_listagem' => 'id',
    'tabela_label' => 'Equipa',
    'multinivel' => 0,

    'campos' => array(
            'id' => array (
                'legenda' => 'ID',
                'tipo' => 'textbox',
                'key' => 1,
                'listagem' => 1,
                'inserir' => 0,
                'editar' => 0
            ),

            'nome' => array (
                'legenda' => 'Nome',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'cargo' => array (
                'legenda' => 'Cargo',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'fotografia' => array (
                'legenda' => 'Fotografia',
                'tipo' => 'imagem',
                'pastaImagens' => 'equipa',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'ativo' => array (
                'legenda' => 'Ativo',
                'tipo' => 'checkbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            )

    )

);