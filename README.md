# Learn-to-send-data-from-a-form-to-MySQL-using-PDO-

This is for coding L-platers.  It's a very basic example using the W3 Schools input types, with PHP script to send the data to a MySQL databse using PDO.  The CSS is very basic, and you should pimp it to suit your style.

I've enclosed a .sql script to make the basic table.  Add, edit or delete fields to suit. 

Any form field will need to be changed in three different places:
1. the database
2. the php script
3. the form
So, if you want to delete the bday field, you will need to remove it from these three different places in your code.

If you want to see what your form is posting, uncheck the var_dump($_POST) at the start of the php script.

It uses JQuery to perform a Captcha. Unfortunately, I don't know who the original author was, but I'd like to thank them for sharing.

There's heaps of great form validation </a>information on Mozilla's developer site, as well as here on Github!  <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5/Constraint_validation">
