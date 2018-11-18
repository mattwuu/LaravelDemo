<?php

namespace Modules\Article\Entities;

use houdunwang\arr\Arr;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'pid'];

    public function getAll($category = null)
    {
        $data = $this->get()->toArray();
        if (!is_null($category)) {
            foreach ($data as $k => $d) {
                $data[$k]['_selected'] = $category['pid'] == $d['id'];
                $data[$k]['_disabled'] = $category['id'] == $d['id'] || Arr::isChild($data, $d['id'], $category['id'], 'id');
            }
        }
        $data = Arr::tree($data, 'name', 'id');
        return $data;
    }

    public function hasChildCategory()
    {
        $data = $this->get()->toArray();
        return Arr::hasChild($data, $this->id);
    }
}
