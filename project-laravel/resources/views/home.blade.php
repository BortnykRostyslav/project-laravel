@extends('layout')
@section('title')Project Laravel
@endsection

@section('main_content')
    <main role="main">

        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="container">
                <h1 class="display-4 fst-italic">Home page</h1>
                <p class="lead my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aliquid atque beatae dolorem ducimus fuga, saepe totam ullam voluptatibus?</p>
                <p><a class="btn btn-primary" href="/review" role="button">Review </a></p>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <h2 class="display-4 fst-italic">Heading</h2>
                    <p class="lead my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto delectus id in obcaecati optio praesentium quas quis reiciendis unde.</p>
                    <p><a class="btn btn-primary" href="#" role="button">View details</a></p>
                </div>
                <div class="col-md-4">
                    <h2 class="display-4 fst-italic">Heading</h2>
                    <p class="lead my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci eius laudantium magni odio quaerat quod rem tempora. Aperiam, deserunt maxime.</p>
                    <p><a class="btn btn-primary" href="#" role="button">View details</a></p>
                </div>
                <div class="col-md-4">
                    <h2 class="display-4 fst-italic">Heading</h2>
                    <p class="lead my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolorem dolorum explicabo incidunt inventore quae ratione recusandae repellat rerum sequi!</p>
                    <p><a class="btn btn-primary" href="#" role="button">View details</a></p>
                </div>
            </div>

            <hr>

        </div>

    </main>
@endsection
