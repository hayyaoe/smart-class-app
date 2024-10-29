<!DOCTYPE html>
<html>
<head>
    <title>Mindmap</title>
    <script type="module">
        import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
        mermaid.initialize({ startOnLoad: true });
    </script>
</head>
<body>
    <h1>Generated Mermaid.js Mindmap</h1>
    <pre class="mermaid">
        {{ $mindmap }}
    </pre>

    {{ $mindmap }}
</body>
</html>

