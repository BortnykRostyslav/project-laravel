@extends('layout')
@section('title')Project Laravel
@endsection

@section('main_content')
    <main role="main">

        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="container">
                <h1 class="mt-5">Home page</h1>
                <p class="lead my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aliquid atque beatae dolorem ducimus fuga, saepe totam ullam voluptatibus?</p>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <h2 class="mt-5">Review</h2>
                    <p class="lead my-3">You can leave a review or read reviews from other users.</p>
                    <p><a class="btn btn-primary"  href="/review" role="button">View details</a></p>
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5">About</h2>
                    <p class="lead my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci eius laudantium magni odio quaerat quod rem tempora. Aperiam, deserunt maxime.</p>
                    <p><a class="btn btn-primary" href="/about" role="button">View details</a></p>
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5">Heading</h2>
                    <p class="lead my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolorem dolorum explicabo incidunt inventore quae ratione recusandae repellat rerum sequi!</p>
                    <p><a class="btn btn-primary" href="#" role="button">View details</a></p>
                </div>
            </div>

            <hr>

        </div>

    </main>
@endsection
