<?php

/**
 * This file should support the following requests:
 *
 *  /pages.php?page=home
 *  /pages.php?page=about
 *  /pages.php?page=interests
 *
 * You should use the $_GET variables to determine what page the user has asked for.
 *
 * Once you know what page the user wants then you can work out where that content is stored. You need to put the
 * relative file path into a variable so you can include the contents in the document below.
 *
 * A path to a file in the "pages" directory will have a path like:
 *
 *  dirname(__DIR__) . '/pages/<page name>.php'
 *
 * Where <page name> is the name of the file you want to include.
 *
 * In addition to including page content from the external files, you should also:
 *
 *  - Give the HTML below a <h1> heading which will be the name of the site
 *  - Give the HTML below some navigation links to the available pages
 *
 * The header and navigation should be the same whatever page the user requests.
 */

?>
<!doctype html>
<html>
    <head>
    </head>
    <body>
        <?php /* Use PHP's include() method to render the correct page content in here */ ?>
    </body>
</html>
