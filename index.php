<?php
include 'config.php';
include "classes/Page.php";
include "classes/DataBase.php";

$page = new Page();
if(isset($_GET['id'])){

}else {
    $text = $page->getAllArticles();
    echo $page->getBody($text, 'main');
}
