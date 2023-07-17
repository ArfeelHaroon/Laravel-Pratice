<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <a href="{{ route('categories.create') }}"> <input type="button" class="btn btn-primary m-3"
            value="Create Category" /> </a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>Status</th>
                <th>Parent Id</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($categories as $categorie)
                <tr>
                    <td>{{ $categorie->id }}</td>
                    <td>{{ $categorie->name }}</td>
                    <td>{{ $categorie->status }}</td>
                    <td>{{ $categorie->parent_id }}</td>
                    {{-- <td>{{ $categorie->parent_id }}</td> --}}
                    <td>
                        <a href="{{ route('categories.edit', $categorie->id) }}"> <input type="button"
                                class="btn btn-primary" value="Edit" /></a>
                        <input type="button" class="btn btn-danger" value="Delete" />
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
