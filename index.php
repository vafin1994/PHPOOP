<?php
include 'config.php';
include "classes/Page.php";
include "classes/DataBase.php";

$page = new Page();
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
    if($id != 0){
        $text = $page->getArticle($id);
        echo $page->getBody($text, 'view');
    }else{
        exit('Wrong parameter');
    }
}else {
    $text = $page->getAllArticles();
    echo $page->getBody($text, 'main');
}
