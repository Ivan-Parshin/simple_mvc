<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Post
{
    public static function all()
    {
        $stmt = Database::connect()->query("SELECT * FROM posts ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $stmt = Database::connect()->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data)
    {
        $stmt = Database::connect()->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
        return $stmt->execute([$data['title'], $data['content']]);
    }

    public static function update($id, $data)
    {
        $stmt = Database::connect()->prepare("UPDATE posts SET title = ?, content = ? WHERE id = ?");
        return $stmt->execute([$data['title'], $data['content'], $id]);
    }

    public static function delete($id)
    {
        $stmt = Database::connect()->prepare("DELETE FROM posts WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
