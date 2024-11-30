<?php
$arrDados = array(

    'tabela' => 'mapa_interativo',
    'tabela_ordem_listagem' => 'id',
    'tabela_label' => 'Mapa Diving High',
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

            'localidade' => array (
                'legenda' => 'Localidade',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'imagem' => array (
                'legenda' => 'Imagem',
                'tipo' => 'imagem',
                'pastaImagens' => 'mapa',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'dificuldade' => array (
                'legenda' => 'Dificuldade',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'condicoes' => array (
                'legenda' => 'Condições',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),
            
            'assistencia_medica' => array (
                'legenda' => 'Assistência Médica',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),
            
            'rating' => array (
                'legenda' => 'Rating',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),
            
            'ativo' => array (
                'legenda' => 'Ativo',
                'tipo' => 'checkbox',
                'listagem' => 0,
                'inserir' => 1,
                'editar' => 1
            )

    )

);