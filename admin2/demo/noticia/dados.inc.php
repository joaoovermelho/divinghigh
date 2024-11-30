<?php
$arrDados = array(

    'tabela' => 'noticia',
    'tabela_ordem_listagem' => 'id',
    'tabela_label' => 'Noticia',
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

            'subtitulo' => array (
                'legenda' => 'Subtitulo',
                'tipo' => 'textbox',
                'listagem' => 0,
                'inserir' => 1,
                'editar' => 1
            ),

            'conteudo' => array (
                'legenda' => 'Conteudo',
                'tipo' => 'textarea',
                'listagem' => 0,
                'inserir' => 1,
                'editar' => 1
            ),

            'data' => array (
                'legenda' => 'Data de Publicação',
                'tipo' => 'data',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'imagem' => array (
                'legenda' => 'Imagem',
                'tipo' => 'imagem',
                'pastaImagens' => 'noticias',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'ordem' => array (
                'legenda' => 'Ordem',
                'tipo' => 'textbox',
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