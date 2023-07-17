<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Role</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <form method="post" action="{{ route('roles.store') }}" class="w-50 m-auto">
        @csrf
        <div class="mb-3">
            <label class="form-label">Role Name</label>
            <input type="text" name="name" class="form-control" placeholder="role name..">
        </div>

        <div class="mb-3">
            <label class="form-label">Role Title</label>
            <input type="text" name="title" class="form-control" placeholder="role title..">
        </div>

        <p><strong>Permission(s)</strong></p>
        <div class="d-flex border justify-content-around m-3 p-3">
            <div class="writer_permission">
                <h6>Writer permission(s)</h6>
                @foreach ($writerPermissions as $writerPermissions)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="checkbox[]"
                            value="{{ $writerPermissions->name }}" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            {{ $writerPermissions->title }}
                        </label>
                    </div>
                @endforeach
            </div>

            <div class="admin_permission ">
                <h6>Admin permission(s)</h6>
                @foreach ($AdminPermissions as $adminPermissions)
                    <div class="form-check">
                        <input class="form-check-input" name="checkbox[]" type="checkbox"
                            value="{{ $adminPermissions->name }}" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            {{ $adminPermissions->title }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
