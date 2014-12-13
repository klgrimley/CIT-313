<?php

class Comment extends Model {

public function addComment($data) {

        $sql = 'INSERT INTO comments (uID, commentText, date, postID) VALUES (?,?,?,?)';
        $this->db->execute($sql, $data);
        $message = 'Comment added.';
        return $message;
    }
    
    public function deleteComment($commentID) {
        $sql = 'DELETE FROM comments WHERE commentID ='.$commentID;
        $this->db->execute($sql, $commentID);
    }
    
    
}
?>
