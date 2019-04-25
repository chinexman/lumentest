
<?php

//$fetchPosts= file_get_contents('http://localhost:8000/api/v1/posts/index');
//$decodedPosts = json_decode($fetchPosts,true);


require 'vendor/autoload.php';
$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'http://localhost:8000/api/v1/posts/index', [

    'headers'=>[
      'api_token'=>'smL7Kk3axcRfPUmMdbUrc9tw0cp4oLvV9pA4ptZEIfgq80COAJVaNFV2cpLq']
]);



//try {
//    $response = $client->send( $res );
//} catch (\GuzzleHttp\Exception\ClientException $e) {
//    echo 'Caught response: ' . $e->getResponse()->getStatusCode();
//}
//echo $res->getStatusCode();
// "200"
//echo $res->getHeader('content-type')[0];
// 'application/json; charset=utf8'

$decodedPosts='something else';
if($res->getStatusCode()==200){
 $decodedPosts=json_decode($res->getBody(),true);
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Jumbotron Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
    

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Hello, world!</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">

     <form method="POST" action="http://localhost:8000/api/v1/users/add">

      <input type="hidden" name="_method" value="PUT">  
     <!-- {{csrf_field()}}  -->
  
  <div class=form-group>
    <input type="text" name="name" placeholder=" name" class="form-control"/>
  </div>
  
  
  <div class="form-group">

        <input type="text" name="email" placeholder="email " class="form-control" />

      </div>
      <div class="form-group">
        <input type="password" name="password" placeholder="password" />
  </div>
   

  <div>
    <button type="submit" value="submit">submit</button>

  </div>

    <hr>

  </div> <!-- /container -->

<div class="row">
 <?php
 foreach ($decodedPosts as $post) {
  echo'<h1>'.$post['title'].'<h1>';
  echo '<p>'.$post['body'].'</p>';

   }
?>
  
</div>

</main>

<footer class="container">
  <p>&copy; Company 2017-2019</p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>



