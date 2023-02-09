@extends('layouts.app')

@section('content')
<form action="numbers" method="post">
    @CSRF
<div class="row">
  <div class="col">
    <input type="text" class="form-control" name="num" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
  <button type="submit" class="btn btn-primary">Primary</button>
  </div>
</div>
</form>
@stop
