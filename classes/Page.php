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
        $db = new DataBase(HOST, USER, PASSWORD, DATABASE);
        $result = $db->getArticle($id);
        return $result;
    }

    public function getBody($text, $file)
    {
        ob_start();
        include $file.'.php';
        return ob_get_clean();
    }

}
