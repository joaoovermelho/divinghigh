<?php
$arrDados = array(

    'tabela' => 'utilizadores',
    'tabela_ordem_listagem' => 'id',
    'tabela_label' => 'Utilizadores',
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

            'apelido' => array (
                'legenda' => 'Apelido',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'username' => array (
                'legenda' => 'Username',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'password' => array (
                'legenda' => 'Password',
                'tipo' => 'textbox',
                'listagem' => 0,
                'inserir' => 1,
                'editar' => 0
            ),

            'fotografia' => array (
                'legenda' => 'Fotografia',
                'tipo' => 'imagem',
                'pastaImagens' => 'utilizadores',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'email' => array (
                'legenda' => 'E-mail',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'estado' => array (
                'legenda' => 'Estado',
                'tipo' => 'checkbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            )

    )

);