<!DOCTYPE html>
<html lang="en" dir="ltr" class="no-js">
    <head>
        
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script type="text/javascript" src="js/eCSSential.min.js"></script>

        <script type="text/javascript">
            eCSSential({
              "all": "css/reset.css",
              "(min-width: 1px)": "css/main.css",
              "IE6 IE7 IE8": "css/main.css"
          });
        </script>
        <!-- for non-JS users, load the first few breakpoints for a fallback layout -->
        <noscript>
            <link rel="stylesheet" type="text/css" href="css/reset.css">

            <link rel="stylesheet" type="text/css" href="css/main.css">

            <!-- <link rel="stylesheet" type="text/css" href="css/main_500.css" media="(min-width: 500px)"> -->
        </noscript>
        
        <title></title>
        
        <!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->
        
        <!-- <script src="js/modernizr.custom.07758.js" type="text/javascript"></script> -->

        <script src="js/html5shiv-printshiv.js" type="text/javascript"></script>
    
    </head>
    <body>
        <div id="shadow">
            <div class="wrapper">
                <div class="headerWrapper">
                    <header>
                        <h1><a href="<?php echo($siteUrl); ?>"><?php echo($siteName) ?></a></h1>
                        <nav>
                            <h2 class="outline">Main Navigation</h2>
                            <a href="<?php echo($siteUrl); ?>"<?php if ($navColor=="home") echo ' class="current"';?>>Home</a>
                            <a href="<?php echo($siteUrl); ?>about"<?php if ($navColor=="about") echo ' class="current"';?>>About</a>
                            <a href="<?php echo($siteUrl); ?>services"<?php if ($navColor=="services") echo ' class="current"';?>>Services</a>
                            <a href="<?php echo($siteUrl); ?>contact"<?php if ($navColor=="contact") echo ' class="current"';?>>Contact</a>
                        </nav>
                    </header>
                </div><!-- end div class headerWrapper -->
                    <div class="mainContent">
                        <section>
                            
                        </section>
                    </div><!-- end div class mainContent -->
                <footer>
                    <p>Copyright &copy; <?php
                        if (date("Y")!=2013) echo "2013-";
                        date_default_timezone_set('America/Detroit');
                        echo date("Y");
                        echo(" ");
                    ?>Matt Hendricks<br>
                    Website by <a href="http://www.hendrickswebdevelopment.com/" target="_blank">Hendricks Web Development</a><br>
                    Also check out <a href="http://mattdhendricks.com/" target="_blank">MattDHendricks.com</a></p>
                </footer>
            </div><!-- end div id wrapper -->
        </div><!-- end div id shadow -->
    </body>
</html>