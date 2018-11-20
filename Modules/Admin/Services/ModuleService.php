<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/21
 * Time: 0:43
 */

namespace Modules\Admin\Services;

use HDModule;
use Modules\Admin\Http\Controllers\HomeController;
use Modules\Admin\Entities\Module;

class ModuleService
{
    public function updateCache(): bool
    {
        $modules = HDModule::getModulesLists();
        foreach ($modules as $module) {
            $data = [
                'title' => $module['title'],
                'name' => $module['name'],
                'is_default' => 0,
                'front_access' => $this->frontAccess($module)
            ];
            Module::create($data);
        }
        return true;
    }

    protected function frontAccess($module)
    {
        $class = 'Modules\\' . $module['name'] . '\Http\Controllers\HomeController';
        return class_exists($class) && method_exists($class, 'index');
    }
}