<?php

namespace Iplague\Project\Controllers;

use Iplague\Project\Viewer;

class AboutController
{
    public function index(): void
    {
        $page = 'about';
        $title = 'About Page';
        $content = 'Hey, you are on about page!';
        $info = 'INFO INFO INFO INFO INFO INFO INFO INFO';

        $view = new Viewer(
            [
                'page' => $page,
                'title' => $title,
                'content' => $content,
                'info' => $info
            ]
        );

        $view->render();
    }
}
