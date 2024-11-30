<?php
$arrDados = array(

    'tabela' => 'imagensindex',
    'tabela_ordem_listagem' => 'id',
    'tabela_label' => 'Imagens Finais da Página Home',


    'campos' => array(
            'id' => array (
                'legenda' => 'ID',
                'tipo' => 'textbox',
                'key' => 1,
                'listagem' => 1,
                'inserir' => 0,
                'editar' => 0
            ),

            'alt' => array (
                'legenda' => 'Nome (Acessibilidade)',
                'tipo' => 'textbox',
                'listagem' => 1,
                'inserir' => 1,
                'editar' => 1
            ),

            'imagem' => array (
                'legenda' => 'Imagem',
                'tipo' => 'imagem',
                'pastaImagens' => 'imagensIndex',
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
?>