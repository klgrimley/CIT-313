<?php

class Post extends Model {

    function getPost($pID) {

        $sql = 'SELECT posts.pID, posts.title, posts.content, posts.date, posts.categoryID, posts.uID, users.first_name, users.last_name, categories.name 
                    FROM posts 
                    INNER JOIN users ON users.uID=posts.uID
                    INNER JOIN categories ON categories.categoryID=posts.categoryID
                    WHERE pID = ?';

        // perform query
        $results = $this->db->getrow($sql, array($pID));

        $post = $results;

        return $post;
    }

    public function getAllPosts($limit = 0) {

        if ($limit > 0) {

            $numposts = ' LIMIT ' . $limit;
        }

        $sql = 'SELECT posts.pID, posts.title, posts.content, posts.date, posts.categoryID, posts.uID, users.first_name, users.last_name, categories.name 
                    FROM posts 
                    INNER JOIN users ON posts.uID=users.uID
                    INNER JOIN categories ON posts.categoryID=categories.categoryID' . $numposts;

        // perform query
        $results = $this->db->execute($sql);

        while ($row = $results->fetchrow()) {
            $posts[] = $row;
        }

        return $posts;
    }

    public function addPost($data) {

        $sql = 'INSERT INTO posts (title,content, categoryID, date, uID) VALUES (?,?,?,?,?)';
        $this->db->execute($sql, $data);
        $message = 'Post added.';
        return $message;
    }
    
    public function getComments($pID) {
        $sql = 'SELECT comments.commentID, comments.uID, comments.commentText, comments.date, comments, postID, users.first_name, users.last_name  
                    FROM comments 
                    INNER JOIN users ON users.uID=comments.uID
                    WHERE postID = ?';

        // perform query
        $results = $this->db->getrow($sql, array($pID));

        $comments = $results;

        return $comments;
    }

}