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
                        Benutzer
                    </li>
                </ol>
            </small>
        </nav>
    </div>

    <!-- Page Heading -->
    <div class="container" id="headings">
        <h1>Quellenübersicht</h1>
        <p>NEVEREST Methodarium</p>  
    </div>
    <!-- End Page Heading -->
    
    <div class="container">
        
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Verfasser</th>
            <th scope="col">Quelle</th>
            <th scope="col">Link</th>
            <th scope="col">Methodenanzahl</th>
            </tr>
        </thead>
        <tbody>

            @unless(count($sources) == 0)

            @foreach ($sources as $source)

                <tr>
                <th scope="row">{{ $loop->iteration }}</th> <!-- Standard Laravel Loop-Variable -->
                <td>{{ $source->originator }}</td>
                <td>{{ $source->source }}</td>
                <td>
                    @unless($source->source == NULL )
                        <i class="material-icons">link</i>
                    @endunless
                </td>
                <td>{{ $source->methods_count}}</td>
                </tr>

            @endforeach

            @endunless
            
        </tbody>
        </table>
    
    </div>


</section>

@endsection