<?php 
include 'session.php';

?>

<!doctype html>
<html>
    <head>
        <title>Chat application</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <style>
            .cont{
                background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWFk5MalDtLc4CGiqN-xC0BQdNKbwd131Otg&s");
                background-repeat:no-repeat;
                background-size:cover;
            }
            .cont2{
                background-color:green;
            }
        </style>

    </head>
        <body>

        <?php 
        include 'config.php';
        $uname=$_SESSION['username'];
        $check="select * from register where username='$uname'";
        $result=mysqli_query($connection,$check);
        while($s=mysqli_fetch_assoc($result)){
            $id=$s['reg_id'];
            $name=$s['name'];
            $emai=$s['email'];
            $contact=$s['contact'];
            $address=$s['address'];
            $city=$s['city'];
            $state=$s['state'];
            $username=$s['username'];
        } 
       
       
       ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 bg-warning text-center py-3">
                        <h1 class="text-primary">WELCOME <?php echo $name;  ?></h1>

                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 py-3 text-end  ">
                        <a href="Home.php" class="text-decoration-none bg-danger text-light py-2 px-3 ">HOME</a>
                        <a href="Logout.php" class="text-decoration-none bg-success text-light py-2 px-3">LOG OUT</a>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-4 cont my-4">
                        <h2 class="my-3 text-dark">Contact list</h2>
                    <form action="cont_backend.php" method="GET">
                        <div class="my-2">
                            <label>Name</label>
                            <input type="text" required name="name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="my-2">  
                            <label>Contact</label>
                            <input type="text" required name="contact_no" class="form-control" placeholder="Enter your number">
                        </div>
                        <div class="my-2">  
                            
                            <input type="text" required name="user_id" value="<?php echo $id?>" hidden class="form-control" placeholder="Enter your user_id">
                        </div>
                        <div class="my-2">  
                            <label>Createdon_date</label>
                            <input type="text" required name="createdon_date" class="form-control" placeholder="Enter your createdon_date">
                        </div>
                            <button type="submit"class="btn btn-info text-dark my-2">submit</button>                                                
                        </div>
                        
                        <div class="col-md-6 my-4 mx-5 cont2 ">
                            <table class="table text-light">
                                <thead>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>CONTACT</th>
                                    <th>DATE</th>
                                    <th>UPGRADE</th>
                                    <th>DELETE</th>
                                    <th>CHAT</th>
                                </thead>
                                <tbody>
                                    <?php 
                                    include 'config.php';

                                    $add="select * from contacts where user_id=$id";
                                    $res=mysqli_query($connection,$add);
                                    $count=0;
                                    while($f=mysqli_fetch_assoc($res)){
                                        $id=$f['cont_id'];
                                        $name=$f['name'];
                                        $contact=$f['contact_no'];
                                        $user=$f['user_id'];
                                        $date=$f['createdon_date'];
                                        $count +=1;
                
                                    ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $contact; ?></td>
                  
                                        <td><?php echo $date; ?></td>
                                        <td><a href="update.php?id=<?php echo $id; ?>" class="text-decoration-none bg-warning text-light px-2 py-1">UPDATE</a></td>
                                        <td><a href="delete.php?id=<?php echo $id; ?>" class="text-decoration-none bg-danger text-light px-2 py-1">DELETE</a></td>
                                        <td><a href="chat.php?id=<?php echo $id; ?>" class="text-decoration-none bg-primary text-light px-2 py-1">CHAT</a></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                                </table>

                        </div>
                        </div>
                                                                
                    </form>
                    </div>

                </div>
            </div>



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        </body>
</html>