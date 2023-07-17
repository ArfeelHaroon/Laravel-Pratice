@extends('layouts/masterLayout')
@section('title')
    Employee list
@endsection
@section('section')
    <div class="create_btn">
        <a href="{{ route('employees.create') }}"> <input type="button" class="btn btn-primary float-end m-3"
                value="Create" /></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($worker as $employee)
                <tr>
                    <td><input type="hidden" name="id" value=" {{ $employee['id'] }}" /> {{ $employee['id'] }}</td>
                    <td><input type="hidden" name="name" value=" {{ $employee['name'] }}" /> {{ $employee['name'] }}
                    </td>
                    <td><input type="hidden" name="" value=" {{ $employee['email'] }}" />
                        {{ $employee['email'] }}</td>

                    <td><a href="{{ route('employees.edit', $employee['id']) }}"><button name="edit_btn"
                                class="btn btn-info edit_btn">Edit</button></a>
                        <button onclick="deleteEmployee({{ $employee->id }})"
                            class="btn btn-danger delete_btn">Delete</button>
                        <form id="employee-delete-{{ $employee->id }}"
                            action="{{ route('employee.destroy', $employee->id) }}" method="POST">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('ModalTitle')
    Edit
@endsection
@section('ModalSection')
    <form action="" method="POST">
        <div class="mb-3">
            <label for="name" name="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="Email" name="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="Email">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
<x-modal />
