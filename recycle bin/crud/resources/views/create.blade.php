@extends('layouts.masterlayout')
@section('title')
    create
@endsection
@section('content')
    <form class="m-auto" action="{{ route('person.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card col-md-6 m-auto mt-5">
            <h2 class="m-auto mt-3">Create</h2>
            <div class="mb-3 mt-4 col-md-9 m-auto">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" id="name"
                    class="form-control  @error('name') is-invalid @enderror">
                @error('name')
                    <P class="invalid-feedback">{{ $message }}</P>
                @enderror
            </div>

            <div class="mb-3 col-md-9 m-auto">
                <label for="Email1" class="form-label">Email address</label>
                <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"
                    name="email">
                @error('email')
                    <P class="invalid-feedback">{{ $message }}</P>
                @enderror
            </div>

            <div class="mb-4 col-md-9 m-auto">
                <input type="file" name='image' class="@error('image') is-invalid  @enderror">
                @error('image')
                    <P class="invalid-feedback">{{ $message }}</P>
                @enderror
                <button type="submit" class="btn btn-primary float-end mt-5">Submit</button>
            </div>
        </div>
    </form>
@endsection
