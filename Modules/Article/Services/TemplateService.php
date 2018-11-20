<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/21
 * Time: 2:18
 */

namespace Modules\Article\Services;


class TemplateService
{
    public function all()
    {
        $dirs = glob(public_path('templates/*'));
//        dd($dirs);
        $configs = [];
        foreach ($dirs as $dir) {
            if($config = $this->parseConfig($dir)){
                $configs[] = $config;
            }
        }
        return $configs;
    }

    protected function parseConfig($dir)
    {
        $file = $dir . '/package.json';
        if (is_file($file)) {
            $jsonContent = file_get_contents($file);
            $config = json_decode(trim($jsonContent));
//            var_dump($config);
            if(is_object($config)){
                $config = (array)$config;
                $name = basename($dir);
                $config['preview'] = url('templates/'.$name.'/'.$config['preview']);
                $config['name'] = $name;
                return $config;
            }
        }
    }
}