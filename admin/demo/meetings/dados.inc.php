<?php
$arrDados = array(

    'tabela' => 'meetings',
    'tabela_ordem_listagem' => 'id',
    'tabela_label' => 'Meetings',
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

            'user' => array (
                'legenda' => 'User',
                'tipo' => 'select',
                'select_table' => array(
                    'table' => 'utilizadores',
                    'filter' => 'estado = 1',
                    'key' => 'username',
                    'label' => 'username'
                ),
                'multinivel_key' => 1,
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
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'local' => array (
                'legenda' => 'Local',
                'tipo' => 'select',
                'select_table' => array(
                    'table' => 'mapa_interativo',
                    'filter' => 'ativo = 1',
                    'key' => 'localidade',
                    'label' => 'localidade'
                ),               
                'multinivel_key' => 1,
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'data' => array (
                'legenda' => 'Data do meeting',
                'tipo' => 'data_time',
                'listagem' => 1,
                'inserir' => 1,
                'editar' =>1
            ),

            'num_participantes' => array (
                'legenda' => 'Nª Participantes',
                'tipo' => 'textbox',
                'hidden' => 1,
                'listagem' => 1,
                'inserir' => 0,
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