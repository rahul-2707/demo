<!doctype html>
<html>
    <head>
        <title>Chat application</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<style>
.style{
    padding-top:100px;
}


</style>
    </head>
    <body>
    <?php 
        include 'config.php';
        include 'session.php';

        $uname=$_SESSION['username'];
        $check="select * from register where username='$uname'";
        $result=mysqli_query($connection,$check);
        while($s=mysqli_fetch_assoc($result)){
            $r_id=$s['reg_id'];
            $name=$s['name'];
          
        } 
       
       
       ?>

<?php 

include 'config.php';


$c_id=$_GET['id'];
$msg="select * from contacts where cont_id='$c_id'";
$res=mysqli_query($connection,$msg);
while($i=mysqli_fetch_assoc($res)){
    $c_id=$i['cont_id']; 
    $name=$i['name'];
    $contact=$i['contact_no'];
    
    
    


}

echo $c_id;
?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 bg-light ">
                

                <?php 

                $arg="select * from chat where sender_id=$r_id and receiver_id=$c_id";
                $res2=mysqli_query($connection,$arg);
                while($v=mysqli_fetch_assoc($res2)){
                    $send=$v['sender_id'];
                    $receive=$v['receiver_id'];
                    $msg=$v['message'];
                    $date=$v['sent_on'];
              ?>
                
                <div class='bg-light text-dark my-1 p-1'><h4 class="m-0"><?php echo $msg; ?></h4>
                    <div class="text-end"><span><?php echo $date; ?></span></div>
                </div>
                
                <div class='bg-success text-light my-1 p-1 '><h4 class="m-0"><?php echo $msg; ?></h4>
                    <div class="text-end"><span><?php echo $date; ?></span></div>
                </div>
                

               <?php  }  ?>
                
                
                <form class="style" action="chat_backend.php" method="GET">
                    <div class="">
                        <textarea placeholder="Text Here"  name="message" required class="form-control "></textarea>
                    </div>  
                    <div class="m-2">
                        <input type="text" name="sender_id" hidden value="<?php echo $r_id;?>"/>
                        <input type="text" name="receiver_id"hidden value="<?php echo $c_id;?>"/>
                       <input type="submit"  value="Send" class="btn btn-danger form-control bg-primary text-light"/>
                    </div>    
                </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
        
