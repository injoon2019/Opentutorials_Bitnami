<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>JavaScript</h1>
    <script type="text/javascript">
      list= new Array("차경옥", "안소연", "강창화");
      i=0;
      while(i< list.length){
        document.write("<li>"+list[i]+"</li>");
        i = i+1;

      }
    </script>
    <h1>php</h1>
    <?php
      $list = array("차경옥", "강창화", "손인준");
      $i=0;
      while($i < count($list)){
        echo "<li>".$list[$i]."</li>";
        $i = $i+1;
      }
     ?>
  </body>
</html>
