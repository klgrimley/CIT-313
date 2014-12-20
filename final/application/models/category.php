<?php

class Category extends Model {

    function getCategories() {

        $sql = 'SELECT * FROM categories';

        // perform query
        $results = $this->db->execute($sql);

        while ($row = $results->fetchrow()) {
            $categories[] = $row;
        }

        return $categories;
    }
    
    function getCategory($categoryID) {
$categoryID = $_GET['categoryID'];
        $sql = 'SELECT posts.pID, posts.title, posts.content, posts.date, posts.categoryID, posts.uID, users.first_name, users.last_name, categories.name 
                    FROM posts 
                    INNER JOIN users ON users.uID=posts.uID
                    INNER JOIN categories ON categories.categoryID=posts.categoryID
                    WHERE categoryID ='.$categoryID;
        var_dump($categoryID);
        echo '<br>';
        var_dump($sql);echo '<br>';
        // perform query
        //$results = $this->db->execute($sql, array($categoryID));
        $results = $this->db->getrow($sql, array($categoryID));
var_dump($results);
        while ($row = $results->fetchrow()) {
            $categories[] = $row;
        }
        return $categories;
    }

}

?>
