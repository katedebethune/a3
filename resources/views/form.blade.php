@extends('layouts.master')
@section('content')
<div class="container">

<form method='GET' action='/'>
  <div class="form-group">
    <label for="translateText">Text to Translate</label>
    <textarea class="form-control" name = "translateText" id="translateText" rows="3" value='{{ $translateText or '' }}'></textarea>
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
      <input type="checkbox" class="form-check-input" >
      Optional Rules Apply
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Translate</button>
</form>
</div>

@endsection