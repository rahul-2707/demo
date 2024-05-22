<?php 
include 'config.php';

$c_id=$_GET['id'];
$view="select * from contacts where cont_id='$c_id'";
$res=mysqli_query($connection,$view);
while($i=mysqli_fetch_assoc($res)){
    $id=$i['cont_id'];
    $name=$i['name'];
    $contact=$i['contact_no'];
    $date=$i['createdon_date'];
    


}

echo $name;
?>


<div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="form">
                        <div class="form-header">
                            <h1>Update form</h1>
                        </div>
                        <div class="form-body">
                            <form action="update_data.php" method="GET">
                                <input type="text" name='id' hidden value="<?php echo $id; ?>"/>
                                <div class="m-2">
                                    <label>Name</label>
                                    <input type="text" placeholder="please enter your name" name="name" value="<?php echo $name;?>" required class="form-control"/></br></br>
                                </div>
                                <div class="m-2">
                                    <label>Contact</label>
                                    <input type="text" placeholder="please enter your name" name="contact" value="<?php echo $contact;?>" required class="form-control"/></br></br>
                                </div>
                              
                                <div class="m-2">
                                    <input type="Submit"  class="btn btn-warning form-control "/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
