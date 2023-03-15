@extends('layout.main')



@section('container')


<div class="row">
    <div class="col">
        <header>
            <app-bar></app-bar>
        </header>
        <main>
            <section>
                <h2>check your location weather with one word !</h2>
                <input type="text" class="input" size="100"> <br>

                <button type="button" class="button" id="btn" role="button">check</button>
            </section>


            <div class="result">

            </div>
        </main>
    </div>
</div>

@endsection