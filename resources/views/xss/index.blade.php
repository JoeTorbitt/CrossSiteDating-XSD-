<!DOCTYPE html>
<html>
<head>
    <title>XSS Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>XSS Example</h1>

    @if ($script)
        <h2>Output:</h2>
        <div id="output"></div>

        <script>
      $(document).ready(function() {
        var script = {!! $script !!};
        eval(script);
    });

</script>
    @else
        <h2>Enter a script:</h2>
        <form method="GET" action="{{ route('xss.index') }}">
            <input type="text" name="script" placeholder="Enter a script">
            <button type="submit">Submit</button>
        </form>
    @endif
</body>
</html>