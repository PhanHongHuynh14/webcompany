@extends('admin.base')
@section('contact')
<section class="contact_section layout_padding">
    <div class="custom_heading-container">
        <h3 class=" ">
            Đặt hàng Online
        </h3>
    </div>
    <div class="container layout_padding2-top">
        <div class="row">
            <div class="col-md-6 mx-auto">
                @if (empty($contacts))
                <form class="container-fluid" method="post" action="{{ route('contact.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="d-flex justify-content-between">
                            <h3>Create contact</h3>
                @endif
                            <a href="{{ route('contact.index') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control mb-2 @error('name') is-invalid @enderror"
                            id="name" placeholder="" value="{{ old('name', $contact->name ?? '') }}" @isset($isShow)
                            disabled @endisset>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="container-fluid">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="text" class="form-control mb-2 @error('email') is-invalid @enderror"
                            id="email" placeholder="" value="{{ old('email', $contact->email ?? '') }}" @isset($isShow)
                            disabled @endisset>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="container-fluid">
                        <select name="option" id="option" class="form-select @error('option') is-invalid @enderror"
                            @isset($isShow) disabled @endisset>
                            @if (empty($options))
                                <option value="" selected disabled hidden> Select a option </option>
                            @endif
                            @foreach ($options as $option)
                                <option value="{{ $option->name }}">
                                    {{ $option->name }} </option>
                            @endforeach
                        </select>
                        @error('option')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="container-fluid">
                        <label for="number" class="form-label">Number</label>
                        <input name="number" type="text" class="form-control mb-2 @error('number') is-invalid @enderror"
                            id="number" placeholder="" value="{{ old('number', $contact->number ?? '') }}"
                            @isset($isShow) disabled @endisset>
                        @error('number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="container-fluid">
                        <label for="note" class="form-label">Note</label>
                        <input name="note" type="text" class="form-control mb-2 @error('note') is-invalid @enderror"
                            id="note" placeholder="" value="{{ old('note', $contact->note ?? '') }}">
                        @error('note')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    @empty($isShow)
                    <div class="row mt-3">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">
                                HOÀN THÀNH

                            </button>
                        </div>
                    </div>
                    @endempty
                </form>
            </div>
        </div>

    </div>
</section>


@endsection
