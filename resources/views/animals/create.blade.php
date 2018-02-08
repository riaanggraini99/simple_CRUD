@extends('layouts.default')

@section('sound')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Animal</h2>

        </div>

        <div class="pull-right">

        	<br/>

            <a class="btn btn-primary" href="{{ route('animals.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>

        </div>

    </div>

</div>

{!! Form::open(array('route' => 'animals.store','method'=>'POST')) !!}

     @include('animals.form')

{!! Form::close() !!}

@endsection