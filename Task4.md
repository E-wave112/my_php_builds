Cookie variables are the key values in a cookie like dictionary that acts as placeholder for our cookie data.
And as we are all know cookies are client-side key-value stores for storing certain sensitive data generated from the server and being passed to the client (browser) for some extra validation and confirmation of
some working functionalities


Session Variables are values used to store session data while a user is on a particular website

And as we all know, session are server-side storage units for storing sensitive user data.


The difference between cookie and session storage is that the data in sessions storage expires the moment a user closes the browser or the tab of 
the website the user was previously browsing while the data in cookie storage can be configured to still be available even after the user have closed the tab of 
the website or browser. The default duration for storing user data in cookie storage is two weeks.

Data stored in sessions are also considered to be more secure as your application controls it while cookies containing sensitive data would have to be validated 
thoroughly on the server in order to prevent the application or user data from being compromised.


Data that can be stored in sessions or in cookies are :

Authentication tokens for validating users logging in and out of the site.

Storing carts of items a user wants to purchase online(in ecommerce applications)


API tokens for giving certain privileges to users (Authenticated and Non-Authenticated) while within a website
