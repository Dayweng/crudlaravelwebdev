<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="{{ asset('mydesign/style.css') }}">
</head>
<body>
    <h1>Daftar Buku</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Published Year</th>
            <th>Actions</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->published_year }}</td>
                <td>
                    <a href="{{ route('books.edit', $book) }}" class="btn btn-edit">Edit</a>
                    <form action="{{ route('books.destroy', $book) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

<a href="{{ route('books.create') }}" class="btn btn-add">Add New Book</a>
</body>
</html>
