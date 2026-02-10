# PKM-Psi: Online Quiz System

A simple PHP-based online quiz platform for educational purposes. Features user authentication, timed quizzes, and admin setup.

## Features
- **User Authentication**: Secure login/logout system.
- **Session Management**: Tracks user progress and quiz attempts.
- **Responsive Design**: Built with Bootstrap 5 for mobile-friendly interfaces.
- **Admin Setup**: Configure quizzes and manage users via `setup_admin.php`.
- **Quiz Submission**: Handles quiz answers and scoring.

## Files
| File                | Description                                  |
|---------------------|----------------------------------------------|
| `index.php`         | Dashboard (post-login).                      |
| `login.php`         | User login page.                             |
| `logout.php`        | Ends user sessions.                          |
| `quiz.php`          | Quiz interface and logic.                    |
| `setup_admin.php`   | Admin configuration (users, quizzes, etc.). |
| `submit_quiz.php`   | Processes quiz submissions.                  |

## Requirements
- PHP 7.4+ (with session support)
- Web server (Apache/Nginx)
- MySQL (for user/quiz data, if applicable)

## Setup
1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/PKM-Psi.git
   ```
2. Place the files in your web server directory (e.g., `htdocs` or `/var/www/html`).
3. Configure the database (if needed) and update connection details in `setup_admin.php`.
4. Access the system via `http://yourserver/PKM-Psi/login.php`.

## Usage
- **Students**: Log in to take quizzes.
- **Admins**: Use `setup_admin.php` to manage users and quizzes.

## License
MIT License. See [LICENSE](LICENSE) for details.