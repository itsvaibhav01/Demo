<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>demo1</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- Leave those next 4 lines if you care about users using IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>



   <body>
   		

   		<div class="row">
		    <div class="col-sm-4" style="background-color:lavender;"></div>
		    <div class="col-sm-4" style="background-color:lavenderblush;">
		    	<h1>How Fast Can you refresh? </h1>
		        <ul>
		            <?php
		            $json = file_get_contents('http://product-service/');
		            $obj = json_decode($json);
		            $products = $obj->products;
		            foreach ($products as $product) {
		                echo "<li>$product</li>";
		            }
		            ?>
        		</ul>
		    </div>
		    <div class="col-sm-4" style="background-color:lavender;"></div>
  		</div>

  		<br>
  		<br>
  		<br>

  		<div class="row">
   			<div class="col-sm-0" style="background-color:lavender;" vspace="50"></div>
   			<div class="col-sm-12" style="background-color:lavender;" vspace="50" >
   				<h3 > &ensp; &ensp; &ensp; &ensp; &ensp;&ensp; &ensp; &ensp;This is a demonstration of how two docker one running with python3.7-flask and other with php7.0-apache communicate</h3>
   			</div>
   			<div class="col-sm-0" style="background-color:lavender;" vspace="50"></div>
   		</div>
        
    </body>



    <!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>


