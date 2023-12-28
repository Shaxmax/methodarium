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
    <div class="container">
        <h1>Benutzerübersicht</h1>
        <p>NEVEREST Methodarium</p>  
    </div>
    <!-- End Page Heading -->
    
    <div class="container">
        
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Methodenanzahl</th>
            </tr>
        </thead>
        <tbody>

            @unless(count($users) == 0)

            @foreach ($users as $user)

                <tr>
                <th scope="row">{{ $loop->iteration }}</th> <!-- Standard Laravel Loop-Variable -->
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->methods_count}}</td>
                </tr>

            @endforeach

            @endunless
            
        </tbody>
        </table>
    
    </div>


</section>

@endsection