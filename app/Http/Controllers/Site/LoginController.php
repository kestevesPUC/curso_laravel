<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function entrar(request $req)
    {
        $dados = $req->all();
        if(Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['senha']]))
        {
            dd('aqui');
            return redirect()->route('admin.cursos');
        }
        dd('ali');

        return redirect()->route('login.index');
    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
