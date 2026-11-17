<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Book</title>
    <link rel="stylesheet" href="{{ asset('mydesign/style.css') }}">
</head>
<body>
    <h1>Edit Book</h1>
    <a href="{{ route('books.getAllBooks') }}" class="btn btn-secondary">Back to Book List</a>
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $book->title }}" required>
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" value="{{ $book->author }}" required>
        </div>

        <div class="form-group">
            <label for="published_year">Published Year</label>
            <input type="number" name="published_year" id="published_year" value="{{ $book->published_year }}" required>
        </div>

        <button type="submit" class="btn btn-edit">Update</button>
    </form>
</body>
</html>
