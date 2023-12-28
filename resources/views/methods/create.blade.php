@extends('layouts.app')

@section('content')

<section>

    <!-- Page Heading -->
    <div class="container">
        <h1>Methode erstellen</h1>
        <p>NEVEREST Methodarium</p>      
    </div>
    <!-- End Page Heading -->

    <div id="main" class="container">
        <form action="{{route('methods.store')}}" method="post">
        
            @csrf
            @method('post')

            <div class="form-group row">
                <label for="category_id" class="col-3 col-form-label">Methodenkategorie</label> 
                <div class="col-9">
                    <select id="category_id" name="category_id" class="form-control" required="required">

                        @foreach ($categories as $category)

                            <option value="{{ $category->id }}">{{ $category->category }}</option>

                        @endforeach

                    </select>
                    @error('category_id')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label class="col-3 col-form-label" for="title">Name der Methode</label> 
                <div class="col-9">
                    <input id="title" name="title" type="text" class="form-control" required="required">

                    @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>
                
                <div class="form-group row">
                <label for="goal" class="col-3 col-form-label">Ziel der Methode</label> 
                <div class="col-9">
                    <input id="goal" name="goal" placeholder=" Die Teilnehmenden ..." type="text" class="form-control" required="required" aria-describedby="goalHelpBlock"> 
                    <span id="goalHelpBlock" class="form-text text-muted">Beispiel: Durch diese Methode nehmen die Teilnehmenden einen anderen Blickwinkel ein.</span>
                    @error('goal')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label class="col-3">4MAT-Quadranten</label> 
                <div class="col-9">
                    <div class="form-check form-check-inline">
                    <input name="stage[]" id="stage_0" type="checkbox" class="form-check-input" value="WARUM" aria-describedby="checkboxHelpBlock" required="required"> 
                    <label for="stage_0" class="form-check-label">WARUM</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="stage[]" id="stage_1" type="checkbox" class="form-check-input" value="WAS" aria-describedby="checkboxHelpBlock" required="required"> 
                    <label for="stage_1" class="form-check-label">WAS</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="stage[]" id="stage_2" type="checkbox" class="form-check-input" value="WIE" aria-describedby="checkboxHelpBlock" required="required"> 
                    <label for="stage_2" class="form-check-label">WIE</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="stage[]" id="stage_3" type="checkbox" aria-describedby="checkboxHelpBlock" required="required" class="form-check-input" value="WAS WENN"> 
                    <label for="stage_3" class="form-check-label">WAS WENN</label>
                    </div> 
                    <span id="stageHelpBlock" class="form-text text-muted">In welchen 4MAT-Quadranten kann die Methdode sinnvollerweise eingesetzt werden?</span>
                    @error('stage')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label class="col-3">Schwierigkeitsgrad</label> 
                <div class="col-9">
                    <div class="form-check form-check-inline">
                    <input name="complexity" id="complexity_0" type="radio" required="required" class="form-check-input" value="1"> 
                    <label for="complexity_0" class="form-check-label">sehr gering</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="complexity" id="complexity_1" type="radio" required="required" class="form-check-input" value="2"> 
                    <label for="complexity_1" class="form-check-label">gering</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="complexity" id="complexity_2" type="radio" required="required" class="form-check-input" value="3"> 
                    <label for="complexity_2" class="form-check-label">medium</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="complexity" id="complexity_3" type="radio" required="required" class="form-check-input" value="4"> 
                    <label for="complexity_3" class="form-check-label">hoch</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="complexity" id="complexity_4" type="radio" required="required" class="form-check-input" value="5"> 
                    <label for="complexity_4" class="form-check-label">sehr hoch</label>
                    </div>
                    @error('complexity')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="duration" class="col-3 col-form-label">Dauer</label> 
                <div class="col-9">
                    <input id="duration" name="duration" placeholder="15 - 45 Min." type="text" class="form-control" aria-describedby="durationHelpBlock" required="required"> 
                    <span id="durationHelpBlock" class="form-text text-muted">Wie lange dauert die Methode? Angabe entweder als Zirkaangabe ("ca. 20 Min.") oder als Intervall ("15 - 45 Min.). Minuten bitte immer als "Min." abkürzen.</span>
                    @error('duration')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="participants" class="col-3 col-form-label">Teilnehmerzahl</label> 
                <div class="col-9">
                    <input id="participants" name="participants" placeholder="12 - 16 TN" type="text" required="required" class="form-control" aria-describedby="participantsHelpBlock"> 
                    <span id="participantsHelpBlock" class="form-text text-muted">Je nach Bedarf folgende Angaben eintragen: "unbegrenzt", "ab X TN", "bis X TN" oder "12 - 16 TN".</span>
                    @error('participants')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label class="col-3">Sozialform(en)</label> 
                <div class="col-9">
                    <div class="form-check form-check-inline">
                    <input name="social_form" id="social_form_0" type="checkbox" class="form-check-input" value="1" required="required"> 
                    <label for="social_form_0" class="form-check-label">Solo</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="social_form" id="social_form_1" type="checkbox" class="form-check-input" value="2" required="required"> 
                    <label for="social_form_1" class="form-check-label">Tandem</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="social_form" id="social_form_2" type="checkbox" class="form-check-input" value="3" required="required"> 
                    <label for="social_form_2" class="form-check-label">Kleingruppe</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="social_form" id="social_form_3" type="checkbox" required="required" class="form-check-input" value="4"> 
                    <label for="social_form_3" class="form-check-label">Großgruppe</label>
                    </div>
                    @error('social_form')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label class="col-3">Lernraum</label> 
                <div class="col-9">
                    <div class="form-check form-check-inline">
                    <input name="learning_environment" id="learning_environment_0" type="checkbox" class="form-check-input" value="Seminarraum" required="required"> 
                    <label for="learning_environment_0" class="form-check-label">Seminarraum</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="learning_environment" id="learning_environment_1" type="checkbox" class="form-check-input" value="Outdoor" required="required"> 
                    <label for="learning_environment_1" class="form-check-label">Outdoor</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="learning_environment" id="learning_environment_2" type="checkbox" class="form-check-input" value="Online" required="required"> 
                    <label for="learning_environment_2" class="form-check-label">Online</label>
                    </div>
                    @error('learning_environment')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label class="col-3">Vorbereitungsintensität</label> 
                <div class="col-9">
                    <div class="form-check form-check-inline">
                    <input name="preparation_level" id="preparation_level_0" type="radio" class="form-check-input" value="1" required="required"> 
                    <label for="preparation_level_0" class="form-check-label">sehr gering</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="preparation_level" id="preparation_level_1" type="radio" class="form-check-input" value="2" required="required"> 
                    <label for="preparation_level_1" class="form-check-label">gering</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="preparation_level" id="preparation_level_2" type="radio" class="form-check-input" value="3" required="required"> 
                    <label for="preparation_level_2" class="form-check-label">medium</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="preparation_level" id="preparation_level_3" type="radio" required="required" class="form-check-input" value="4"> 
                    <label for="preparation_level_3" class="form-check-label">hoch</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="preparation_level" id="preparation_level_4" type="radio" required="required" class="form-check-input" value="5"> 
                    <label for="preparation_level_4" class="form-check-label">sehr hoch</label>
                    </div>
                    @error('preparation_level')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="preparation" class="col-3 col-form-label">Vorbereitungsaufgaben</label> 
                <div class="col-9">
                    <input id="preparation" name="preparation" placeholder="Material bestellen, Moderationskarten vorbereiten, ..." type="text" class="form-control" required="required" aria-describedby="textHelpBlock"> 
                    <span id="textHelpBlock" class="form-text text-muted">Angaben bitte durch Komma (,) trennen.</span>
                    @error('preparation')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="material" class="col-3 col-form-label">Benötigtes Material</label> 
                <div class="col-9">
                    <input id="material" name="material" placeholder="Flipchartstifte, Moderationskarten, ..." type="text" class="form-control" required="required" aria-describedby="materialHelpBlock"> 
                    <span id="materialHelpBlock" class="form-text text-muted">Angaben bitte durch Komma (,) trennen. Wenn kein Material benötigt wird, das Feld bitte freilassen.</span>
                    @error('material')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="explanation" class="col-3 col-form-label">Beschreibung der Methode</label> 
                <div class="col-9">
                    <textarea id="explanation" name="explanation" cols="40" rows="8" class="form-control" required="required"></textarea>
                    @error('explanation')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="example" class="col-3 col-form-label">Beispiel</label> 
                <div class="col-9">
                    <textarea id="example" name="example" cols="40" rows="8" class="form-control"></textarea>
                    @error('example')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="obstacles" class="col-3 col-form-label">Gefahren/Anmerkungen</label> 
                <div class="col-9">
                    <textarea id="obstacles" name="obstacles" cols="40" rows="8" class="form-control"></textarea>
                    @error('obstacles')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="tips" class="col-3 col-form-label">Expertentipp</label> 
                <div class="col-9">
                    <textarea id="tips" name="tips" cols="40" rows="8" class="form-control"></textarea>
                    @error('tips')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="online" class="col-3 col-form-label">Besonderheiten im Lernraum Online</label> 
                <div class="col-9">
                    <textarea id="online" name="online" cols="40" rows="8" class="form-control"></textarea>
                    @error('online')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="source" class="col-3 col-form-label">Quellenangabe</label> 
                <div class="col-9">
                    <select id="source" name="source" class="form-control">
                    <option value="1">Rabbit</option>
                    <option value="2">Duck</option>
                    <option value="3">Fish</option>
                    </select>
                    @error('source')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div> 
                
                <input type="hidden" id="author" name="author" value="1">

                <div class="form-group row">
                <div class="offset-3 col-9">
                    <button name="submit" type="submit" class="btn btn-primary">Methode speichern</button>
                </div>
                </div>

                

        </form>
    </div>


</section>

@endsection


