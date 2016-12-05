# simplified-PHP-framework
mimic major php  framework

Show the concept of routing and controller define similiar to Laravel.

Requirements:

PHP 5.5.9 or higher
MySQL - Optional

File Structure
index.php - start

--Controller|--controllers.php (register controller based on URI,,similiar to Laravel)
            |
            |--DefaultController.php (this is just example to show how to determine contoller class.
            |
--Core      |--App.php (Load confiure data from config.php)
            |
            |--bootstrap.php (run App class to set up global configure file)
            |
            |--config.php (global parameter)
            |
            |Router.php (determine which controller need to run per URI)
