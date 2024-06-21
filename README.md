README for Laravel Project
Project Overview
This project implements a contact form using Laravel, allowing users to submit their name, email, 
and comments. The form data is validated and stored in a MySQL database. 

This README provides an overview of the project structure, technical details, setup instructions, 
additional features, and testing procedures.

Technical Details

Project Structure:
	Controllers: The project includes a ContactController responsible for handling form submissions and validation.
	Routes: Routes are defined in routes/web.php, including a POST route to handle form submissions.
	Views: The main form is located in resources/views/contact.blade.php.
	Database Interaction: The form interacts with the contacts table in the MySQL database.
	
Validation Rules:
	The form fields (name, email, comments) are validated for required fields and correct email 
	format using Laravel's validation rules.
	Running the Code
To run this project locally:

Clone Repository:
	
	git clone https://github.com/325iiiSGuSH/synergicode-app.git
	cd synergicode-app

Install Dependencies:
	
	composer install

Setup Environment Variables:

	Copy .env.example to .env and configure your database connection:
	cp .env.example .env
	
Update .env with your database credentials:
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=synergicode_database
	DB_USERNAME=root
	DB_PASSWORD=
	
Run Migrations:

	php artisan migrate

Start Laravel Development Server:
	
	php artisan serve

Access the Application:
Open your browser and navigate to http://localhost:8000. or http://127.0.0.1:8000/contact

Additional Features
	Styling: Implemented a responsive design using Tailwind CSS with a blue gradient color scheme for the form.
	Flash Messages: Display success messages upon successful form submission using Laravel's session flash messages.
	
Testing
	PHPUnit: Automated tests are included to verify the functionality of the ContactController.
	Running Tests:
	
	php artisan test
	
	PS C:\xampp\htdocs\synergicode-app> php artisan test

   PASS  Tests\Unit\ExampleTest
  ✓ that true is true                                                                                                                                         0.30s  

   PASS  Tests\Feature\ExampleTest
  ✓ the application returns a successful response                                                                                                             2.65s  

  Tests:    2 passed (2 assertions)
  Duration: 5.68s
