@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Entrar</h3>
            <div class="row">
                <form class="" method="POST" enctype="multipart/form-data" action="{{route('site.login.entrar')}}">
                        @csrf
                            <div class="container">
                                <div class="input-field">
                                    <input type="text" name="email" >
                                    <label >E-Mail</label>
                                </div>
                                <div class="input-field">
                                    <input type="password" name="senha" >
                                    <label >Senha</label>
                            </div>
                        <button class="btn deep-orange">Entrar</button>
                </form>
            </div>
    </div>
@endsection
