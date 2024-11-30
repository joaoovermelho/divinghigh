<?php
include 'config.inc.php';

function getURLFriendly ($url, $modulo, $id = 0){
    $query = "SELECT * FROM seo WHERE url ='$url' AND modulo = '$modulo'";
    if($id != 0){
        $query .= " AND modulo_id = '$id'";
    }
    $res = my_query($query);

    if(isset($res[0])){
        return $res[0]['urlfriendly'];
    }
    return $url;

}

function Noticias($regPagina, $start){
    $query = "SELECT * FROM noticia WHERE ATIVO = 1 ORDER BY ordem LIMIT $start, $regPagina"; //ORDER BY RAND() LIMIT 1
    $res = my_query($query);
    $numRegistos = count($res);


    for($i=0; $i<$numRegistos ; $i++){
        echo '
                        <div class="bigpost mb-40">
                            <div class="bigpost__thumb">
                                <img src="upload/noticias/'.$res[$i]['imagem'].'" alt=""> 
                            </div>
                            <div class="bigpost__content">
                                <h2 class="b-title mb-20"><a href="blog-details.html">'.$res[$i]['titulo'].'</a></h2>
                                <h4>'.$res[$i]['subtitulo'].'</h4>
                                <p>'.$res[$i]['conteudo'].'</p>
                                <div class="post-meta pt-15">
                                    <p>Data: <span>'.$res[$i]['data'].'</span></p>
                                </div>
                            </div>
                        </div>';
    }
}

function LastNews(){

    $query = "SELECT * FROM noticia WHERE ATIVO = 1 ORDER BY data DESC";
    $res = my_query($query);

    echo '<div class="singleBlog mb-30"> <a href="noticias.php">
    <img src="upload/noticias/'. $res[0]['imagem'] .'" alt="">
    <div class="singleBlog__content">
        <p>
        '. $res[0]['titulo'] .'
        </p>
        <span>'. $res[0]['data'] .'</span>
    </div></a>
    </div>';
}

function LastHighlights(){

    $query = "SELECT * FROM highlights WHERE ATIVO = 1 ORDER BY data DESC";
    $res = my_query($query);

    echo '<div class="singleBlog mb-30"> <a href="highlights.php">
    <img src="upload/highlights/'. $res[0]['thumbnail'] .'" alt="">
    <div class="singleBlog__content">
        <p>
        '. $res[0]['titulo'] .'
        </p>
        <span>'. $res[0]['data'] .'</span>
    </div></a>
    </div>';
}


function Eventos(){
    $query = "SELECT * FROM eventos WHERE ATIVO = 1 ORDER BY ordem"; //ORDER BY RAND() LIMIT 1
    $res = my_query($query);
    $numRegistos = count($res);

    for($i=0; $i<$numRegistos ; $i++){
    echo ' <div class="bigpost mb-40">
    <div class="bigpost__thumb">
        <img src="upload/eventos/'. $res[$i]['imagem'] .'" alt="">
    </div>
    <div class="bigpost__content">
        <h4>'. $res[$i]['localidade'] .'</h4>
        <h2 class="b-title mb-20"><a href="blog-details.html">'. $res[$i]['titulo'] .'</a></h2>
        <p>'. $res[$i]['subtitulo'] .'</p>
        <div class="post-meta pt-15">
            <p>Data do evento: <span> '. $res[$i]['data'] .' </span></p>
        </div>
    </div>
    </div> ';
    }
}

function MenuConfig(){
    
        $query = "SELECT * FROM menu WHERE ativo = 1 AND filter = 1 ORDER BY ordem"; //ORDER BY RAND() LIMIT 1
        $res = my_query($query);
        $numRegistos = count($res);
        $part1= round(($numRegistos/2)) ;

        for($i=0;$i<$part1;$i++){
            echo '<li> <a href="'. $res[$i]['url'] .'">'. $res[$i]['nome'] .'</a>';
        }

        echo '  <li><a class="d-none d-xl-block" href="homepage">
                    <img class="pl-10 pr-10 logoresize" src="./assets/img/logo/divinghigh-logoWBG.png" alt=""></a>
                </li>';

        for($i=$part1;$i<$numRegistos;$i++){
            echo '<li> <a href="'. $res[$i]['url'] .'">'. $res[$i]['nome'] .'</a>';
        };
}

