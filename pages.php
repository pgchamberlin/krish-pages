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
 *  dirname(__FILE__) . '/pages/<page name>.php'
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
        <a href="/pages.php?page=home"> ++Home++ </a>
        <a href="/pages.php?page=about"> ++About++ </a>
        <a href="/pages.php?page=interests"> ++Interests++ </a>
        
        <?php /* Use PHP's include() method to render the correct page content in here */ 
//
                function about (){
                    include dirname(__FILE__) . '/pages/about.php';
                    echo"Hello! My name is Krish Oza, I am 11 years<br />
                    old and I am a young coder, I recently<br />
                    attended YRS to improve my skills and I hope<br />
                    to be a proffesional Coder one day and create<br />
                    my very own company.";
                }
//                
                function interests(){
                    include dirname(__FILE__) . '/pages/interests.php';
                    echo"";
                }
//                
                function home(){
                    include dirname(__FILE__) . '/pages/home.php';
                    echo"";
                }
//                
                $page = $_GET["page"];
                if($page == "about"){
                    about();
                }
//                
                else if($page == "interests"){
                    interests();
                }
//                
                else{
                    home();
                }
//                
        ?>
    </body>
</html>
