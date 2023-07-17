<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($message = Session::get('deleted'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

    </div>
    <a href="{{ route('roles.create') }}"> <input type="button" class="btn btn-primary m-3" value="Create Role" /> </a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Title</th>
                <th>Guard Name</th>
                <th class="m-auto">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->guard_name }}</td>
                    <td class="d-flex">
                        <a href="{{ route('roles.edit', $item->id) }}" class="m-2"> <input type="button"
                                class="btn btn-primary" value="Edit" /> </a>
                        <form action="{{ route('roles.destroy', $item->id) }}" method="POST" class="m-2">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete" />
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
