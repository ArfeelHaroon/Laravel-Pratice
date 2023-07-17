@extends('layouts.masterlayout')
@section('title')
    create
@endsection
@section('content')
    <form action="{{ route('customers.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
