<?php
$arrDados = array(

    'tabela' => 'atleta',
    'tabela_ordem_listagem' => 'sexo',
    'tabela_label' => 'Atletas',


    'campos' => array(
            'id' => array (
                'legenda' => 'ID',
                'tipo' => 'textbox',
                'key' => 1,
                'listagem' => 1,
                'inserir' => 0,
                'editar' => 0
            ),

            'sexo' => array (
                'legenda' => 'Sexo',
                'tipo' => 'select',
                'select_options' => array(
                                        array(
                                            'key' => 1,
                                            'label' => 'Masculino'
                                        ),
                                        array(
                                            'key' => 2,
                                            'label' => 'Feminino',
                                            'default' => 1
                                        )
                                    ),
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

            'sobrenome' => array (
                'legenda' => 'Sobrenome',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'nacionalidade' => array (
                'legenda' => 'Nacionalidade',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'idade' => array (
                'legenda' => 'Idade',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'altura' => array (
                'legenda' => 'Altura',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'fotografia' => array (
                'legenda' => 'Fotografia',
                'tipo' => 'imagem',
                'pastaImagens' => 'atletas',
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
?>