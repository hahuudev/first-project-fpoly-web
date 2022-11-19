<?php

class CommentModel extends Model
{
    public function getFullComments($id)
    {
        $sql = "SELECT prd.id, prd.name, cmt.created_at, cmt.updated_at, COUNT(productId) as sl  FROM comments cmt  
        JOIN users ON cmt.userId = users.id JOIN products prd ON cmt.productId = prd.id GROUP BY productId";
        if ($id != '') {
            $sql = "SELECT cmt.id, prd.name, users.username, cmt.content, cmt.created_at, cmt.updated_at FROM comments cmt  
                JOIN users ON cmt.userId = users.id JOIN products prd ON cmt.productId = prd.id WHERE cmt.productId = $id";
        }

        return $this->query($sql, 'FETCHAll');
    }

    public function getCommentsByPrdId($id)
    {
        $sql = "SELECT cmt.created_at, cmt.content, users.username  FROM comments cmt  
        JOIN users ON cmt.userId = users.id JOIN products prd ON cmt.productId = prd.id WHERE cmt.productId = $id
        ORDER BY  cmt.created_at DESC
        ";

        return $this->query($sql, 'FETCHAll');
    }

    public function addComment($userId, $productId, $content)
    {
        $sql = "INSERT INTO comments (userId, productId, content) VALUE ($userId, $productId, '$content')";
        return $this->query($sql);
    }

    public function deleteCmt($id)
    {
        $sql = "DELETE FROM comments WHERE id = $id";
        return $this->query($sql);
    }
}
