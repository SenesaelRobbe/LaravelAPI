# Laravel API
## Current Status of the Project
The project is mainly finished, i've added a put and delete however these aren't were not tested yet. I've added a few extras like a Database Seeder, a few headers, all CRUD operations.
## Database Seeder
I added a Database Seeder to fill the database so I wouldn't have to manually add entries to the database.

## API
All basic CRUD operations were implemented, they can be found under /api/articles(/{article}) /{article} depending on the method you are using (GET, PUT & DELETE). The application mainly uses HTTP server codes to verify if something works or not. On the routes where /{article} is used I made sure it searches on the articles instead of on ID.
## MiddleWare
The class News.php is the class whch holds the middleware for the project. Currently only the headers are implemented, following headers were implemented.

 - X-Frame-Options: 'Deny'
 - X-XSS-Protections: '1, mode=block'
 - Strict-Transport-Security
 - Content-type: 'application/json'
 - Content-Security-Policy: 'default src "self"'
 - X-Content-Type-Options: 'nosniff'
 
I also tried to add a line which would only allow Ajax calls to the routes however this failed and I didn't manage to find out (yet) to which reason this failed. 
