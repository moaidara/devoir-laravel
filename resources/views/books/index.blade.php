<h1>Liste des livres</h1>
<ul>
@foreach($books as $book)
    <li>
        <a href="{{ route('books.show', $book->id) }}">
            {{ $book->title }} par {{ $book->author }}
        </a>
    </li>
@endforeach
</ul>