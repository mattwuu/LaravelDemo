@extends('admin::layouts.master')
@section('content')
    @component('components.tabs', ['title'=>'角色管理'])
        @slot('nav')
            <li class="nav-item"><a href="#home" class="nav-link active" pjax>角色列表</a></li>
            <li class="nav-item"><a href="#profile" data-toggle="modal" data-target="#addRole" class="nav-link">添加角色</a>
            </li>
            @component('components.modal', ['id' =>'addRole', 'url' => '/admin/role', 'title' => '添加角色'])
                <div class="form-group">
                    <label>角色名称</label>
                    <input type="text" placeholder="请输入中文角色名称" name="title" value="{{old('title')}}"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label>角色标识</label>
                    <input type="text" placeholder="标识必须为英文字母" name="name" value="{{old('name')}}" class="form-control">
                </div>
            @endcomponent
        @endslot
        @slot('body')
            <table class="table">
                <thead>
                <tr>
                    <th style="width:10%;">编号</th>
                    <th style="width:20%;">角色名称</th>
                    <th class="">角色标识</th>
                    <th class="number">创建时间</th>
                    <th class="number"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{$role['id']}}</td>
                        <td>{{$role['title']}}</td>
                        <td class="">{{$role['name']}}</td>
                        <td class="number">{{$role['created_at']}}</td>
                        <td class="number">
                            <div class="btn-group btn-space">
                                <button type="button" data-toggle="modal" data-target="#editRole{{$role['id']}}"
                                        class="btn btn-secondary">编辑
                                </button>
                                <button type="button" class="btn btn-secondary" onclick="delRole({{$role['id']}},this)">删除</button>
                                <form action="/admin/role/{{$role['id']}}" hidden method="post">
                                    @csrf @method('DELETE')
                                </form>
                                <a href="/admin/role/permission/{{$role['id']}}" class="btn btn-secondary" pjax>权限</a>
                            </div>
                            @component('components.modal', ['id' =>"editRole{$role['id']}", 'method' => 'PUT', 'url' => "/admin/role/{$role['id']}", 'title' => "编辑{$role['title']}"])
                                <div class="form-group text-left">
                                    <label>角色名称</label>
                                    <input type="text" placeholder="请输入中文角色名称" name="title" value="{{$role['title']}}"
                                           class="form-control">
                                </div>
                                <div class="form-group text-left">
                                    <label>角色标识</label>
                                    <input type="text" placeholder="标识必须为英文字母" name="name" value="{{$role['name']}}"
                                           class="form-control">
                                </div>
                            @endcomponent
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endslot
    @endcomponent
@endsection
@section('scripts')
    <script>
        function delRole(id, bt) {
            if(confirm("确定删除角色吗？")) {
                $(bt).next('form').trigger('submit');
            }
        }
    </script>
@endsection