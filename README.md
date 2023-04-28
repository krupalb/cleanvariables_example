<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h1>Simple PHP Form Example</h1>
<p>This is a simple PHP form example that demonstrates how to create a basic form using HTML and PHP, and submit the form data to a MySQL database using the <code>mysqli</code> extension.</p>

<h2>Requirements</h2>

<ul>
	<li>Docker</li>
	<li>Docker Compose</li>
</ul>

<h2>Installation</h2>

<ol>
	<li>Clone this repository to your local machine using <code>git clone https://github.com/your-username/your-repo.git</code>.</li>
	<li>Navigate to the root directory of the repository and run <code>docker-compose up -d</code> to start the containers.</li>
	<li>Open a web browser and navigate to <code>http://localhost:8089</code> to access the PHP form.</li>
</ol>

<h2>Usage</h2>

<ol>
	<li>Fill in the form fields with your name, email address, and password.</li>
	<li>Click the "Submit" button to submit the form data to the MySQL database.</li>
	<li>If the data is successfully saved to the database, you should see a message that says "Data saved to database."</li>
</ol>

<h2>Security</h2>

This application uses a custom cleanVariables() function to sanitize user input before saving it to the database. This function removes any HTML tags and quotes from the input to prevent SQL injection attacks.

<h2> License </h2>
This project is licensed under the MIT License - see the LICENSE file for details.
