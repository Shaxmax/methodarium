@extends('layout')

@section('content')

<section>

    <!-- Page Heading -->
        <div class="container">
            <h1>Methodenübersicht</h1>
            <p>NEVEREST Methodarium</p>        
        </div>
    <!-- End Page Heading -->


    <div class="container">

        <div class="d-flex">

            <ul>

            @unless(count($categories) == 0)
            
            @foreach ($categories as $category)

            <li>{{ $category['method_category'] }}</li>

            @endforeach

            @else
            <p>Keine Methoden gefunden.</p>

            @endunless

            </ul>

        </div>

    </div>

</section>

@endsection