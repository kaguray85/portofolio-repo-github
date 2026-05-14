<?php
// app/models/Message.php

class Message
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    /**
     * Store a sanitized message.
     *
     * @param string $name
     * @param string $email
     * @param string $message
     * @return bool
     */
    public function store(string $name, string $email, string $message): bool
    {
        $stmt = $this->db->prepare(
            'INSERT INTO messages (name, email, message, created_at)
             VALUES (?, ?, ?, NOW())'
        );

        return $stmt->execute([
            htmlspecialchars($name,    ENT_QUOTES, 'UTF-8'),
            htmlspecialchars($email,   ENT_QUOTES, 'UTF-8'),
            htmlspecialchars($message, ENT_QUOTES, 'UTF-8'),
        ]);
    }

    public function all(): array
    {
        $stmt = $this->db->query('SELECT * FROM messages ORDER BY created_at DESC');
        return $stmt->fetchAll();
    }
}