function MenuConfigFooter(){
    
    $query = "SELECT * FROM menu WHERE ativo = 1 ORDER BY ordem"; //ORDER BY RAND() LIMIT 1
    $res = my_query($query);
    $numRegistos = count($res);

    for($i=0;$i<$numRegistos-1;$i++){
        echo '<li> <a href="'. $res[$i]['url'] .'">'. $res[$i]['nome'] .'</a>';
    }
}

function ProdutosCount($filtro1 , $filtro2){
    if($filtro1 == null AND $filtro2 == null) {
        $query = "SELECT * FROM produtos WHERE ativo = 1 ORDER BY nome";
    } elseif($filtro1 == null AND $filtro2 != null) {
        $query = "SELECT A.* FROM produtos A INNER JOIN tipo B ON A.idTipo = B.id WHERE A.ativo = 1 AND B.label = '$filtro2'";
    } elseif($filtro1 != null AND $filtro2 == null) {
        $query = "SELECT A.* FROM produtos A INNER JOIN catalogo B ON A.idCatalogo = B.id WHERE A.ativo = 1 AND B.label = '$filtro1'";
    }
    $res = my_query($query);
    $numRegistos = count($res);
    echo '<p> A mostrar todos os '.$numRegistos.' produtos</p>';
}

function ProdutosView1($filtro1 , $filtro2){
    if($filtro1 == null AND $filtro2 == null) {
        $query = "SELECT * FROM produtos WHERE ativo = 1 ORDER BY nome";
    } elseif($filtro1 == null AND $filtro2 != null) {
        $query = "SELECT A.* FROM produtos A INNER JOIN tipo B ON A.idTipo = B.id WHERE A.ativo = 1 AND B.label = '$filtro2'";
    } elseif($filtro1 != null AND $filtro2 == null) {
        $query = "SELECT A.* FROM produtos A INNER JOIN catalogo B ON A.idCatalogo = B.id WHERE A.ativo = 1 AND B.label = '$filtro1'";
    }
  
    //echo $query.'<br>';
    $res = my_query($query);
    $numRegistos = count($res);    

    for($i=0; $i<$numRegistos ; $i++){

        $query = "SELECT * FROM tipo WHERE ATIVO = 1 AND id = {$res[$i]['idTipo']} ";
        $resTipo = my_query($query);

        $query = "SELECT * FROM catalogo WHERE ATIVO = 1 AND id = {$res[$i]['idCatalogo']}";
        $resCatalogo = my_query($query);

        $url = 'single.php?id='. $res[$i]['id'];
        $urlfriendly = '/divinghigh/' .getURLFriendly($url, 'produtos', $res[$i]['id']);

        //$seoquery= "SELECT * FROM seo WHERE idItem != NULL";
        //$resSeo = my_query($seoquery);
        
        $preco = $res[$i]['preco'] ;
        if($res[$i]['desconto'] != null){
            $desconto = (100 - $res[$i]['desconto']) / 100; 
            $newpreco = $preco * $desconto;
            
            $newpreco_format = number_format($newpreco, 2, '.', ',');
        }
        $preco_format = number_format($preco, 2, '.', ',');
    
        echo '
                        <div class="col-xl-3">
                            <div class="product product-3">
                                <div class="product__thumb">
                                    <a href="'.$urlfriendly.'">
                                        <img class="product-primary" src="upload/produtos/'.$res[$i]['foto'].'" alt="product_image">';
                                        $foto2= $res[$i]['foto'];
                                        if($res[$i]['foto2'] != NULL){
                                            $foto2 = $res[$i]['foto2'];
                                        }
                                    echo '<img class="product-secondary" src="upload/produtos/'.$foto2.'" alt="product_image">
                                    </a>';
                                    
                                    if($res[$i]['desconto'] != null){
                                        echo '
                                            <div class="product__update">
                                                <a class="#">'.$res[$i]['desconto'].'%</a>
                                            </div>';
                                    }

                                    echo '<div class="product-info mb-10">
                                        <div class="product_category">
                                            <span>'. $resCatalogo[0]['nome'] .' ,</br>'. $resTipo[0]['nome'] .'</span>
                                        </div>
                                        <div class="product_rating">';
/*--------- STARS ---------*/

                                        for($i2=0; $i2<$res[$i]['stars']; $i2++){
                                            echo '<a href="#"><i class="fal fa-star start-color"></i></a>'; 
                                        }
                                        $blackstars = 5 - $res[$i]['stars'];
                                        for($i3=0;$i3<$blackstars;$i3++){
                                            echo '<a href="#"><i class="fal fa-star"></i></a>';
                                        }
/*--------- STARS ---------*/
                                        echo '</div>
                                        </div>
                                        <div class="product__name">
                                        <h4><a href="single.php?id='. $res[$i]['id'] .'">'. $res[$i]['nome'] .'</a></h4>
                                        <div class="pro-price">';
                                        
                                        if($res[$i]['desconto'] != null){
                                            echo '
                                            <p class="p-absoulute pr-1"><span> $'. $newpreco_format .' </span><span class="desconto resize2">$'. $preco_format .'</span></p>
                                            ';
                                        }
                                        else{
                                            echo '<p class="p-absoulute pr-1"><span>$ </span>'. $preco_format .'</p>';
                                        }
                                            
                                        echo '<a class="p-absoulute pr-2" href="single.php?id='. $res[$i]['id'] .'">Já Disponível</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>';
    }
}

