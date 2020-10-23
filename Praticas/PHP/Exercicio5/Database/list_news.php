<?php
    include_once('Database/connection.php');


    function get_news_intro() {
        global $db;

        $stmt = $db->prepare('SELECT * FROM news');
        $stmt->execute();
        $articles = $stmt->fetchAll();

        return $articles;
    }

    function get_news_complete_information() {
        global $db;
        
        $stmt = $db->prepare('SELECT news.*, users.*, COUNT(comments.id) AS comments
        FROM news JOIN
             users USING (username) LEFT JOIN
             comments ON comments.news_id = news.id
        GROUP BY news.id, users.username
        ORDER BY published DESC');

        $stmt->execute();
        $articles = $stmt->fetchAll();

        return $articles;
    }

    function get_article() {
        global $db;

        $stmt = $db->prepare('SELECT * FROM news JOIN users USING (username) WHERE id = :id');
        $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        $stmt->execute();
        $article = $stmt->fetch();
    }

?>