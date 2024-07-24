@extends('layout')

@section('title')Home Page
@endsection

@section('main_content')

    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <main role="main">

        <div class="jumbotron bg-warning">
            <div class="container">
                <h1 class="display-3">Home page</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aliquid atque beatae dolorem ducimus fuga, saepe totam ullam voluptatibus?</p>
                <p><a class="btn btn-danger btn-lg" href="/review" role="button">Review </a></p>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto delectus id in obcaecati optio praesentium quas quis reiciendis unde.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci eius laudantium magni odio quaerat quod rem tempora. Aperiam, deserunt maxime.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolorem dolorum explicabo incidunt inventore quae ratione recusandae repellat rerum sequi!</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details</a></p>
                </div>
            </div>

            <hr>

        </div>

    </main>
@endsection
