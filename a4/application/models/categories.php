<?php

class Categories extends Model {

    function getCategories() {

        $sql = 'SELECT * FROM categories';

        // perform query
        $results = $this->db->execute($sql);

        while ($row = $results->fetchrow()) {
            $categories[] = $row;
        }

        return $categories;
    }

}

?>
