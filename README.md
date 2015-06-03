# simpleMVCtemplate
A light-weight MVC template in PHP.
Features as an introduction to routing, and a prelimary for using a framework.
Code has extended documention, as well as a how-to guide on general use.

There are 3 global settings you must change, and an extra 2 lines of code.

After installing the template code in your project folder, open config.inc.php

line 15:
	
	define('BASE_URL', 'absolute/URL/to/your/project/base/url');

	The absolute URL will be something like

	http://localhost/ProjectName/public

	there must be a public appended, in order to base to your public pages

	for me it was :

	define('BASE_URL', 'http://localhost/simpleMVCtemplate/public');


line 16:

	define('BASE_URI', 'absolute/path/to/your/project/folder');

	The absolute path will be something like

	C:/xampp/htdocs/ProjectName

	or 

	C:/www/ProjectName

	or 

	/var/www/ProjectName

	The location should be the root to the location of the projectdirectory that is in your www folder

	for me it was :

	define('BASE_URI', 'C:/xampp/htdocs/simpleMVCtemplate');


line 24

	change the value of this to the same value as the one for line 16 from above.

	for me it was :

	$_SERVER['FILE_ROOT'] = 'C:/xampp/htdocs/simpleMVCtemplate';

in public/index.php

line 6:
	
	you need to change the value to absolute location of projet directory/config.inc.php

in public/.htaccess

line 4 :

	using / will root to the server root (see your DOCUMENT_ROOT in appache config)

	so, to make this work:

	/path/to/public

	with publlic explicit as the final direcctory

	for example, my file apache ahs document_root = C:/xampp/htdocs

	my project folder is simpleMVCtemplate,

	so my line 4 is :

	RewriteBase /simpleMVCtemplate/public

And that is it, with these changes, nmaking sure they go to the right lcocations... it should work, nav to http://localhost/path to project/public/home to see the home page