/*function ProdutosListView(){
    $query = "SELECT * FROM produtos WHERE ATIVO = 1 "; //ORDER BY RAND() LIMIT 1
    $res = my_query($query);
    $numRegistos = count($res);

    for($i=0; $i<$numRegistos ; $i++){
        echo '
        
                <div class="border-top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="list-product">
                                <div class="list__content">
                                    <a href="single.php?id='. $res[$i]['id'] .'"><img src="upload/produtos/'.$res[$i]['foto'].'" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <div class="list__content">
                                <div class="viewcontent">
                                    <div class="viewcontent__header">
                                        <a href="single.php?id='. $res[$i]['id'] .'"><h2 class="mb-10">'. $res[$i]['nome'] .'</h2></a>
                                    </div>
                                    <div class="viewcontent__rating">';

/*--------- STARS ---------/
                                    for($i4=0; $i4<$res[$i]['stars']; $i4++){
                                        echo '<a href="#"><i class="fal fa-star start-color"></i></a>';
                                    }

                                    $blackstars = 5 - $res[$i]['stars'];
                                    
                                    for($i5=0;$i5<$blackstars;$i5++){
                                        echo '<a href="#"><i class="fal fa-star"></i></a>';
                                    }
/*--------- STARS ---------/

                                    echo '</div>
                                    <div class="viewcontent__price">
                                        <h4><span>$</span>'. $res[$i]['preco'] .'</h4>
                                    </div>
                                    <div class="view__para">
                                        <p>'. $res[$i]['descricao'] .'</p>
                                    </div>
                                    <div class="list-actions pt-20">
                                        <div class="viewcontent__action">
                                            <span> <a href="single.php?id='. $res[$i]['id'] .'">Já Disponível</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
    }
}*/

function SingleProductTitle(){
    $idProduto = $_GET['id'];
    $query = "SELECT * FROM produtos WHERE ativo = 1 AND id = '$idProduto'";
    $resProduto = my_query($query);
    
    $query = "SELECT * FROM tipo WHERE ATIVO = 1 AND id = {$resProduto[0]['idTipo']} ";
    $resTipo = my_query($query);

    $query = "SELECT * FROM catalogo WHERE ATIVO = 1 AND id = {$resProduto[0]['idCatalogo']}";
    $resCatalogo = my_query($query);

    echo'
                <li class="breadcrumb-item"><a href="homepage">Home</a></li>
                <li class="breadcrumb-item"><a href="shop.php">Loja</a></li>
                <li class="breadcrumb-item"><a href="shop.php?catalogo='.$resCatalogo[0]['nome'].'"> '. $resCatalogo[0]['nome'] .' </a></li>
                <li class="breadcrumb-item"><a href="shop.php?tipo='.$resTipo[0]['nome'].'"> '. $resTipo[0]['nome'] .' </a></li>
                <li class="breadcrumb-item"><a href="shop.php"> '. $resProduto[0]['nome'] .'</a></li>
    ';
}

