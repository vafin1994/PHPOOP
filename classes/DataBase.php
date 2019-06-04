<?php

class DataBase
{
    public $db;

    public function __construct($host, $user, $password, $db)
    {
        $this->db = mysqli_connect($host, $user, $password);
        if (!$this->db) {
            exit ('No connection with database');
        }

        if (!mysqli_select_db($this->db, $db)) {
            exit ('No table');
        }
        return $this->db;
    }

    public function getAllArticles()
    {
        $query = "SELECT * FROM `articles`";
        $res = mysqli_query($this->db, $query);
        if (!$res) {
            return false;
        } else {
            for ($i = 0; $i < mysqli_num_rows($res); $i++) {
              $row[] = mysqli_fetch_array($res, MYSQLI_ASSOC);
            }
        }
        return $row;
    }

    public function getArticle($id)
    {

    }

}
