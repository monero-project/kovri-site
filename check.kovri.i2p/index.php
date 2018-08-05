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
      display: block;
      padding: 3rem 1rem;
    }
    h1 { font-size: 2.5rem; text-align: center;}
    img.logo {
      max-width: 100%;
      width: 7rem;
      display: block;
      margin: 0 auto;
    }
    #content .box {
      margin-top: 2.5rem;
      word-break: break-all;
    }
    #content .box h2 {
      text-align: center;
    }
    #content .box h3 {
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
           <!-- TODO(unassigned): fix CSS styling -->
           <?php
             // Get client headers
             $headers = getallheaders();

	     // To remove X-I2P headers (they aren't sent by the browser, see #94)
	     $parsed_headers = array();

             // Report unique header with custom tag
             function header_box($tag, $header)
             {
               echo '<div class="box"><h3>';
               echo $tag;
               echo '</h3><div class="box-code"><code>';
               echo "$header<br>";
               echo '</code></div></div>';
             }
           ?>
           <div class="box">
           <h2>Your local client destination (identity = keys [pub enc + pub sign] + cert)</h2>
           </div>
           <?php
             foreach ($headers as $header => $value)
               {
                 switch ($header)
                   {
                     case "X-I2P-DestHash":
                     header_box("Base64 encoded SHA-256 hash (32-bytes) of your destination", $value);
                     break;
                     case "X-I2P-DestB32":
                     header_box("Base32 encoded SHA-256 hash (32-bytes) of your destination (with appended domain)", $value);
                     break;
                     case "X-I2P-DestB64":
                     header_box("Base64 encoding of your full destination", $value);
                     break;
                     default:
                       $parsed_headers[$header] = $value;
                   }
               }
           ?>
           <div class="box">
             <h2>Your browser headers</h2>
             <div class="box-code">
               <code>
                 <?php
                 foreach ($parsed_headers as $header => $value)
                   {
                     echo "$header: $value<br>";
                   }
                 ?>
               </code>
             </div>
           </div>
       </div>
    </div>
</body>
</html>