function SingleProductSide(){

    $idProduto = $_GET['id'];
    $query = "SELECT * FROM produtos WHERE ativo = 1 AND id = '$idProduto'";
    $resProduto = my_query($query);

    //print_r($resProduto);

    echo'

                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" type="button" role="tab"  
                    data-bs-toggle="tab" data-bs-target="#homde"
                    aria-selected="true"><img src="upload/produtos/'. $resProduto[0]['foto'] .'" alt=""></button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" type="button" role="tab"  
                    data-bs-toggle="tab" data-bs-target="#profidfdle"
                    aria-selected="false"><img src="upload/produtos/'. $resProduto[0]['foto2'] .'" alt=""></button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" type="button" role="tab"  
                    data-bs-toggle="tab" data-bs-target="#contadfdct"
                    aria-selected="false"><img src="upload/produtos/'. $resProduto[0]['foto3'] .'" alt=""></button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" type="button" role="tab"  
                    data-bs-toggle="tab" data-bs-target="#kidsdfd"
                    aria-selected="false"><img src="upload/produtos/'. $resProduto[0]['foto4'] .'" alt=""></button>
                </li>';
}

function SingleProductPhoto(){

    $idProduto = $_GET['id'];
    $query = "SELECT * FROM produtos WHERE ativo = 1 AND id = '$idProduto'";
    $resProduto = my_query($query);

        echo '
                
                <div class="single-popup-view">
                    <a class="popup-image" href="upload/produtos/'. $resProduto[0]['foto'] .'"><i class="fal fa-search"></i></a>
                </div>
                <div class="tab-content" id="myTabefContent">
                    <div class="tab-pane fade show active" id="homde" role="tabpanel" >
                        <div class="full-view">
                        <img src="upload/produtos/'. $resProduto[0]['foto'] .'" alt="">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profidfdle" role="tabpanel" >
                        <div class="full-view">
                        <img src="upload/produtos/'. $resProduto[0]['foto2'] .'" alt="">
                        </div>                                        
                    </div>
                    <div class="tab-pane fade" id="contadfdct" role="tabpanel">
                        <div class="full-view">
                        <img src="upload/produtos/'. $resProduto[0]['foto3'] .'" alt="">
                        </div>                                        
                    </div>
                    <div class="tab-pane fade" id="kidsdfd" role="tabpanel">
                        <div class="full-view">
                        <img src="upload/produtos/'. $resProduto[0]['foto4'] .'" alt="">
                        </div>
                    </div>
                </div>
            
    ';
}

