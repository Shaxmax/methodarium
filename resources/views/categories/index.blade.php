@extends('layouts.app')

@section('content')

<section>

    <div class="container">
        <nav aria-label="breadcrumb" class="mb-5">
            <small>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Kategorien
                    </li>
                </ol>
            </small>
        </nav>
    </div>

    <!-- Page Heading -->
    <div class="container">
        <h1>Kategorieübersicht | <? echo count($categories) ?></h1>
        <p>NEVEREST Methodarium</p>  
    </div>
    <!-- End Page Heading -->
    
    <div class="container">
        
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Kategoriebezeichnung</th>
            <th scope="col">Kurzname</th>
            <th scope="col">Methodenanzahl</th>
            <th scope="col">Farbe</th>

            </tr>
        </thead>
        <tbody>

            @unless(count($categories) == 0)

            @foreach ($categories as $category)

                <tr>
                <th scope="row">{{ $loop->iteration }}</th> <!-- Standard Laravel Loop-Variable -->
                <td>Methoden {{ $category->prefix }} {{ $category->category }}</td>
                <td>{{ $category->category }}</td>
                <td>{{ $category->methods_count}}</td>
                <td style="background:{{ $category->color_code }}; color:{{ $category->font_color }};">{{ $category->color_code }}</td>

                </tr>

            @endforeach

            @endunless
            
        </tbody>
        </table>
    
    </div>


</section>

@endsection