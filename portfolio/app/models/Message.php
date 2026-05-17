<?php
// app/models/Message.php

class Message
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function store(string $name, string $email, string $message): bool
    {
        $stmt = $this->db->prepare(
            'INSERT INTO messages (name, email, message, created_at)
             VALUES (?, ?, ?, NOW())'
        );

        return $stmt->execute([$name, $email, $message]);
    }

    public function all(): array
    {
        $stmt = $this->db->query('SELECT * FROM messages ORDER BY created_at DESC');
        return $stmt->fetchAll();
    }
}
