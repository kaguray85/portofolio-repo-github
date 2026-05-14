<?php
// app/models/Project.php

class Project
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function all(): array
    {
        $stmt = $this->db->query('SELECT * FROM projects ORDER BY sort_order ASC, id DESC');
        return $stmt->fetchAll();
    }

    public function find(int $id): array|false
    {
        $stmt = $this->db->prepare('SELECT * FROM projects WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function featured(): array
    {
        $stmt = $this->db->query('SELECT * FROM projects WHERE is_featured = 1 ORDER BY sort_order ASC LIMIT 6');
        return $stmt->fetchAll();
    }
}
