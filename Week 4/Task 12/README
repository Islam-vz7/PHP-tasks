# To-Do App

## Overview

This project is a simple **To-Do App** that allows users to manage their tasks with user authentication. Users can register, log in, and manage their to-do notes by adding, updating, viewing, and deleting tasks. The tasks are stored in a MySQL database.

## Features

- **User Authentication**:
  - Guests can register and log in to access the app.
  - Only authenticated users can view and manage their notes.

- **Notes Management**:
  - Logged-in users can add, edit, and delete notes.
  - Each note includes a title, description, creation date, and completion status (done).
  
## Pages

1. **Landing Page**:
   - Links to the login and registration pages (accessible only to guests).
   
2. **Register Page**:
   - Allows new users to create an account (accessible only to guests).

3. **Login Page**:
   - Allows existing users to log in (accessible only to guests).

4. **Home Page**:
   - Displays all to-do notes for logged-in users (accessible only to authenticated users).

5. **Add Note Page**:
   - Enables users to add a new note.

6. **Update Note Page**:
   - Allows users to update existing notes.

7. **Delete Note**:
   - Provides functionality to delete notes.

## Database Structure

The application uses a MySQL database with a table called `notes`, which contains the following fields:

| Field      | Type         | Description            |
|------------|--------------|------------------------|
| `id`       | INT          | Primary Key (Auto Increment) |
| `title`    | VARCHAR(255) | Title of the note       |
| `description` | TEXT      | Detailed description of the note |
| `date`     | DATE         | Date the note was created |
| `done`     | BOOLEAN      | Status of the note (Completed/Not Completed) |

## Getting Started

### Prerequisites
- PHP 7.x or higher
- MySQL
- Composer (for dependency management)
- Web Server (Apache or Nginx)
