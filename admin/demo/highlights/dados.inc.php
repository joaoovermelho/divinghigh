<?php
$arrDados = array(

    'tabela' => 'highlights',
    'tabela_ordem_listagem' => 'id',
    'tabela_label' => 'Highlights',
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

            'titulo' => array (
                'legenda' => 'Titulo',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'descricao' => array (
                'legenda' => 'Descrição',
                'tipo' => 'textbox',
                'listagem' => 0,
                'inserir' => 1,
                'editar' => 1
            ),

            'thumbnail' => array (
                'legenda' => 'Thumbnail',
                'tipo' => 'imagem',
                'pastaImagens' => 'highlights',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'url' => array (
                'legenda' => 'URL',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'data' => array (
                'legenda' => 'Data de Publicação',
                'tipo' => 'data_auto',
                'hidden' => 1,
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 0
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