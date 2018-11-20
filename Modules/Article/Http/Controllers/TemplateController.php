<?php

namespace Modules\Article\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Article\Services\TemplateService;

class TemplateController extends Controller
{
    public function index(TemplateService $templateService)
    {
        $templates = $templateService->all();
        return view('article::index', compact('templates'));
    }

}
