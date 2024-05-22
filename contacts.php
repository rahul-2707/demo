<!doctype html>
<html>
    <head>
        <title>shopping_cart</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                <table class="table">
            <thead>
                <th>Name</th>
                <th>Contact_no</th>
                <th>User_id</th>
                <th>Createdon_date</th>
            </thead>
            <tbody>
                <?php 
                include 'config.php';

                $argc="select * from contacts";
                $res=mysqli_query($connection,$argc);
                while($i=mysqli_fetch_assoc($res)){
                    $name=$i['name'];
                    $contact_no=$i['contact_no'];
                    $user_id=$i['user_id'];
                    $createdon_date=$i['createdon_date'];

                ?>
                <tr>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $contact_no; ?></td>
                    <td><?php echo $user_id; ?></td>
                    <td><?php echo $createdon_date; ?></td>
                </tr>
                <?php 
                 } 
                ?>
                </tbody>
                </table>
                </div>
           </div>
        </div>

        
            




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>