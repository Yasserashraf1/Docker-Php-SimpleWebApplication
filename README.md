#Docker-php-SimpleWebApplication
This is a simple way to create a web application using Docker Compose to create the containers and Dockerfile to build your application image.

You can run this application using the command <docker-compose up> on your terminal (I'm using VSC terminal).

If you encounter the error:
"Fatal error: Uncaught Error: Call to undefined function mysqli_connect() in /var/www/html/index.php:3 Stack trace: #0 {main} thrown in /var/www/html/index.php on line 3"

Open the interactive terminal with your Docker container that's running the www service and run the command <docker-php-ext-install mysqli> && docker-php-ext-enable mysqli. Don't forget to restart your container.

This project is for the cloud course in the Faculty of Data Science and Computing at Alexandria University.

Supervisors: Dr. Amira Alshazly, Eng. Sara Ali.



