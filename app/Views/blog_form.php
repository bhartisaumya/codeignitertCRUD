<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Form</title>

    <!-- Add your custom styles here -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="blogapp/create" method="post">
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
