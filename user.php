<?php 
session_start();
  $_SESSION['comptes'];
 

?>

<!DOCTYPE html>
<!-- Template by html.am -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>2 Column Layout &mdash; Left Menu with Header &amp; Footer</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            font-family: Sans-Serif;
            line-height: 1.5em;
        }
        
        #header {
            background:<?php echo $_SESSION["color"];?>;
            
            height: 100px;
            
        }
        
        #header h1 {
            margin: 0;
            padding-top: 15px;
        }
        
        main {
            padding-bottom: 10010px;
            margin-bottom: -10000px;
            float: left;
            width: 100%;
        }
        
        #nav {
            padding-bottom: 10010px;
            margin-bottom: -10000px;
            float: left;
            width: 230px;
            margin-left: -100%;
            background:<?php echo $_SESSION['nav'];?>;
            
        }
        
        #footer {
            clear: left;
            width: 100%;
            background: #ccc;
            text-align: center;
            padding: 4px 0;
        }
        
        #wrapper {
            overflow: hidden;
        }
        
        #content {
            margin-left: 230px;
            /* Same as 'nav' width */
        }
        
        .innertube {
            margin: 15px;
            /* Padding for content */
            margin-top: 0;
        }
        
        p {
            color: #555;
        }
        
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        
        nav ul a {
            color: darkgreen;
            text-decoration: none;
        }
    </style>

    <script type="text/javascript">
        /* =============================
                                                                                                                                                                                                                                                                                                                                                             This script generates sample text for the body content. 
                                                                                                                                                                                                                                                                                                                                                             You can remove this script and any reference to it. 
                                                                                                                                                                                                                                                                                                                                                              ============================= */
        var bodyText = ["The smaller your reality, the more convinced you are that you know everything.", "If the facts don't fit the theory, change the facts.", "The past has no power over the present moment.", "This, too, will pass.", "</p><p>You will not be punished for your anger, you will be punished by your anger.", "Peace comes from within. Do not seek it without.", "<h3>Heading</h3><p>The most important moment of your life is now. The most important person in your life is the one you are with now, and the most important activity in your life is the one you are involved with now."]

        function generateText(sentenceCount) {
            for (var i = 0; i < sentenceCount; i++)
                document.write(bodyText[Math.floor(Math.random() * 7)] + " ")
        }
    </script>



    <script>
        window.google_analytics_uacct = "UA-269964-15"
    </script>



    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-269964-15', 'html.am');
        ga('send', 'pageview');
    </script>

</head>

<body>
    <header id="header">
        <div class="innertube">
            <h1>
                <?php
                 echo $_SESSION["login"];
                ?>
            </h1>
        </div>
    </header>

    <div id="wrapper">

        <main>
            <div id="content">
                <div class="innertube">
                    <h1>Heading</h1>
                    <h3><a style='background:#eee;border:1px solid #ccc;font-size:120%;text-decoration:none;color:black;padding:3px;' href='//www.html.am/templates/downloads/view-source.cfm?template=layout-templates/2-column-left-menu-header-footer.cfm' target='_blank'>View Template Source Code</a></h3>&nbsp;
                    <script>
                        generateText(20)
                    </script>
                    </p>
                </div>
            </div>
        </main>

        <nav id="nav">
            <div class="innertube">
                <h3>Left heading</h3>
                <ul>

                     <?php 
                     
                     if($_SESSION['comptes'] == "admin"){

                       echo " <li><a href='#'>liste des comptes</a></li>";

                       echo "<li><a href='#'>ajouter un compte</a></li>";

                         echo "<li><a href='#'>listes des activités</a></li>";

                         echo"<li><a href='#'>ajouter une activité</a></li>";

                         
                        } else {
                            
                            echo " <li><a href='#'>liste des comptes</a></li>";
                        }

                        echo "<li><a href='http://localhost/intra-amt/logout.php'>deconexion</a></li>";
                     
                     ?>

        



                </ul>
            </div>
        </nav>

    </div>

    <footer id="footer">
        <div class="innertube">
            <p>Footer...</p>
        </div>
    </footer>

</body>

</html>