@extends('layouts.master')

@section('logo')
    <div class="bar-logo">
        @include('partials.logo', ['urlLogo'  => 'images/logo-black.png'])
    </div>
@stop

@section('menu')
    @include('layouts.menu', ['activeShop'  => 'actives'])
@stop

@section('content')

    <?php
        $images = explode(',', $dress->image);
    ?>

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

    <div class="content-details container-fluid">

        @if (isset($images[1]))
            <div class="col-md-1 img-thumbnail-details">
                <img clas="img-thumbnail img-responsive" onMouseOver="ChangeImage('{{ asset('images/collection/'.$dress->url.'/'.$images[0].'') }}')" src="{{ asset('images/collection/'.$dress->url.'/'.$images[0].'') }}" alt="">
                <img clas="img-thumbnail img-responsive" onMouseOver="ChangeImage('{{ asset('images/collection/'.$dress->url.'/'.$images[1].'') }}')" src="{{ asset('images/collection/'.$dress->url.'/'.$images[1].'') }}" alt="">
            </div>
            <div class="col-md-3 img-preview">
                <img class="img-preview img-responsive" id="img-preview" src="{{ asset('images/collection/'.$dress->url.'/'.$images[0].'') }}" alt="">
            </div>

            <div class="col-md-8 contet-info">
                <h3>{{ $dress->name }}</h3>

                <h4>{{ $dress->description }}</h4>

                <div class="btn-order-item">
                    <a href="#" onclick="Order('{{ $dress->name }}')">
                        <button type="button" class="btn"><i class="material-icons">shopping_cart</i>
                            Ordenar</button>
                    </a>
                </div>
            </div>
        @else
            <div class="col-md-1 img-thumbnail-details">
                <img clas="img-thumbnail img-responsive" onMouseOver="ChangeImage('{{ asset('images/collection/'.$dress->url.'/'.$images[0].'') }}')" src="{{ asset('images/collection/'.$dress->url.'/'.$images[0].'') }}" alt="">
            </div>
            <div class="col-md-3 img-preview">
                <img class="img-preview -responsive" id="img-preview" src="{{ asset('images/collection/'.$dress->url.'/'.$images[0].'') }}" alt="">
            </div>

            <div class="col-md-8 contet-info">
                <h3>{{ $dress->name }}</h3>

                <h4>{{ $dress->description }}</h4>

                <div class="btn-order-item">
                    <a href="#" onclick="Order('{{ $dress->name }}')">
                        <button type="button" class="btn"><i class="material-icons">shopping_cart</i>
                            Ordenar</button>
                    </a>
                </div>
            </div>
        @endif

    </div>
    <br><br>

    {{--<div class="footer-details">
        <p>Comparte en </p>
    </div>--}}



@stop