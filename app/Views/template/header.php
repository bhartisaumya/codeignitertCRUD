<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Navbar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom Styles -->
    <style>
        body {
            padding-top: 70px; /* Adjust body padding to accommodate fixed navbar */
        }

        .navbar {
            background-color: #f8f9fa; /* Light gray background */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        .navbar-brand {
            font-weight: bold;
            color: #007bff; /* Blue color */
        }

        .navbar-nav .nav-item .nav-link {
            color: #343a40; /* Dark gray color */
        }

        .navbar-nav .nav-item.active .nav-link {
            color: #007bff; /* Active link color */
        }

        .navbar-toggler-icon {
            border-color: #007bff; /* Toggler icon color */
        }

        .navbar-toggler {
            border-color: #007bff; /* Toggler button color */
        }

        /* Add your additional styles here */
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/blogapp">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/blogapp/displayAllBlog">All Blogs</a>
            <a class="nav-item nav-link disabled" href="#">Disabled</a>
        </div>
    </div>
</nav>

<!-- Your page content goes here -->

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