function SingleProductDescription(){

    $idProduto = $_GET['id'];
    $query = "SELECT * FROM produtos WHERE ativo = 1 AND id = '$idProduto'";
    $resProduto = my_query($query);

    $query = "SELECT * FROM tipo WHERE ATIVO = 1 AND id = {$resProduto[0]['idTipo']} ";
    $resTipo = my_query($query);

    $query = "SELECT * FROM catalogo WHERE ATIVO = 1 AND id = {$resProduto[0]['idCatalogo']}";
    $resCatalogo = my_query($query);

    $preco = $resProduto[0]['preco'] ;

    if($resProduto[0]['desconto'] != null){
        $desconto = (100 - $resProduto[0]['desconto']) / 100; 
        $newpreco = $preco * $desconto;
        
        $newpreco_format = number_format($newpreco, 2, '.', ',');
    }

    $preco_format = number_format($preco, 2, '.', ',');

    echo
       '<div class="col-xl-6 col-lg-6 col-md-12">
            <div class="single_preview_content pl-30">
                <h2 class="title-5 edit-title border-bottom-0">'. $resProduto[0]['nome'] .'</h2>
                <div class="s-product-review">';
// STARS
                for($i6=0; $i6<$resProduto[0]['stars']; $i6++){
                    echo '<span><i class="far fa-star start-color"></i></span>';
                }

                $blackstars = 5 - $resProduto[0]['stars'];

                for($i7=0;$i7<$blackstars;$i7++){
                    echo '<span><i class="far fa-star"></i></span>';
                }
// STARS

//
            echo '<span class="pl-left">('. $resProduto[0]['num_reviews'] .' avaliações)</span>
                </div>
                <div class="s-price pt-30 mb-30">';
                if($resProduto[0]['desconto'] != null){
                    echo '
                    <span> $ '. $newpreco_format .'</span>
                    <span class="desconto resize">$ '. $preco_format . '</span>'
                    ;
                }
                else{
                    echo '<span> $ '. $preco_format .'</span>';
                }

                echo '</div>
                <div class="s-des">
                    <p>'. $resProduto[0]['descricao'] .'</p>
                </div>
                <div class="viewcontent__action single_action pt-30">
                    <span><a href="https://www.nike.com/pt/t/sapatilhas-air-force-1-07-lKPQ6q/CW2288-111">Compra Agora</a></span>
                </div>
                <div class="viewcontent__footer border-top-0 border-bottom pb-30">
                    <ul>
                        <li>Categoria:</li>
                    </ul>
                    <ul>
                        <li>'. $resCatalogo[0]['nome'] .' , '. $resTipo[0]['nome'] .'</li>
                    </ul>
                </div>
            </div>
        </div>';
}

function Atletas($filtro){

    switch($filtro){
        case 'men':     $query = "SELECT * FROM atleta WHERE ATIVO = 1 AND SEXO = 1 "; //ORDER BY RAND() LIMIT 1
                        break;
        case 'women':   $query = "SELECT * FROM atleta WHERE ATIVO = 1 AND SEXO = 2 "; //ORDER BY RAND() LIMIT 1                       
                        break;
    }

    $res = my_query($query);
    $numRegistos = count($res);

    foreach($res as $k => $atleta) {

        $altura = $atleta['altura'] /100;
        $altura_format = number_format($altura, 2, '.', ',');

    echo '<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 ">
                <div class="exhibitions-box mb-30" data-background="upload/atletas/'. $atleta['fotografia'] .'">
                    <h3 class="bg-sub-title">'. $atleta['sobrenome'] .', '. $atleta['nome'] .' <br> </h3> 
                    <h4 class= "subsub"> '. $atleta['idade'] .' anos, '. $altura_format .' metros, '. $atleta['nacionalidade'] .'</h4>
                </div>
            </div>';  
    }
}

function Highlights($regPagina, $start){


    $query = "SELECT * FROM highlights WHERE ATIVO = 1 LIMIT $start , $regPagina";
    $res = my_query($query);
    $numRegistos = count($res);

    foreach($res as $k => $highlights){
    echo'<div class="grid_blog mb-40">
            <div class="highlight_thumb blog-thumb pt-10">
            <a href="singleHighlight.php?id='.$highlights['id'].'"><img src="upload/highlights/'. $highlights['thumbnail'] .'" alt=""></a>
                <div class="grid_blog__content">
                    <h2 class="b-title mt-30 mb-10"><a href="singleHighlight.php?id='.$highlights['id'].'">'. $highlights['titulo'] .'</a></h2>
                    <p>'. $highlights['descricao'] .'</p>
                    <div class="post-meta pt-10">
                        <p>Data de publicação: <span> '. $highlights['data'] .' </span></p>
                    </div>
                </div>
            </div>';
    }
}

function SingleHighlight(){
    $idHighlight=$_GET['id'];

    $query = "SELECT * FROM highlights WHERE ativo = 1 AND id = ". $idHighlight ."";
    $res = my_query($query);
    $numRegistos = count($res);

    $highlights= $res[0];


    echo'<div class="blogitem blogitem2">
                            <div class="blogitem__thumb ml-30">
                                <iframe width="850px" height="470px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'. $highlights['url'] .'" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>
                            </div>
                            <div class="blogitem__content">
                                <h2 class="blog-title-2">'. $highlights['titulo'] .'</h2>
                                <div class="blogitem__content--meta">
                                    <ul>
                                        <li>Publicado por: <span>Redbull Cliff Diving</span></li>
                                        <li>'. $highlights['data'] .'</li>
                                    </ul>
                                </div>
                                <p>'. $highlights['descricao'] .'</p>
                            </div>
                        </div>';
}

