====================================================
  Ronno Titus — Personal Portfolio Website
  Built with pure PHP, CSS & JavaScript
====================================================

REQUIREMENTS
------------
- WampServer 3.x (or any Apache + PHP 7.4+ environment)
- PHP 7.4 or higher (PHP 8.x recommended)
- No database required — this is a static PHP site


HOW TO RUN LOCALLY WITH WAMPSERVER
------------------------------------

1. Make sure WampServer is installed and running.
   (The system tray icon should be GREEN.)

2. Open your WampServer www directory.
   Default location: C:\wamp64\www\

3. Copy the entire "ronnotitus-portfolio" folder into:
   C:\wamp64\www\ronnotitus-portfolio\

4. Open your browser and visit:
   http://localhost/ronnotitus-portfolio/

   That's it — the site should load immediately!


FILE STRUCTURE
--------------
ronnotitus-portfolio/
├── index.php              ← Main page (start here)
├── css/
│   └── style.css          ← All styles
├── js/
│   └── main.js            ← Animations & contact form JS
├── includes/
│   ├── config.php         ← YOUR DATA (edit this file!)
│   ├── header.php         ← HTML <head> section
│   ├── footer.php         ← Footer + closing tags
│   └── nav.php            ← Navigation bar
├── handler/
│   └── contact.php        ← Contact form processor (PHP)
└── README.txt             ← This file


HOW TO CUSTOMISE
-----------------
All your personal data lives in ONE file:

  includes/config.php

Open it and you can change:
  - Your name, email, site title
  - Skills and proficiency levels
  - Projects (title, description, tags, links)
  - Work / academic experience
  - Education details

You do NOT need to touch index.php for content changes.


CONTACT FORM
------------
The contact form uses PHP's mail() function.
On a local WampServer it will NOT send real emails
(WampServer does not have a mail server by default).

To enable real email sending locally, you can:
  1. Use a fake SMTP tool like Mailtrap or MailHog, OR
  2. Configure sendmail in php.ini, OR
  3. Upload the site to a live web host (cPanel/Hostinger etc.)
     where PHP mail() works out of the box.

The form will still show a success message locally
because the code gracefully handles the mail() return value.


GOING LIVE (Optional)
----------------------
To host this online (e.g. on Hostinger, InfinityFree, etc.):
  1. Upload the contents of this folder to your public_html/
  2. Visit your domain — it will work immediately.
  3. Update CONTACT_EMAIL in includes/config.php with your
     real email address so you receive form submissions.


====================================================
  Good luck, Ronno! — Built on with PHP 8.4
====================================================
