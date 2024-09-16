<?php
require 'notes-back.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
    <style>
    .container {
        max-width: 1200px;
        margin: 100px auto;
        padding: 20px;
        background-color: #e0e5ec;
        border-radius: 20px;
        box-shadow: 9px 9px 16px #a3b1c6, -9px -9px 16px #ffffff;
    }

    h2 {
        text-align: center;
        font-size: 1.5em;
        color: #333;
    }

    .notes-list {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        list-style: none;
        padding: 0;
        justify-content: center; 
    }

    .note-item {
        flex: 1 1 calc(33.333% - 20px); 
        box-sizing: border-box;
        padding: 20px;
        background-color: #f1f3f6;
        border-radius: 15px;
        box-shadow: 4px 4px 8px #cbd1d8, -4px -4px 8px #ffffff;
        max-width: 350px; 
    }

    .note-title.done {
        text-decoration: line-through;
        color: #999;
    }

    .note-description.done {
        text-decoration: line-through;
        color: #999;
    }

    .note-date.done {
        text-decoration: line-through;
        color: #999;
    }

    .note-title {
        font-weight: bold;
        font-size: 1.2em;
        margin-bottom: 10px;
    }

    .note-date {
        font-size: 0.8em;
        color: #888;
    }

    .actions {
        margin-top: 10px;
        display: flex;
        justify-content: space-between;
    }

    .btn {
        padding: 10px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 5px;
        box-shadow: 4px 4px 8px #a1b0c1, -4px -4px 8px #ffffff;
        cursor: pointer;
    }

    .btn-delete {
        background-color: #e74c3c;
    }

    .btn-add-note {
        display: inline-block;
        margin-top: 20px;
        padding: 15px 30px;
        background-color: #27ae60;
        color: white;
        border-radius: 10px;
        box-shadow: 6px 6px 12px #b0bec5, -6px -6px 12px #ffffff;
        text-align: center;
        text-decoration: none;
        font-size: 1.1em;
    }

    /* Home Icon */
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
        <a href="index.php"><img src="/assets/home.png" alt="Home"></a>
    </div>

    <div class="container">
        <?php if (isset($showLoginAndRegister)): ?>
            <h2>Please log in to view your notes</h2>
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn">Register</a>
        <?php else: ?>
            <h2>Your To-Do Notes</h2>

            <?php if (empty($notes)): ?>
                <p>No notes found. <a href="add-notes.php" class="btn-add-note">Add a new note</a></p>
            <?php else: ?>
                <ul class="notes-list">
                    <?php foreach ($notes as $note): ?>
                        <li class="note-item">
                            <div class="note-title <?php echo $note['done'] ? 'done' : ''; ?>"><?php echo htmlspecialchars($note['title']); ?></div>
                            <div class="note-date <?php echo $note['done'] ? 'done' : ''; ?>"><?php echo $note['date']; ?></div>
                            <div class="note-description <?php echo $note['done'] ? 'done' : ''; ?>"><?php echo htmlspecialchars($note['description']); ?></div>

                            <div class="actions">
                                <a href="add-notes.php?id=<?php echo $note['id']; ?>" class="btn">Edit</a>
                                <form action="delete-note.php" method="POST" style="display:inline;">
                                    <input type="hidden" name="id" value="<?php echo $note['id']; ?>">
                                    <button type="submit" class="btn btn-delete">Delete</button>
                                </form>
                            </div>

                            <form action="update-note.php" method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo $note['id']; ?>">
                                <label class="done">
                                    <input type="checkbox" name="done" <?php echo $note['done'] ? 'checked' : ''; ?>> Mark as Done
                                </label>
                                <button type="submit" class="btn">Update</button>
                            </form>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <a href="add-notes.php" class="btn-add-note">Add a new note</a>
            <?php endif; ?>
        <?php endif; ?>
    </div>

</body>
</html>
