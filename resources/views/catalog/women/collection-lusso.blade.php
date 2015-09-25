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
                    <p class="subtitle-content">Colección Lusso</p>
            </div>
        </div>

        <div class="container-fluid">

            @if (Session::has('ok-shop'))

                <div class="col-sm-8 col-md-offset-2">
                    <div class="bs-example bs-example-standalone" data-example-id="dismissible-alert-js" data-dismiss="alert">
                        <div class="alert center alert-success alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{ Session::get('ok-shop') }}
                        </div>
                    </div>
                </div>
            @endif

            @foreach($dresses as $dress)
                <div class="col-md-3 portfolio-item">
                        <a href="{{ route('details.item', $dress->id) }}" {{--class="imagen-zoom"--}}>
                            <img class="img-responsive height" src="{{ asset('images/collection/'.$dress->url.'/front.jpg') }}" alt="">
                            {{-- <span>
                                <img src="{{ asset('images/collection/'.$dress->url.'/front.jpg') }}" />
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