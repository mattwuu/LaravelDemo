<?php

namespace Modules\Article\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\View\FileViewFinder;
use Modules\Article\Entities\Category;
use Modules\Article\Entities\Content;
use View;
use App;

class HomeController extends Controller
{
    public function __construct()
    {
        $template = \HDModule::config('article.config.template');
        $paths = [public_path('templates/'.$template)];
        View::setFinder(new FileViewFinder(App::make('files'), $paths));
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
//        return view('article::index');
        return view('index');
    }

    public function lists(Category $category)
    {
        dd($category->toArray());
    }

    public function content(Content $content)
    {
        dd($content->toArray());
    }
}
