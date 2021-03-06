<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furniture Design</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link href="./style.css" rel="stylesheet">  
  <link
  href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap"
  rel="stylesheet"
/>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

</head>
<body>
  <header class="wrapper">
    <div class="header-left">
      <div class="title">
        <h1><a href="./index.html"><img src="./img/logo.svg"></a></h1>
      </div>
    </div>

        <div class="header-right-button">
          <div class="header-right-button-border"></div>
          <div class="header-right-button-border"></div>
        </div>
    <div class="nav">
      <ul>
        <li><a href='./product1.html'>PRODUCTS</a></li>
        <li><a href='./about.html'>ABOUT</a></li>
        <li><a href='./company.html'>COMPANY</a></li>
        <li><a href='./contact.html'>CONTACT</a></li>
      </ul>
    </div>
    <div id="mask">
    </div>
    <?php wp_head(); ?>
  </header>