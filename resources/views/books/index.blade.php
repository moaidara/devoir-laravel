<div class="container my-5">
    <h1 class="mb-4 text-center text-primary">📚 Liste des livres</h1>

    <div class="list-group">
        @foreach($books as $book)
            <a href="{{ route('books.show', $book->id) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="mb-1">{{ $book->title }}</h5>
                    <small class="text-muted">par {{ $book->author }}</small>
                </div>
                <span class="badge bg-secondary">Voir</span>
            </a>
        @endforeach
    </div>
</div>

