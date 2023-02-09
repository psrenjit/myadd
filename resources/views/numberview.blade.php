@extends('layouts.app')

@section('content')
@foreach($rhs as $log)
<div class="row">
    <div class="col">
        Number
    </div>
    <div class="col">
        {{$log->tnumber}}
    </div>
</div>
<div class="row">
    <div class="col">
        Subscriber Name
    </div>
    <div class="col">
        {{$log->subscribername}}
    </div>
</div>
<div class="row">
    <div class="col">
        Father/ husband Name
    </div>
    <div class="col">
        {{$log->fatherhusname}}
    </div>
</div>
<div class="row">
    <div class="col">
        Dob
    </div>
    <div class="col">
        {{$log->dob}}
    </div>
</div>
<div class="row">
    <div class="col">
        Local address
    </div>
    <div class="col">
        {{$log->localaddress}}
    </div>
</div>
<div class="row">
    <div class="col">
        Permanant address
    </div>
    <div class="col">
        {{$log->permanantaddress}}
    </div>
</div>
<div class="row">
    <div class="col">
        Connection type
    </div>
    <div class="col">
        {{$log->connectiontype}}
    </div>
</div>
<div class="row">
    <div class="col">
        Addres proof
    </div>
    <div class="col">
        {{$log->addressproff}}
    </div>
</div>
<div class="row">
    <div class="col">
        Alternative
    </div>
    <div class="col">
        {{$log->alternative}}
    </div>
</div>
<div class="row">
    <div class="col">
        Activation date
    </div>
    <div class="col">
        {{$log->activationdate}}
    </div>
</div>
<div class="row">
    <div class="col">
        Provider
    </div>
    <div class="col">
        {{$log->serviceprovider}}
    </div>
</div>


@endforeach

@stop
