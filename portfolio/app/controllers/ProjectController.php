<?php
// app/controllers/ProjectController.php

require_once CORE_PATH . '/Controller.php';
require_once APP_PATH  . '/models/Project.php';

class ProjectController extends Controller
{
    public function index(): void
    {
        $model    = new Project();
        $projects = $model->all();

        $this->view('projects', [
            'title'    => 'Projects — Khaliz Hakam',
            'projects' => $projects,
        ]);
    }
}
