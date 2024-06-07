<!DOCTYPE html>
<html>
<head>
    <title>Dictionary App</title>
</head>
<body>
<h1>Dictionary App</h1>
<form action="/search" method="GET">
    <input type="text" name="query" placeholder="Search for a word" required>
    <button type="submit">Search</button>
</form>
    @if(isset($results))
    <h2>Search Results</h2>
    <ul>
        @forelse($results as $word)
        <li>
            <strong>{{$word->meaning}}</strong>
        </li>
        @empty
        <li>No results found.</li>
        @endforelse
    </ul>
    @endif
</body>
</html>