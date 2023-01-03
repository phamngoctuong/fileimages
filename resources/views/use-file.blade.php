<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Laravel File Upload</title>
  <style>
    .container {
      max-width: 500px;
    }
    dl,
    ol,
    ul {
      margin: 0;
      padding: 0;
      list-style: none;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    @foreach ($files as $file)
      <div class="row mb-2">
        <img class="img-fluid" src="{{ $file->file_path }}" alt="Text Placeholder">
      </div>
    @endforeach
  </div>
</body>
</html>
