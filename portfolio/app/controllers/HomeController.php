<?php
// app/controllers/HomeController.php

require_once CORE_PATH . '/Controller.php';
require_once APP_PATH  . '/models/Project.php';

class HomeController extends Controller
{
    public function index(): void
    {
        $projectModel    = new Project();
        $featuredProjects = $projectModel->featured();

        $this->view('home', [
            'title'            => 'Muhammad Khaliz Hakam — Web Developer',
            'featuredProjects'  => $featuredProjects,
        ]);
    }
}
