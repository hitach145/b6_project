<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
    <title>Document</title>
</head>
<body>


<div class="container">
    <h1>List of Book</h1>


    <button class="btn btn-outline-primary">
        <a href="/book-add" class="link-offset-2 link-underline link-underline-opacity-0">Add New Book</a>
    </button>

    <table class="table table-striped table-hover">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>ISBN</th>
            <th>Cover Image</th>
            <th>Cost</th>
            {{-- <th>Update</th> --}}
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listBook as $row)
            <tr onclick="window.location='{{ route('book_detail', ['id' => $row->id]) }}';">
                <td>{{ $row->id }}</td>
                <td>{{ $row->ISBN_code }}</td>
                <td><img src="{{ asset('storage/'.$row->cover_image) }}" alt="" title="" /></td>
                <td>{{ $row->cost }}</td>
                {{-- <td><a href="/book-update/{{ $row->id }}">Update</a></td> --}}
                <td><a href="/book-delete/{{ $row->id }}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
