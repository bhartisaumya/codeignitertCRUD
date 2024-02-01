<!-- File: app/Views/blog_table.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Data Table</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        img{
            width: 100px;
            height: 60px;
        }
    </style>
</head>
<?php include('template/header.php'); ?>

<body>

    <div class="container mt-5">
        <h2>Blog Data Table</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Images</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($blogData as $row): ?>
                    <tr>
                        <td><?= $row['title']; ?></td>
                        <td><?= $row['content']; ?></td>
                        <td>
                        <?php if (!empty($row['imageName'])): ?>
                            <img src="<?= base_url('uploads/' . $row['imageName']); ?>" alt="Blog Image">
                        <?php endif; ?>
                        </td>
                        <td>
                            <!-- $encryptedId = $encrypter->encrypt($row['_id']) -->
                            
                            <a href="./edit/<?= bin2hex($encrypter->encrypt($row['_id'])) ?>"><button class="edit-btn">Edit</button></a>
                            <a href="./delete/<?= bin2hex($encrypter->encrypt($row['_id'])) ?>"><button class="delete-btn">Delete</button> </a>
                        </td>
                    </tr>                    
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
