#######################
CODEIGNITER BASIC SETUP
#######################

This setup contains the base CodeIgniter setup (minus the user guide). It contains user creation,
basic authentication, sessions, password hashing and verification, endpoints generating endpoints, and sample login/user views.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It SHOULD work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

1.) Setup a database

2.) Create a table in the database named "User" with the following fields

 ("id", varchar(255), PK)
 ("email", varchar(255))
 ("hash", varchar(255))
 ("firstName", varchar(255))
 ("lastName", varchar(255))
 ("role", varchar(255))
 ("status", varchar(255))
 ("dateTimeCreated", timestamp)

3.) Configure the database file by going to /application/config/database.php

4.) Adjust config by going to /application/config/config.php

5.) Your site should now be installed.

*****
Usage
*****

Visit <domain>/accounts/register to create a user.
Visit <domain>/accounts/login to login and access user page.
Visit <domain>/users to view users

GET requests to <domain>/users/all returns JSON containing all users


