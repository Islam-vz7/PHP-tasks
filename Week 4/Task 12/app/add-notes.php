<?php
require 'add-notes-back.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding a New Note</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .add-note-container {
            max-width: 600px;
            margin: 100px auto;
            padding: 30px;
            background-color: #e0e5ec;
            border-radius: 15px;
            box-shadow: 9px 9px 16px #a3b1c6, -9px -9px 16px #ffffff;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            background-color: #f1f3f6;
            box-shadow: inset 4px 4px 8px #cbd1d8, inset -4px -4px 8px #ffffff;
        }

        input[type="checkbox"] {
            margin: 10px 0;
        }

        .btn-submit {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 4px 4px 8px #cbd1d8, -4px -4px 8px #ffffff;
            text-align: center;
        }

        .home-icon {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .home-icon img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>

    <div class="home-icon">
        <a href="home.php"><img src="/assets/home.png" alt="Home"></a>
    </div>

    <div class="add-note-container">
        <h2><?php echo isset($_GET['id']) ? 'Edit Note' : 'Add a New Note'; ?></h2>

        <?php if ($error): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>

        <form action="add-notes.php" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($note['id'] ?? ''); ?>">
            <input type="text" name="title" value="<?php echo htmlspecialchars($note['title']); ?>" placeholder="Title" required>
            <textarea name="description" placeholder="Description"><?php echo htmlspecialchars($note['description']); ?></textarea>
            <label>
                <input type="checkbox" name="done" <?php echo $note['done'] ? 'checked' : ''; ?>> Mark as Done
            </label>
            <button type="submit" class="btn-submit"><?php echo isset($_GET['id']) ? 'Update Note' : 'Add Note'; ?></button>
        </form>
    </div>

</body>
</html>
