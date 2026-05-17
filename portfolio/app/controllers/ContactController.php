<?php
// app/controllers/ContactController.php

require_once CORE_PATH . '/Controller.php';
require_once APP_PATH  . '/models/Message.php';

class ContactController extends Controller
{
    public function index(): void
    {
        $this->view('contact', [
            'title' => 'Contact — Khaliz Hakam',
        ]);
    }

    public function send(): void
    {
        // Accept only POST
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->json(['success' => false, 'message' => 'Method not allowed.'], 405);
        }

        // ── Retrieve & Sanitize ───────────────────
        $name    = trim((string) filter_input(INPUT_POST, 'name', FILTER_UNSAFE_RAW));
        $email   = trim((string) filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        $message = trim((string) filter_input(INPUT_POST, 'message', FILTER_UNSAFE_RAW));

        // ── Validate ──────────────────────────────
        $errors = [];

        if (strlen($name) < 2)                   $errors[] = 'Name must be at least 2 characters.';
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Invalid email address.';
        if (strlen($message) < 10)               $errors[] = 'Message must be at least 10 characters.';
        if (strlen($message) > 2000)             $errors[] = 'Message is too long (max 2000 chars).';

        if (!empty($errors)) {
            $this->json(['success' => false, 'errors' => $errors], 422);
        }

        // ── Persist ───────────────────────────────
        try {
            $model   = new Message();
            $saved   = $model->store($name, $email, $message);

            if ($saved) {
                $this->json(['success' => true, 'message' => 'Message sent successfully!']);
            } else {
                $this->json(['success' => false, 'message' => 'Failed to save message.'], 500);
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
            $this->json(['success' => false, 'message' => 'Server error. Please try again later.'], 500);
        }
    }
}
