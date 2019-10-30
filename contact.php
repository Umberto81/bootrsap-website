

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mattia Lo Cascio | Contact</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css"> 
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<!-- navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top animated fadeInDown" id="my-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">Mattia Lo Cascio</a>
        </div> <!-- navbar header -->
      <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html" >Home</a></li>
                <li><a href="bio.html">Bio</a></li>
               <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Works <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="fashion.html">Fashion</a></li>
            <li><a href="glamour.html">Glamour</a></li>
            
          </ul>
        </li>
                <li><a href="video.html">Video</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
            
            
            </ul>
        </div>
    </div>
</nav> <!-- end nav -->
<br>
<br>
<br>

<div class="container-fluid">
    

        <!-- main content -->
    <div class="main-content container animated fadeInRight">
        <div class="row">
            <!--about me -->
            <div class="about-me  col-lg-8">
                <h3>CONTACT</h3>
                <h4>MATTIA <small>MODULO DI CONTATTO</small></h4>
                <p>Per contattare Mattia Lo Cascio compilate il form sottostante inserendo il vostro nome, la vostra Email ed il messaggio!<br>
                Riceverete una Email di risposta o sarete comunque ricontattati  entro 24 ore.</p>
                <br>
                <br>
            </div>

            <!-- fine about me -->
       



<?php

    
    function has_header_injections($str){
        return preg_match("/[\r\n]/", $str);
    }

    if (isset($_POST['submit'])){
        $name       = trim($_POST['name']);
        $email      = trim($_POST['email']);
        $msg        = $_POST['message'];

        
        if(has_header_injections($name) || has_header_injections($email)){
            die(); 
        }

        if (!$name || !$email || !$msg) {
         header('location: error.html');
            exit; 
        }

        
        $to = "postmaster@mattialocascio.it";

      
        $subject = "$name ti ha inviato una mail attraverso il form di contatto del tuo sito";

        
        $message = "Nome: $name\r\n";
        $message .= "Email $email \r\n";
        $message .= "Messaggio:\r\n$msg";
        $message = wordwrap($message, 72);

        
        
        $headers = "From: $name <$email>\r\n";
        
     
        mail($to, $subject, $message, $headers);



    
?>


<h5>Grazie per averci contattato</h5>
<p>Riceverà una risposta entro 24h.</p>
<p><a href="index.html" class="btn btn-default">Vai alla home page</a></p>


<?php } else { ?>


<div class="row">
                            <!-- contact form -->
                                <div class="col-md-9">
                                    <form action="contact.php" method="POST">
                                        <input type="text" name="name" placeholder="FULL NAME/NOME">
                                        <br>
                                        <input type="email" name="email" placeholder="@EMAIL">
                                        <br>
                                        <input class="message" type="text" name="message" placeholder="YOUR MESSAGE/MESSAGGIO">
                                        <br>
                                        <input class="send" type="submit" name="submit" value="INVIO" >
                                    </form>
<?php } ?>                                
                                </div>
                                <!-- fine contact form -->
                                <div class="col-md-3 quick-info">
                                    <div><i class="fa fa-envelope-o"></i><p>Mattia.locascio@libero.it</p></div>
                                    <div><i class="fa fa-phone"></i><p>Management - Gianfranco Sasso - 3202651299</p></div>
                                    <div><i class="fa fa-map"></i><p>Italy</p></div>
                                </div> 
                        </div><!-- fine row -->
                        <br>






</div>


</div>









<!-- footer -->

   <section  class="container content-section text-center"> <!--riquadro social-->
        <div class="row">
           
 <div class="col-lg-3 col-lg-offset-4 col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">

 <div class="text-center"><h3>Social Connection <span class="arrow"><i class="fa fa-caret-down"></i></span></h3></div>
                <div class="box">
                <div class="box-img">
                    <img src="immagini/head.jpg" alt="">
                </div>
                <div class="content">
                    <h3 class="title">Seguici sui social</h3>
                    <!--si può aggiungere un paragrafo-->
                    <ul class="social">
                        <li><a href="https://www.facebook.com/Mattia-Lo-Cascio-534659689904897/?fref=ts"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/lo_cascio_mattia/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            
           </div>
           <br><br>

         <div class="col-lg-3 col-lg-offset-4 col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">
             <ul class="social">
                        <li><a href="https://www.facebook.com/Mattia-Lo-Cascio-534659689904897/?fref=ts"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/lo_cascio_mattia/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
             
         </div>

</section><!--fine riquadro social-->
    
      <br><br>


   <footer>
    <div class="row">
       
    
        <div class="col-lg-12 text-center">
             
             <p>&copy 2016 Dakota Web Design - all rights reserved</p>  
        </div>
    
    </div>
   </footer>
   <br><br> 

<!-- footer -->



</div>













<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
