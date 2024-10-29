<!DOCTYPE html>
<html>
<head>
    <title>Summary Result</title>
</head>
<body>
    <h1>Summary:</h1>
    <p>{{ $summary }}</p>

    <form action="/generate-mindmap" method="POST">
        @csrf
        <input type="hidden" name="summary" value="{{ $summary }}">
        <button type="submit">Generate Mindmap</button>
    </form>
</body>
</html>

