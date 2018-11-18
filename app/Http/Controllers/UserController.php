<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends Controller
{
    //
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!is_numeric($request->input('id'))) {
                throw new NotFoundHttpException();
            }
            return $next($request);
        })->except('show');
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
