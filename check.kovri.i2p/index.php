<!doctype html>
<html lang="en_US">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Success! Welcome to the I2P network!</title>
  <link rel="icon" type="image/x-icon" href="img/kovri_on.png" />
  <style>
    html { height: 100%; }
    body {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: Helvetica, sans-serif;
      background-color: #f4f6f9;
    }
    #page {
      display: flex;
      height: 100%;
      justify-content: center;
      align-items: center;
    }
    h1 { font-size: 2.5rem; text-align: center;}
    img.logo {
      max-width: 100%;
      width: 20rem;
      display: block;
      margin: 0 auto;
    }
    #content .box {
      margin-top: 2.5rem;
    }
    #content .box h2 {
      text-align: center;
    }
    #content .box-code {
      background-color: #151515;
      color: #fff;
      width: 100%;
      border-radius: 2px;
      padding: 1rem;
      width: 70%;
      margin: 0 auto;
    }
  </style>
</head>
<body>
    <div id="page">
       <div id="content">
           <img src="img/kovri_on.png" alt="Kovri Logo Connected" class="logo">
           <h1>Success! Welcome to the I2P network!</h1>
           <div class="box">
             <h2>Your browser's headers:</h2>
             <div class="box-code">
               <code>
                  <?php
                    $headers = getallheaders();
                    foreach ($headers as $header => $value) {
                      echo "$header: $value <br>\n";
                    }
                  ?>
               </code>
             </div>
           </div>
       </div>
    </div>
</body>
</html>
