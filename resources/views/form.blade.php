@extends('layouts.master')
@section('content')
<div class="container">

<form method='GET' action='/translate/'>
  <div class="form-group required">
    <label for="translateText">Text to Translate</label>
    <textarea class="form-control" name = "translateText" id="translateText" rows="3">{{ $translateText or '' }}</textarea>
  </div>

  <fieldset class="form-group"> 
    <legend>Suffix</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="suffix" id="suffix" value="A" checked>
        'A'
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="suffix" id="suffix" value="AY">
       'AY'
      </label>
    </div>
  </fieldset>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" name = "option" id = "option"  >
      Optional Rules Apply
		<li>Optional Rules = Words less than 3 charachters will be left as is...</li>
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Translate</button>
</form>
</div><br>

     {{-- If the form was submitted, display the results: --}}
@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li class = "alert alert-danger">{{ $error }}</li>
        @endforeach
    </ul>
@else

	@if(isset($translateText))  
		@if($translateText != null)
				<div class = " container alert alert-success">
					<h2>Translation<br></h2><em>{{$translation}}</em>
				</div>

		@endif
	@endif
@endif

@endsection