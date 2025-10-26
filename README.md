🧭 Robisearch Technologies Website
🌐 Overview

Robisearch Technologies Website is a modern, responsive web platform developed using PHP, MySQL, Bootstrap, and HTML.
It serves as a company profile and product showcase site for Robisearch Technologies, highlighting its software solutions and services.

🚀 Features

🏠 Home Page – Displays featured solutions using elegant Bootstrap cards and hover effects.

📞 Contact Page – Visitors can send messages directly via a contact form (stored in the database).

🧾 Products Page – Add, view, update, and delete products dynamically with auto-reordering IDs.

🎨 Responsive Design – Built with Bootstrap 5 for seamless viewing on any device.

🧭 Navigation Bar – Clean and modern navbar linking to all major pages.

🖥️ Technologies Used
Technology	Purpose
PHP	Backend scripting
MySQL	Database management
Bootstrap 5	Frontend design & layout
HTML5 / CSS3	Structure and styling
XAMPP	Local development environment
⚙️ Installation & Setup

Clone or download this repository:

git clone https://github.com/keshy-byte/robisearch_website.git


Move the project into your XAMPP htdocs directory:

C:\xampp\htdocs\robisearch_crud


Create a database in phpMyAdmin named:

robisearch_db


Import your SQL file (if provided) — e.g. robisearch_db.sql.

Update your db_connect.php file with your database credentials:

$conn = new mysqli("localhost", "root", "", "robisearch_db");


Open your browser and go to:

http://localhost/robisearch_crud

🧩 Project Structure
robisearch_crud/
│
├── includes/
│   ├── navbar.php
│
├── images/
│   ├── p1.jpg
│   ├── p3.jpg
│   ├── p5.jpeg
│   └── logo.png
│
├── db_connect.php
├── index.php
├── contact.php
├── products.php
└── README.md

💬 Contact

📧 info@robisearch.co.ke

📞 +254 700 123 456 / +254 713 456 789

🏷️ Author

Developed by: Keshy-byte (Mary Kimaru)