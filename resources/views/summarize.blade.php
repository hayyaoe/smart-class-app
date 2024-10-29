<!DOCTYPE html>
<html>
<head>
    <title>Text Summarization</title>
</head>
<body>
    <h1>Enter Text to Summarize</h1>
    <form action="/summarize" method="POST">
        @csrf
        <textarea name="text" rows="10" cols="50" placeholder="Enter text here..."></textarea><br>
        <button type="submit">Summarize</button>
    </form>
</body>
</html>

