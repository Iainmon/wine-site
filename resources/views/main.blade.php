@extends('layouts.app')

@section('content')
    <div class="row flex-center">
        <div>
            <img class="icon" src="{{ asset('img/grape-icon.svg') }}" alt="">
            <h1 class="title main-title">Wine</h1>
        </div>
    </div>
    <hr style="width: 25%;">
    <div class="row flex-center">
        <div class="col">
            <h4 class="title sub-title">Installation</h4>
            <p>To install wine, just enter the following command.</p>
            <code>
                $ curl -O "https://grape-juice.org/cdn/wine/main/wine
            </code>
        </div>
    </div>
    <div class="row flex-center">
        <div class="col">
            <h4 class="title sub-title">Usage</h4>
            <p>You should add the following alias to your shell profile. This is optional, but it's preferred.</p>
            <code>
                alias wine="node wine"
            </code>
            <p></p>
            <p>
                Once you have installed wine, you may run: <code>$ wine</code>
            </p>
            <p>
                This will make sure that you have the required files. Once this is done you are all set!
            </p>

        </div>
    </div>
    <br>
    <div class="row flex-center">
        <div class="col">
            <p>Note:</p>
            It is optional to remove you're wine file from git, but it is not recommended for convenience.
        </div>
    </div>
@endsection