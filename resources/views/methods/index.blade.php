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
                        Methoden
                    </li>
                </ol>
            </small>
        </nav>
    </div>

    <!-- Page Heading -->
        <div class="container">
            <h1>Methodenübersicht</h1>
            <p>NEVEREST Methodarium</p>
            
            <div class="methods-filter">
                <form method="GET" action="{{ route('methods.index') }}">
                    <div class="input-group mb-3">
                        <input type="text" name="title" placeholder="Methode suchen ..." value="{{ request('title') }}" class="form-control" />
                        <div class="input-group">
                            <button type="submit" class="btn btn-outline-secondary">Suchen</button>
                            <a href="{{ route('methods.index') }}" class="btn btn-outline-secondary">Filter Zurücksetzen</a>
                        </div>
                    </div>
                </form>    
            </div>        
        </div>
    <!-- End Page Heading -->

    <div class="container">

        <div class="method-card--wrapper">

            @unless(count($methods) == 0)
           
            @foreach ($methods as $method)
            
                <div class="method-card" style="border-color:{{ $method->color_code }};">
                    <a class="method-card--link" href="{{ route('methods.show', $method) }}" >
                        <div class="method-card--category-background" style="background-color:{{ $method->color_code }}; color:{{ $method->font_color }};">
                            <h3 class="method-card--title">{{ $method->title }}</h3>
                        </div>
                        <div class="method-card--body">
                            <div class="method-card--category" style="color: {{ $method->color_code }}">{{ $method->category }}</div>
                            <div class="method-card--author">
                                <img src="https://placekitten.com/32/32">
                                <div class="method-card--author-name">Sabrina Meidl</div>
                            </div>
                        </div>
                    </a>
                </div>
                
            @endforeach

            @else
            <p>Keine Methoden gefunden.</p>

            @endunless

        </div>

    </div>

</section>

@endsection