# SQL-Query-Builder

## Overview

The SQL Query Builder is a web application designed to simplify the creation of SQL SELECT queries without requiring in-depth technical skills. The main aim of the project is to democratize access to databases by simplifying the creation of SELECT queries and offering a user-friendly tool.

## Features

- Connect to a specific database.
- Select tables to query.
- Choose columns to display in the results.
- Apply various types of joins (INNER, LEFT, RIGHT) between tables to enrich data.
- Add filtering conditions using WHERE clauses.
- Organize results using ORDER BY criteria.
- Generate the SQL query and visualize results in a well-organized HTML table with pagination for easier data reading.

## Getting Started

You can choose the database you want to work on, but please ensure that it includes a table named `users`. You will find the code to import this table in the file `users.sql`.

To change the database configuration, modify the settings in `applications/config/database.php`. Additionally, check the `application/config/config.php` file to set the correct `base_url` (the URL where your application is accessible). For example, you will find this line that sets the base_url.
```php
$config['base_url'] = 'http://127.0.0.1/SQLQueryBuilder/';
```
 You should modify `SQLQueryBuilder` by the path to your application directory on the server.

## Technologies Used

- **HTML** and **Bootstrap** for the user interface.
- **JavaScript** and **jQuery** for interactivity.
- **CodeIgniter 3** as the PHP framework.
