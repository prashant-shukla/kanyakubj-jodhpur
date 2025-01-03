{{-- resources/views/documents/show.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $document->title }}</title>
</head>
<body>
    <div class="container">
        <h1>{{ $document->title }}</h1>

        <p><strong>File Type:</strong> {{ strtoupper($document->file_type) }}</p>

        <p>
            <!-- Link to download the document -->
            <a href="aap/public/{{ asset($document->file_path) }}" target="_blank">Download PDF</a>
        </p>

        <!-- Optional: Add more details about the document -->
        <p><strong>Document Details:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
</body>
</html>
