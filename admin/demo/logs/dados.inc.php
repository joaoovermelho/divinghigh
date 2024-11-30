<?php
$arrDados = array(

    'tabela' => 'logs',
    'tabela_ordem_listagem' => 'id DESC',
    'tabela_label' => 'Logs',
    'insert' => 0,
    'edit' => 0,

    'campos' => array(
            'id' => array (
                'legenda' => 'ID',
                'tipo' => 'textbox',
                'key' => 1,
                'listagem' => 1,
                'inserir' => 0,
                'editar' => 0
            ),

            'session' => array (
                'legenda' => 'Sessão',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 0
            ),

            'ip' => array (
                'legenda' => 'ip',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 0
            ),

            'url' => array (
                'legenda' => 'Link',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 0
            ),

            'data' => array (
                'legenda' => 'Data/Hora',
                'tipo' => 'data',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 0
            ),

            'ativo' => array (
                'legenda' => 'Ativo',
                'tipo' => 'checkbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 0
            )

    )

);