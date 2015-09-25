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

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ asset('images/home/banner.png') }}" alt="...">
                <div class="carousel-caption">
                    <h1>Shop</h1>
                    <h2>Colección Lusso</h2>
                    <a class="btn btn-enter-collection" href="{{ route('catalog.lusso') }}" role="button">INGRESAR</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('images/home/banner.png') }}" alt="...">
                <div class="carousel-caption">
                    <h1>Shop</h1>
                    <h2>Colección Fiori e Colori</h2>
                    <a class="btn btn-enter-collection" href="{{ route('catalog.fiori') }}" role="button">INGRESAR</a>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

@stop