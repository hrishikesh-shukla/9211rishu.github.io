<?php

if(isset($_POST['submit'])){

    $recepient = "hello@hrishikeshshukla.in";
    $sitename = "Hrishikesh Anila Shukla Portfolio Website";

    $name = trim($_POST["name"]);
    $subject = trim($_POST["subject"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);
    $genMessage = "Name: $name \nEmail: $email \nSubject: $subject \nMessage: $message";

    $pagetitle = "New message from the \"$sitename\"";

    if(mail($recepient, $pagetitle, $genMessage, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient")){ ?>
    <center>
        <h2>
            Great! The mail has been sent.. I will get in touch as soon as possible.
        </h2>
        <p>You will be redirected in <span id="counter">5</span> second(s).</p>
        <script type="text/javascript">
        function countdown() {
            var i = document.getElementById('counter');
            if (parseInt(i.innerHTML)<=0) {
                location.href = 'index.html';
            }
        if (parseInt(i.innerHTML)!=0) {
            i.innerHTML = parseInt(i.innerHTML)-1;
        }
        }
        setInterval(function(){ countdown(); },500);
        </script>
    </center>
    <?php
    }else{
        echo "O Ho! There has been some error and we could not send your mail.";
    }
}?>