@extends('admin.base')
@section('option')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Option</h1>
        <div>
            <a href="{{ route('option.create')}}" class="btn btn-primary mb-3">Add Option</a>
            <a href="{{ route('dashboard')}}" class="btn btn-primary mb-3">Back</a>
        </div>
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                </tr>
            </thead>
            <tbody>
                @foreach($options as $option)
                <tr>
                    <td>{{$option->id}}</td>
                    <td>{{$option->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        </div>
@endsection