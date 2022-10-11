@extends('common/mdb-fullpage')

@section('content')
<div class="container mt-5">

    <div class="row">
        <div class="col-6 mx-auto">
            <h3 class="text-center">Guarulhos, {{$dia. '/' .$mes. '/' .$ano}} </h3>
        </div>
    </div>

    <div class="row">   
        <div class="col-md-5 mx-auto"> 
            <form class="text-center border border-light p-5" action="#!">

                <p class="h4 mb-4">Entrar</p>

                <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

                <div class="d-flex justify-content-around">
                    <div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember">Lembrar-me</label>
                        </div>
                    </div>
                    <div>
                        <a href="">Esqueceu a senha?</a>
                    </div>
                </div>

                <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

                <p>Não é um membro?
                    <a href="">Cadastre-se</a>
                </p>

                <p>ou entrar com:</p>

                <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

            </form>
        </div>
    </div>
</div>
@endsection