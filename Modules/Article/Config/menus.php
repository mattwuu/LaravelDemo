<?php return array(
    'article' =>
        array(
            'title' => '文章管理',
            'icon' => 'fa fa-navicon',
            'permission' => '权限标识',
            'menus' =>
                array(
                    0 =>
                        array(
                            'title' => '栏目管理',
                            'permission' => '权限标识',
                            'url' => '/article/category',
                        ),
                    1 =>
                        array(
                            'title' => '文章管理',
                            'permission' => '',
                            'url' => '/article/content',
                        ),
                ),
        ),
);