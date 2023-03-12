@extends('admin.base')

@section('contact')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="container-fluid">
        <div>
            <h1 style="padding-left: 5px">Contact</h1>
            <a href="{{ route('dashboard')}}" class="btn btn-primary mb-3">Back</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th style="text-align:center" scope="col">Id</th>
                    <th style="text-align:center" scope="col">Name</th>
                    <th style="text-align:center" scope="col">Email</th>
                    <th style="text-align:center" scope="col">Option</th>
                    <th style="text-align:center" scope="col">Number</th>
                    <th style="text-align:center" scope="col">Note</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($contacts))
                    @foreach ($contacts as $key => $contact)
                        <tr>
                            <td style="text-align:center">{{ $contact->id }}</td>
                            <td style="text-align:center">{{ $contact->name }}</td>
                            <td style="text-align:center">{{ $contact->email }}</td>
                            <td style="text-align:center">{{ $contact->option }}</td>
                            <td style="text-align:center">{{ $contact->number }}</td>
                            <td style="text-align:center">{{ $contact->note }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection

