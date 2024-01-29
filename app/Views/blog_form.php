<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="blog-app/create" method="post">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text"
            class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Title...">
        </div>

        <div class="form-group">
          <label for="content">Content</label>
          <input type="text"
            class="form-control" name="content" id="content" aria-describedby="helpId" placeholder="Content...">
        </div>
        <button type="submit" id="submit-btn" class="btn btn-primary btn-lg btn-block">Submit</button>
    </form>    
</body>
</html>