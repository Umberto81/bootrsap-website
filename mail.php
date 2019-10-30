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

        
        $to = "goffredo.gonnella@gmail.com";

      
        $subject = "$name ti ha inviato una mail attraverso il form di contatto del tuo sito";

        
        $message = "Nome: $name\r\n";
        $message .= "Email $email \r\n";
        $message .= "Messaggio:\r\n$msg";
        $message = wordwrap($message, 72);

        
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain: charset=iso-8859-1\r\n";
        $headers .= "From: $name <$email>\r\n";
        $headers .= "X-Priority 1\r\n";
        $headers .= "X-MSmail-Priority High\r\n\r\n";

     
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