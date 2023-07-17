{{-- {{ $category }}
{{ $categories }} --}}
{{ $category_Parent_id }}


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
    <form method="POST" class="m-auto w-25 border p-2 mt-5" action="{{ route('categories.update', $id) }}">
        @csrf
        @method('PUT')
        <p class="mb-3"><strong>Create Category</strong></p class="m-auto">
        <label>Select Category</label>
        <select name='parent_id' class="w-50 mb-3" value="{{ $category->id }}">
            {{-- <option value="" class="m-auto d-none">----Select option----</option> --}}
            @foreach ($categories as $categorie)
                @if ($categorie->name !== $category->name)
                    <option value="{{ $categorie->id }}" @if ($categorie->id == $category_Parent_id) @selected(true) @endif>
                        {{ $categorie->name }}
                    </option>
                @endif
            @endforeach
        </select>
        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" value="{{ $category->status }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
