<?php

class Page
{
    public $text;

    public function getAllArticles()
    {
        $db = new DataBase(HOST, USER, PASSWORD, DATABASE);
        $result = $db->getAllArticles();
        return $result;
    }

    public function getArticle($id)
    {

    }

    public function getBody($text, $file)
    {
        ob_start();
        include $file.'.php';
        return ob_get_clean();
    }

}
