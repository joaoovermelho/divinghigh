<?php
$arrDados = array(

    'tabela' => 'parcerias',
    'tabela_ordem_listagem' => 'id',
    'tabela_label' => 'Parcerias',


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

            'imagem' => array (
                'legenda' => 'Logotipo',
                'tipo' => 'imagem',
                'pastaImagens' => 'parcerias',
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