@extends('layouts.default')

@section('sound')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Animal</h2>

        </div>

    </div>

</div>

@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif

<table class="table table-bordered">

    <tr>

        <th width="80px">No</th>

        <th>name</th>

        <th>sound</th>

        <th width="140px" class="text-center">

            <a class="btn btn-success btn-sm" href="{{ route('animals.create') }}"><i class="glyphicon glyphicon-plus"></i></a>

        </th>

    </tr>

@foreach ($animals as $animal)

<tr>

    <td>{{ ++$i }}</td>

    <td>{{ $animal->name }}</td>

    <td>{{ $animal->sound }}</td>

    <td>

        <a class="btn btn-info btn-sm" href="{{ route('animals.show',$animal->id) }}"><i class="glyphicon glyphicon-th-large"></i></a>

        <a class="btn btn-primary btn-sm" href="{{ route('animals.edit',$animal->id) }}"><i class="glyphicon glyphicon-pencil"></i></a>

        {!! Form::open(['method' => 'DELETE','route' => ['animals.destroy', $animal->id],'style'=>'display:inline']) !!}

        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>

        {!! Form::close() !!}

    </td>

</tr>

@endforeach

</table>

{!! $animals->render() !!}

@endsection