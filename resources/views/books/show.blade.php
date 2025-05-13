<!-- <h1>{{ $book->title }}</h1>
<p>{{ $book->description }}</p>
<p>Publié le : {{ $book->published_at }}</p>

<h2>Avis :</h2>
@foreach($book->reviews as $review)
    <p><strong>{{ $review->users->name ?? 'Utilisateur inconnu' }}</strong> ({{ $review->rating }}/5) : {{ $review->comment }}</p>
@endforeach

<h3>Ajouter un avis</h3>
<form method="POST" action="{{ route('reviews.store', $book->id) }}">
    @csrf
    <select name="user_id">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <input type="number" name="rating" min="1" max="5" required>
    <textarea name="comment"></textarea>
    <button type="submit">Envoyer</button>
</form> -->


<div class="container my-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title text-primary">{{ $book->title }}</h1>
            <p class="card-text">{{ $book->description }}</p>
            <p class="text-muted">📅 Publié le : {{ $book->published_at }}</p>
        </div>
    </div>

    <div class="mt-4">
        <h2 class="text-secondary">📝 Avis :</h2>
        @forelse($book->reviews as $review)
            <div class="alert alert-light border d-flex justify-content-between align-items-center">
                <div>
                    <strong>{{ $review->users->name ?? 'Utilisateur inconnu' }}</strong> 
                    <span class="text-warning">({{ $review->rating }}/5⭐)</span> :
                    {{ $review->comment }}
                </div>
            </div>
        @empty
            <p class="text-muted">Aucun avis pour ce livre pour le moment.</p>
        @endforelse
    </div>

    <div class="mt-5">
        <h3 class="mb-3 text-success">➕ Ajouter un avis</h3>
        <form method="POST" action="{{ route('reviews.store', $book->id) }}" class="border rounded p-4 shadow-sm bg-light">
            @csrf

            <div class="mb-3">
                <label for="user_id" class="form-label">Utilisateur</label>
                <select name="user_id" id="user_id" class="form-select" required>
                    <option disabled selected>Choisir un utilisateur</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Note (1-5)</label>
                <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" required>
            </div>

            <div class="mb-3">
                <label for="comment" class="form-label">Commentaire</label>
                <textarea name="comment" id="comment" class="form-control" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</div>
