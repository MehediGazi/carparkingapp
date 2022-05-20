<?php
    
    if(isset($_POST['email']) && isset($_POST['pass']) 
       && !empty($_POST['email']) && !empty($_POST['pass'])){
        
        $email=$_POST['email'];
        $pass=md5($_POST['pass']);
        
        try{

            $dbcon = new PDO("mysql:host=localhost:3306;dbname=carparking;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query="SELECT email FROM parkingowner WHERE email='$email' and pass='$pass'";
            
            try{
                $returnval=$dbcon->query($query);
                if($returnval->rowCount()==1){

                    session_start();
                    
                    $_SESSION['email']=$email;
                    ?>
                        <script>
                            window.location.assign('parkinghome.php');
                        </script>
                    <?php
                }
         
?>