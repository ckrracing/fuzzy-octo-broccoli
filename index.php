<?php 

  class View {
    public $name = "Marco";
  }

  $view = new View();

?> 
<html>
  
  <head></head>
  
   <body>
    <H1> <?php print "Halo $view->name " ?></H1>
  </body>

</html>
