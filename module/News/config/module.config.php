<?php
    return array(
        'controllers' => array(
            'invokables' => array(
                'News\Controller\News' => 'News\Controller\NewsController',
            ),
        ),
        'view_manager' => array(
            'template_path_stack' => array(
                'news' => __DIR__ . '/../view',
            ),
        ),
    );
?>