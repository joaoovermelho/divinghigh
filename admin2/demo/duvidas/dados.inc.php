<?php
$arrDados = array(

    'tabela' => 'duvidas',
    'tabela_ordem_listagem' => 'id',
    'tabela_label' => 'Duvidas',

    'campos' => array(
            'id' => array (
                'legenda' => 'ID',
                'tipo' => 'textbox',
                'key' => 1,
                'listagem' => 1,
                'inserir' => 0,
                'editar' => 0
            ),

            'email' => array (
                'legenda' => 'email',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 0,
                'editar' => 0
            ),

            'titulo' => array (
                'legenda' => 'Título',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 0,
                'editar' => 0
            ),
            
            
            'texto' => array (
                'legenda' => 'Texto',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 0,
                'editar' => 0
            )
    )

);