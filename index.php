<?php
$page = $_GET['load'];
?>
<DOCTYPE html>
    <html>

    <head>
        <title>Shawarma ni Kulas</title>
    </head>

    <body onload="startTime()">

        <div class="header">
            <div id="navigation">
                <ul>

                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?load=page2">Menu</a></li>
                    <li><a href="index.php?load=page3">New Dishes</a></li>
                    <li><a href="index.php?load=page4">Branches</a></li>
                    <li><a href="index.php?load=page5">Contact</a></li>

                </ul>
            </div>
            <div id="txt"></div>
        </div>
        <div id="contain">
            <div id="content">
                <?php
			switch($page){
				
				case "page2":
					require_once "menu.php";
				break;
				
				case "page3":
					require_once "contact.php";
				break;
				
				case "page4":
					require_once "gallery.php";
				break;
				
				case "page5":
					require_once "about.php";
				break;			
			
				default: require_once 'home.php' ;
				break;
			}
		?>
            </div>


            <div class="footer">Copyright | PaDFoot</div>
        </div>
    </body>

    </html>