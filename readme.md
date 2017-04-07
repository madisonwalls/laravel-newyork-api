## New York Night Life API

An API that lets users explore all of the different night life options New York City has to offer. It includes musicals, restaurants, and bars. Use the API to list, create, edit, or delete different options within each of these categories. Results are printed in JSON format and provide detailed information about each entry, such as addresses, hours of operations, and ratings.

Using Laravel as a framework, I created this application using PHP and users can access the required database through AJAX requests.

##Documentation

https://madisonwalls.gitbooks.io/new-york-night-life-api/content/

##Required Programs

IMPORTANT: this application works using Chrome

- Terminal
- Composer https://getcomposer.org/download/
- MAMP https://www.mamp.info/
- Advanced REST Client https://chrome.google.com/webstore/detail/advanced-rest-client/hgmloofddffdnphfgcellkdfbfbjeloo?hl=en-US

##How to Access the API

1. Clone this repository
2. Using MAMP, change the 'Web Server' option under 'Preferences' to the public folder of 'laravel-newyork-api-master'.
3. Change the port 8888
4. Start the Server
5. Open the WebStart page and navigate to http://localhost:8888/phpMyAdmin
6. Create a new database called 'api'
7. Using terminal, cd into the location of the downloaded repository
8. Run: php artisan migrate
9. Open Advanced REST client and enter http://localhost:8888 to connect
10. Using the routes provided in the documentation, Create, Update, List, or Delete.
