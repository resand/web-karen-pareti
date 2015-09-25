@extends('layouts.master')

@section('menu')
    @include('layouts.menu', ['activeHome'  => 'active'])
@stop

@section('logo')
    <div class="bar-logo">
        @include('partials.logo', ['urlLogo'  => 'images/logo-white.png'])
    </div>
@stop

@section('content')

    <div class="img-banner">
        <img src="{{ asset('images/home/banner.png') }}" class="img-responsive" alt="Banner Home">
    </div>

    <div class="content-register">
        @if (Session::has('ok-shop'))
            <div class="container">
                <div class="col-sm-8 col-md-offset-2">
                    <div class="bs-example bs-example-standalone" data-example-id="dismissible-alert-js" data-dismiss="alert">
                        <div class="alert center alert-success alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{ Session::get('ok-shop') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-4">
                <div class="img-karen-pareti">
                    <img src="{{ asset('images/home/img-karen.png') }}" class="img-responsive" alt="Karen Pareti">
                </div>
            </div>
            <div class="col-md-8">
                <div class="content-suscriber">
                    <h1>Mis Nuevas Colecciones</h1>
                    <h2>a unos cuantos clics.</h2>
                    <p>Regístrate para tips de estilo, moda, noticias y<br>
                    ofertas exclusivas para miembros registrados.</p>
                </div>
                <br><br>
                <div class="form-suscriber">
                    {!! Form::open(['route' => 'contact.email', 'method' => 'POST']) !!}
                    <div class="form-group">
                        <div class="col-sm-6">
                            {!! Form::email('email', null, ['class' => 'input form-control', 'required', 'placeholder' => 'Ingresa tu email']) !!}
                            <div class="btn-submit">
                                <button type="submit" class="btn">Registrarme</button>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    @section('footer')
    <script>
        $('#modalHome').modal("show");
    </script>
    @stop

@stop