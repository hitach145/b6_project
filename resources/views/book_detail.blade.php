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
    <h1>Detail</h1>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>ISBN</th>
            <th>Publisher</th>
            <th>Number Page</th>
            <th>category</th>
            <th>author</th>
            <th>Cover Image</th>
            <th>Cost</th>
            <th>Update</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->ISBN_code}}</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->number_page }}</td>
                <td>{{ $book->category }}</td>
                <td>{{ $book->author }}</td>
                <td><img src="{{ asset('storage/' . $book->cover_image) }}" alt="Book Image" class="cover_image"></td>
                <td>{{ $book->cost }}</td>
                <td><a href="/book-update/{{ $book->id }}">Update</a></td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>