function Equipa(){
    $query = "SELECT * FROM equipa WHERE ativo = 1 ORDER BY ordem";
    $res = my_query($query);

        foreach($res as $k => $equipa){

        echo '<div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="team_members text-center mb-50">
                        <div class="team_members__thumb ml-75 mb-30">
                            <img src="upload/equipa/'. $equipa['fotografia'] .'" alt="">
                        </div>
                        <div class="team_members__content pt-30">
                            <h4 class="sub-title">'. $equipa['nome'] .'</h4>
                            <span>'. $equipa['cargo'] .'</span>
                        </div>
                    </div>
                </div>';
        }
}

function Parcerias(){

    $query = "SELECT * FROM parcerias WHERE ativo = 1";
    $res = my_query($query);

    $numRegistos = count($res);
    for($i=0; $i<=5; $i++){
        foreach($res as $k => $parcerias){
            echo '  <div class="swiper-slide">
                        <div class="brand-item">
                        <a href="https://'. $parcerias['link'] .'"><img src="upload/parcerias/'. $parcerias['imagem'] .'" alt="'. $parcerias['nome'] .'"></a>
                        </div>
                    </div>';
        }
    }
}

function Meetings(){

    $qMeetings = "SELECT * FROM meetings WHERE ativo = 1";
    $rMeetings = my_query($qMeetings);
    $numRegistos = count($rMeetings);

    $count=0;
    for($v=0; $v<3; $v++){
    echo '<div class="col-xl-4 col-lg-6 col-md-6">
            <div class="bigpost-wrapper">';
            
        for($i=$count; $i<$numRegistos; $i=$i+3){
            $flag = 0;
            $qUM = "SELECT * FROM usersmeetings WHERE idMeeting = ".$rMeetings[$i]['id'];
            $rUM = my_query($qUM);
            foreach($rUM as $k => $UM)
            if($UM['idUser']== $_SESSION['uid']){
                $flag= 1;
            }
                echo'<div id="meeting" class="min-altura grid_blog mb-40 text-center">
                        <div class=" grey-bg padding-20">
                            <div class="meetings_thumb">
                            <img class="meetings_image" src="upload/mapa/'. $rMeetings[$i]['imagem'] .'" alt="">
                            </div>
                            <div class="grid_blog__content ">
                                <h4 class="pt-20 ">'. $rMeetings[$i]['local'] .'</h4>
                                <h2 class="b-title mb-20"><a href="meetings.php#meetings">'. $rMeetings[$i]['titulo'] .'</a></h2>
                                <p>'. $rMeetings[$i]['descricao'] .'</p>
                                <div class="post-meta pt-10 ">
                                    <p>Data: <span> '. $rMeetings[$i]['data'] .' </span></p>
                                    <p>Organizado por: <span> '. $rMeetings[$i]['user'] .' </span></p>
                                    <p> Número de participantes: '. $rMeetings[$i]['num_participantes'] .' </p>
                                </div>
                            </div>
                            <div>';
                                if($flag == 0){
                                    echo'<form action="include/trataJoinMeeting.php" method="POST"> 
                                            <input class="buttonmeetings" type="submit" value="Participar">
                                            <input type="hidden" name="id" value="'.$rMeetings[$i]['id'].'"> 
                                        </form>';
                                }else{
                                    echo'<form action="include/trataDelMeeting.php" method="POST"> 
                                            <input class="buttonmeetings red-bg" type="submit" value="Cancelar">
                                            <input type="hidden" name="id" value="'.$rMeetings[$i]['id'].'">  
                                        </form>';
                                }
                      echo' </div>
                        </div>
                    </div>';
        }
        $count++;
        echo 
            '</div>
        </div>';
    }
}

?>