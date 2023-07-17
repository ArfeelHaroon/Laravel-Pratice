<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit</title>
</head>

<body>
    <div class="card col-7 m-auto mt-5">

        <form action="{{ route('employee.update', $data->id) }}" method="post">
            @csrf
            @method('put')
            {{-- <input type="text" class="form-control" id="id" name="id" value="{{ $data->id }}" /> --}}

            <div class="mb-3 col-9 m-auto mt-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" value="{{ $data->name }}" name="name">
            </div>

            <div class="mb-3 col-9 m-auto">
                <label for="Email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="Email" name="email" value="{{ $data->email }}">
            </div>
            <input type="submit" class="btn btn-primary float-end m-5" value="Edit">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>