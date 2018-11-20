<?php return array(
    'article' =>
        array(
            'title' => '文章管理',
            'icon' => 'fa fa-navicon',
            'permission' => '权限标识',
            'menus' =>
                array(
                    array(
                        'title' => '栏目管理',
                        'permission' => '权限标识',
                        'url' => '/article/category',
                    ),
                    array(
                        'title' => '文章管理',
                        'permission' => '',
                        'url' => '/article/content',
                    ),
                    array(
                        'title' => '模板管理',
                        'permission' => '',
                        'url' => '/article/template',
                    ),
                ),
        ),
);