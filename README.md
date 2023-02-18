
## AMABILLS TEST BY JAMES ARUA
 
Features (API) include:

- Authentication using passport
- Forgot password reset 
- Logout to remove old tokens 
- User can create product.
- List products in descending order.
- Product attributes including Name, Description, Quantity, Price and Amount_sold
- Update product by the owner.
- Delete product by tge owner
- Users can view their product in descending order
- Pagination link with json data


## Install

Install commands:
``` 
- git clone https://github.com/Sirjamesarua/amabills.git 
- composer update
- cp .env.example .env and update the database and mailer
- php artisan key:generate
- composer require laravel/passport
- php artisan passport:install
- php artisan migrate:fresh --seed
- php artisan serve

```

Use Postman to test the API.


## Note

- Login: 
    - URL: http://laravel-8-api-crud.rob/api/login 
    - Method: POST
    - Insert email and password: Body tab => x-www-form-urlencode
    - Press Enter to get Bearer token;
    - For future request add this token: 
      <br>Authorization tab: Type => Bearer Token; Insert token.
    
- Insert/Update:
    - Use Body tab => x-www-form-urlencode : Add title key and its value
    - Another way: Body tab => raw : select json type 
- Demo User (database/seeders/DatabaseSeeder.php): 
<br> ```admin@admin.com/password```


## License

The Laravel 8 Crud is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Contact

Feel free to contact:  
<a href="https://www.nazmulrobin.com/">nazmulrobin.com</a> | <a href="https://twitter.com/nhr_rob">Twitter</a> | <a href="https://www.linkedin.com/in/nhrrob/">Linkedin</a> | <a href="mailto:robin.sust08@gmail.com">Email</a>