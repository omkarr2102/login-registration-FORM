# login-registration-FORM
## login/registration forms for Web Applications using PHP script and validation for the same.

PHP scripts:
A PHP script is executed on the server, and the plain HTML result is sent back to the browser.
A PHP script can be placed anywhere in the document.
A PHP file normally contains HTML tags, and some PHP scripting code.

#### LOGIN AND REGISTRATION FORM USING PHP & MySQL:

The first thing we'll need to do is set up our database.
Create a database called registration. In the registration database, add a table called users. The users table will take the following four fields.

•	Id – int(11)

•	firstname  -  varchar(255)

•	lastname – varchar(255)

•	email  -  varchar(255)

•	password  -  varchar(200)



You can create this using a MySQL client PHPMyAdmin like this...

 ![image](https://user-images.githubusercontent.com/89801404/134344262-42e63ee6-0dd0-40a5-b4ab-d89b583b9aa0.png)

Or you can create it on the MySQL prompt using the following SQL script:

CREATE database Registrationdb;
Use Registrationdb;
CREATE TABLE `tbluser`(
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Firstname` varchar(100) NOT NULL,
 `Lastname` varchar(100) NOT NULL,
 `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



create a file/folder for this (say "phpFORM") in a directory accessible to our server. i.e create the folder inside htdocs (if you are using XAMPP server) or inside www (if you are using wampp server) and paste the files from this repo in your file/folder. And start your localhost (127.0.0.1/phpFORM)


The O/P should look like this-

![image](https://user-images.githubusercontent.com/89801404/134345707-fe93ee9c-69ad-4d9c-8d4d-563f58e07a39.png)

![image](https://user-images.githubusercontent.com/89801404/134345792-aea2b627-bbf6-430c-90ec-a686ecb32506.png)


Validation (if there is any invalid credentials):

![image](https://user-images.githubusercontent.com/89801404/134346030-5891228f-4671-4798-bb85-b5effb897ee0.png)

![image](https://user-images.githubusercontent.com/89801404/134346149-445a7e49-3acc-4b93-aa9a-d9a07ca2a2e8.png)



____________________________________________________________ THANK YOU __________________________________________________________________
