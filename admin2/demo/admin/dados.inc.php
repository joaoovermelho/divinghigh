<?php
$arrDados = array(

    'tabela' => 'admin',
    'tabela_ordem_listagem' => 'nome',
    'tabela_label' => 'Administradores',
    'numMinRegistos' => 1,
    
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

            'username' => array (
                'legenda' => 'Username',
                'tipo' => 'textbox',
                'key' => 0,
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'password' => array (
                'legenda' => 'Password',
                'tipo' => 'password',
                'key' => 0,
                'listagem' => 0,
                'inserir' => 1,
                'editar' => 1
            ),

            'acesso' => array (
                'legenda' => 'Acesso',
                'tipo' => 'data_hora',
                'key' => 0,
                'listagem' => 1,
                'inserir' => 0,
                'editar' => 0
            ),

            'ativo' => array (
                'legenda' => 'Ativo',
                'tipo' => 'checkbox',
                'key' => 0,
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            )
    )
);