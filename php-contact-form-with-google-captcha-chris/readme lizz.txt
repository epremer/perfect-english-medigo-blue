First you'll wanna go to constant.php and change the keys.
You can obtain them at http://www.google.com/recaptcha/admin

I left my keys there but you can't really do anything with em.

Then at line 49 of the contact.php is the email that will be getting the contact form emails. Change that as well.

As for the index.php, you'll wanna chop it up for your site. The important parts of the scripts <script> lines and chunks (line 10 to 44), the require constant.php at the header before the doctype, and then the style and div in the body part. 
They should be able to be dropped anywhere and styled to your liking on your site.

