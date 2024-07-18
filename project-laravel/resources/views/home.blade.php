@extends('layout')

@section('title')Home page
@endsection

@section('main_content')
    <main role="main">

        <div class="jumbotron bg-warning">
            <div class="container">
                <h1 class="display-3">Home page</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aliquid atque beatae dolorem ducimus fuga, saepe totam ullam voluptatibus?</p>
                <p><a class="btn btn-danger btn-lg" href="#" role="button">Review </a></p>
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
