<h1>{{ $book->title }}</h1>
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
</form>
