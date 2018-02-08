@extends('layouts.default')

 

@section('sound')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit Animal</h2>

        </div>

        <div class="pull-right">

            <br/>

            <a class="btn btn-primary" href="{{ route('animals.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>

        </div>

    </div>

</div>

{!! Form::model($animal, ['method' => 'PATCH','route' => ['animals.update', $post->id]]) !!}

    @include('animals.form')

{!! Form::close() !!}

@endsection