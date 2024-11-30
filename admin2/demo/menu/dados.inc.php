<?php
$arrDados = array(

    'tabela' => 'menu',
    'tabela_ordem_listagem' => 'ordem, nome',
    'tabela_label' => 'Menu Principal',
    'multinivel' => 1,

    'campos' => array(
            'id' => array (
                'legenda' => 'ID',
                'tipo' => 'textbox',
                'key' => 1,
                'listagem' => 1,
                'inserir' => 0,
                'editar' => 0
            ),

            'pai' => array(
                'legenda' => 'Pai',
                'tipo' => 'select',
                
                /*
                'select_options' => array(
                                        array(
                                            'key' => 0,
                                            'label' => 'Não'
                                        ),
                                        array(
                                            'key' => 1,
                                            'label' => 'Sim',
                                            'default' => 1
                                        ),
                                        array(
                                            'key' => 2,
                                            'label' => 'Outra'
                                        )
                                    ),
                */                
                
                
                'select_table' => array(
                                        'table' => 'menu',
                                        'filter' => 'ativo = 1',
                                        'key' => 'id',
                                        'label' => 'nome'
                                    ),
                
                

                'multinivel_key' => 1,
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'nome' => array (
                'legenda' => 'Nome',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'url' => array (
                'legenda' => 'Link',
                'tipo' => 'textbox',
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