# Feedback Form Project

This project is a simple feedback form built with PHP, HTML, CSS, and JavaScript. It allows users to submit feedback, which is then stored in a MySQL database. The project includes features for form validation, data submission, data display, and pagination.

## Features

- **Form Validation**: JavaScript validation for Name, Email, Feedback, and Rating fields before form submission.
- **Data Storage**: Saves user feedback in a MySQL database.
- **Data Display**: Displays feedback records in a paginated HTML table for easy navigation.
- **Error Handling**: Handles errors for database connection issues or data insertion failures.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

## Project Structure

```plaintext
.
├── feedback_form.php        # HTML form for capturing user feedback
├── submit_feedback.php      # PHP script to process and store feedback in the database
├── view_feedback.php        # PHP script to display feedback records in a table with pagination
├── validate.js              # JavaScript for client-side form validation
├── style.css                # CSS for styling the feedback form
├── table_style.css          # CSS for styling the feedback table
└── README.md                # Project documentation
