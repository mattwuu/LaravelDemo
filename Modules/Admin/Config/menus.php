<?php
/** .-------------------------------------------------------------------
 * |      Site: www.hdcms.com  www.houdunren.com
 * |      Date: 2018/7/2 上午12:54
 * |    Author: 向军大叔 <2300071698@qq.com>
 * '-------------------------------------------------------------------*/
/**
 * 后台菜单配置
 * 下面是属性说明：
 * title 菜单栏目
 * icon 图标参考 http://fontawesome.dashgame.com/
 * menus 子菜单
 * permission 权限标识，必须在permission.php配置文件中存在
 */
return [
    'Admin'=>[
        "title"      => "系统管理",
        "icon"       => "fa fa-cog",
        'permission' => ['Modules\Admin\Http\Controllers\RoleController@index'],
        "menus"      => [
            ["title" => "角色管理", "permission" => "Modules\Admin\Http\Controllers\RoleController@index", "url" => "/admin/role"],
            ["title" => "模块管理", "permission" => "Modules\Admin\Http\Controllers\RoleController@index", "url" => "/admin/role"],
            ["title" => "网站管理", "permission" => "Modules\Admin\Http\Controllers\RoleController@index", "url" => "/admin/role"],
            ["title" => "邮件设置", "permission" => "Modules\Admin\Http\Controllers\RoleController@index", "url" => "/admin/role"],
        ],
    ],
    [
        "title"      => "微信管理",
        "icon"       => "fa fa-file-pdf-o",
        'permission' => ['Modules\Admin\Http\Controllers\RoleController@index'],
        "menus"      => [
            ["title" => "微信配置", "permission" => "权限标识", "url" => "链接地址"],
        ],
    ],
];
