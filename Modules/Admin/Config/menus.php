<?php return array (
  'Admin' => 
  array (
    'title' => '系统管理',
    'icon' => 'fa fa-cog',
    'permission' => 
    array (
      0 => 'Modules\\Admin\\Http\\Controllers\\RoleController@index',
    ),
    'menus' => 
    array (
      array (
        'title' => '角色管理',
        'permission' => 'Modules\\Admin\\Http\\Controllers\\RoleController@index',
        'url' => '/admin/role',
      ),
      array (
        'title' => '模块管理',
        'permission' => 'Modules\\Admin\\Http\\Controllers\\RoleController@index',
        'url' => '/admin/role',
      ),
      array (
        'title' => '网站管理',
        'permission' => 'Modules\\Admin\\Http\\Controllers\\RoleController@index',
        'url' => '/admin/role',
      ),
      array (
        'title' => '邮件设置',
        'permission' => 'Modules\\Admin\\Http\\Controllers\\RoleController@index',
        'url' => '/admin/role',
      ),
    ),
  ),
  array (
    'title' => '微信管理',
    'icon' => 'fa fa-file-pdf-o',
    'permission' => 
    array (
      0 => 'Modules\\Admin\\Http\\Controllers\\RoleController@index',
    ),
    'menus' => 
    array (
      array (
        'title' => '微信配置',
        'permission' => '权限标识',
        'url' => '链接地址',
      ),
    ),
  ),
  'admin' => 
  array (
    'title' => '模块管理',
    'icon' => 'fa fa-navicon',
    'permission' => '权限标识',
    'menus' => 
    array (
      array (
        'title' => '模块管理',
        'permission' => '',
        'url' => '/admin/module',
      ),
    ),
  ),
);