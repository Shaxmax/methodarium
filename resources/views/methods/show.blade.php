@extends('layouts.app')

@section('content')

<script type="text/javascript">
    var php_var = @json($method->category->color_code);
    var root = document.querySelector(':root');
    var rootStyles = getComputedStyle(root);
    var categoryColor = rootStyles.getPropertyValue('--category-color');
    console.log('categoryColor: ', php_var);
    root.style.setProperty('--category-color', php_var);
</script>


<section>

<div class="container">
    <nav aria-label="breadcrumb" class="mb-5">
        <small>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('methods.index')}}">Methoden</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $method->title }}
                </li>
            </ol>
        </small>
    </nav>
</div>

<div class="container">
    <div class="method-single--heading">
        <h1>{{ $method->title }}</h1>
        Ziel: <span>{{ $method->goal }}</span> {{ $method->color_code }}
    </div>
</div>

<br><br>

<div class="container">
    <div class="method-single--wrapper">
        <div class="method-single--metainfos">
            <div class="method-single--metainfo-box">
                <span class="category-color">Lernphase</span>
                <p>{{ $method->stage }}</p>
            </div>
            <div class="metainfo-box">
                <span class="category-color">Schwierigkeit</span>
                <p>{{ $method->complexity }}</p>
            </div>
            <div class="metainfo-box">
                <span class="category-color">Vorbereitung</span>
                <p>{{ $method->preparation }}</p>
            </div>
            <div class="metainfo-box">
                <span class="category-color">Dauer</span>
                <p>{{ $method->duration }}</p>
            </div>
            <div class="metainfo-box">
                <span class="category-color">Teilnehmendenzahl</span>
                <p>{{ $method->participants }}</p>
            </div>
            <div class="metainfo-box">
                <span class="category-color">Sozialform</span>
                <p>{{ $method->social_form }}</p>
            </div>
            <div class="metainfo-box">
                <span class="category-color">Material</span>
                <p>{{ $method->material }}</p>
            </div>
        </div>
        <div class="method-single--content">
            <div>
                <h2 class="category-color">Durchführung</h2>
                <p>{{ $method->explanation }}</p>
            </div>
            <div>
                <h2 class="category-color">Beispiel</h2>
                <p>{{ $method->example }}</p>
            </div>
            <div>
                <h2 class="category-color">Lernraum</h2>
                <p>{{ $method->learning_environment }}</p>
            </div>
            <div>
                <h2 class="category-color">Gefahren/Anmerkungen</h2>
                <p>{{ $method->obstacles }}</p>
            </div>
            <div>
                <h2 class="category-color">Expertentipp</h2>
                <p>{{ $method->tips }}</p>
            </div>
            <div>
                <h2 class="category-color">Quelle(n)</h2>
                <ul>
                    <li>
                        @unless($method->source->link == NULL )
                        {{ $method->source->originator }} - {{ $method->source->source }}
                        @else
                        <a href="{{ $method->source->link }}">{{ $method->source->originator }} - {{ $method->source->source }}</a>
                        @endunless
                    </li>
                </ul>
                
            </div>
            <div class="card-author">
                <img src="https://placekitten.com/32/32">
                <div class="card-author-name">{{ $method->user->name }}</div>
            </div>  
        </div>
    </div>

</div>


</section>

@endsection