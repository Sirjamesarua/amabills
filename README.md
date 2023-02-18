
## AMABILLS TEST BY JAMES ARUA
 
Features (API) include:

- Authentication using passport. Expires after 24hours
- Reset forgot password 
- Register new user
- User can create product.
- List products in descending order.
- Product attributes including Name, Description, Quantity, Price and Amount_sold
- Update product by only owner.
- Delete product by only owner
- Users can view their products in descending order
- List all Users with their Products in descending order
- Pagination link with json data


## Install

Install commands:
``` 
- git clone https://github.com/Sirjamesarua/amabills.git 
- composer update
- cp .env.example .env and update the database and mailer
- php artisan key:generate
- php artisan migrate:fresh
- php artisan passport:install
- php artisan db:seed
- php artisan serve

```


## Note

- Login: 
    - URL: localhost:8000/api/login 
    - Method: POST
    - Set Headers accept => application/json
    - Insert email and password: Body tab => x-www-form-urlencode <br>
      Email => dev.sirjames@gmail.com<br>
      Password => 'Password'<br>
      <img src="https://i.ibb.co/gV1Yn9Z/1-Swagger-API-Demo.png" alt="1-Swagger-API-Demo" border="0">
    
    
- List Products
	- Copy the Token and add it in the <br> Authorization tab: Type => Bearer Token; Insert token. 
    - URL: localhost:8000/api/products 
    - Method: GET


- List User  Products
    - URL: localhost:8000/api/user 
    - Method: GET


- Log Out
    - URL: localhost:8000/api/logout 
    - Method: GET


- Register
    - URL: localhost:8000/api/register 
    - Method: POST
    - Required params: name, email, password


- Create Product
    - URL: localhost:8000/api/products 
    - Method: POST
    - Required params: name, description, price, quantity, amount_sold (optional)
    
    
- Update/Delete Product
    - URL: localhost:8000/api/products/{product_id} 
    - Method: PUT/DELETE
    - Required params: name, description, price, quantity, amount_sold (optional)
    
    
- List All Users With Their Products
    - URL: localhost:8000/api/users 
    - Method: GET


- Forget Password
    - URL: localhost:8000/api/password/forgot-password 
    - Method: POST
    - Required params: email


- Reset Password
    - URL: Copy the link sent to your email 
    - Method: POST
    - Required params: password, password_confirmation 
    
