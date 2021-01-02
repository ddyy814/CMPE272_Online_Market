# CMPE272_Online_Market
Individual project - HTML, CSS, JavaScript, PHP, and MySQL

#### 1. Hosting/Web Programming Environment Setup
> company link: http://dzaivc.com

#### 2. First Web Application
> •	Create / Makeup a company name  
•	Create a company web site  
•	The web site must contain the following sections:  
>> o	Home (the main page)  
o	About (Description about the company)  
o	Products/Services (The products/services that you are going to sell)  
o	News (Latest news about the company, products, etc.)  
o	Contacts (Company contacts)  (stored in text file(s) and use php to read into the web site.)  

The app will read from contacts.txt into the website.

#### 3. Secure Section Creation
> •	Add a secure section in the web site.  
•	The secure section holds a document listing the current users of your web site.  
•	The secure section requires login by an administrator.  
>> o	Use the userid and password authentication method to implement the login process.  

In contact page, there is a SECURE SECTION, click "log in to have a look!" to log in.  
The app will authenticate userid and password by comparing user input with password.txt.  
userid and password examples:  
> admin,admin123  
user,user123  
dog,bone  
cat,fish  
rabbit,carrot  
tiger,meat

#### 4. User Creation and Searching with Database
> •	Create a mySQL database.  
•	Create a user table that contains at least first name, last name, email, home address, home phone and cell phone.  
•	Create a User section/tab in web site.  
•	The User section should link to two forms:  
     o	User creation form with all the fields above.  
     o	User search form allowing search by names, email or phone numbers.  
•	Create at least 20 users for your company.  

In User page, there are two forms to be submitted. You could create a new user, and perform search action.  
When you did not complete all tables(firstname/lastname/email/homeaddress/homephone/cellphone), you will fail to create a new user.  
When you successfully created a new user, you'll find seach results increase by 1.

#### 5. Tracking with Web Cookies
> •	Modify the Products/Services section and add ten products/services in your company web site.  
•	Each product/service should have their own page with descriptions and pictures.  
•	Use web cookies technologies (as described in the class) to track the last five previously visited products.  
•	Add a link in the Products/Services section to show the last five previously visited products.  
•	Extra: use web cookies to keep track of the five most visited products.  

In the Products page, click on 10 different products to visit their own pages.  
Click on "Click here to see your last five previously visited products!" to view last 5 previously visited products(latest is on the top)  
Click on "Click here to show your five most visited products!" to view 5 most visited products(most visited is on the top)  
<strong>NOTE: COOKIE expire time is 5 MINUTES!!!!!! </strong>  


#### 6. Combined list of users  
Use CURL to implement the following:  
> •	For each company web site, create a php web app/link that shows a list of users from your own company.  
•	Assume we have a group of 3 (Company A, Company B and Company C). Thus, we have  
>>o	list_of_users_A that is stored in a database A in Company A host system  
o	list_of_users_B that is stored in a database B in Company B host system  
o	list_of_users_C that is stored in a database C in Company C host system  
o	Each company web site needs to create a web link that shows list_of_users from all companies. You can access your local list_of_user via normal php database call, but you need to access remote company's database via CURL calls.  

In the User Page--LIST OF USERS, click on two links to see users in our company and users of another company.
