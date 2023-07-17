<!DOCTYPE html>
<html>

<head>
    <title>Laravel 9 Image Upload Example - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <div class="panel panel-primary">

            <div class="panel-heading">
                <h2>Laravel 9 Image Upload</h2>
            </div>
            @if ($message = Session::get('success'))
                <div class="form-controller bg-success p-3">
                    <strong>{{ $message }}</strong>
                </div>
                <img src='images/{{ Session::get('image') }}' />
            @endif
            <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name='image' />
                <input type='submit' value="submit" />
            </form>
        </div>
    </div>
</body>

</html>
