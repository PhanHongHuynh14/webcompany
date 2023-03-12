@extends('admin.base')
@section('option')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Create Option</h1>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('option.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" />
                </div>
                <button type="submit" class="btn btn-primary">Add option</button>
            </form>
        </div>
    </div>
</div>

{{-- <div class="container layout_padding2-top">
    <div class="row">
        <div class="col-md-6 mx-auto">
            @if (empty($options))
            <form class="container-fluid" method="post" action="{{ route('option.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="d-flex justify-content-between">
                        <h3>Create option</h3>
            @endif
                        <a href="{{ route('option.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <div class="container-fluid">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control mb-2 @error('name') is-invalid @enderror"
                        id="name" placeholder="" value="{{ old('name', $option->name ?? '') }}" @isset($isShow)
                        disabled @endisset>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                @empty($isShow)
                <div class="row mt-3">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">
                            Save
                        
                        </button>
                    </div>
                </div>
                @endempty
            </form>
        </div>
    </div>

</div> --}}
@endsection