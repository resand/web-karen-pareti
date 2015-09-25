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

    <div class="contet-main">
        <div class="row">
            <div class="jumbotron intro content">
                    <p class="title-content">Mujer</p>
                    <p class="subtitle-content">Colección Fiori e Colori</p>
            </div>
        </div>

        <div class="container-fluid">

            @foreach($dresses as $dress)
                <div class="col-md-3 portfolio-item">

                        <a href="{{ route('details.item', $dress->id) }}" {{--class="imagen-zoom"--}}>
                            <img class="img-responsive" src="{{ asset('images/collection/'.$dress->url.'/front.jpeg') }}" alt="">
                             {{--<span>
                                <img src="{{ asset('images/collection/'.$dress->url.'/front.jpeg') }}" />
                            </span>--}}
                        </a>
                        <h3>
                            {{ $dress->name }}
                        </h3>
                        <div class="btn-view-catalog">
                            <a href="{{ route('details.item', $dress->id) }}">
                                <button type="button" class="btn"><i class="material-icons">search</i>
                                Detalles</button>
                            </a>
                        </div>
                </div>
            @endforeach
        </div>
    </div>

@stop