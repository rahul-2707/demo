<!doctype html>
<html>
    <head>
        <title>Chat application</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        
        <style>
            body{
                background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCp7_Y-85fwn5Tx4iFoj6FAbWTW8nsKvC19Q&s");
                background-repeat: no-repeat;
                background-size:cover;
            }
            
        </style>

    </head>
        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 bg-warning text-center py-3">
                        <h1>WELCOME</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 py-3 text-end  ">
                        <a href="index.php" class="text-decoration-none bg-danger text-light py-2 px-3 ">HOME</a>
                        <a href="#login" data-bs-toggle="modal" class="text-decoration-none bg-success text-light py-2 px-3">LOGIN</a>
                    </div>
                </div>
            </div>
                    
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pho">
                        <div class="modal" id="login">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form action="login.php" method="POST">
                                            <div class="my-3">
                                                <label class="text-primary">Username</label>
                                                <input type="text" required name="username" class="form-control" placeholder="Enter your username">
                                            </div>
                                            <div class="my-3">
                                                <label class="text-primary">Password</label>
                                                <input type="text" required name="password" class="form-control" placeholder="Enter your password">
                                            </div>
                                            <div class="my-3">
                                                <button type="submit" class=" btn btn-success">submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <form action="Register.php" method="GET">
                        <div class="my-2">
                            <label>Name</label>
                            <input type="text" required name="name" class="form-control" placeholder="Enter your name">
                        </div>

                        <div class="my-2">  
                            <label>Email</label>
                            <input type="text" required name="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="my-2">  
                            <label>Contact</label>
                            <input type="text" required name="contact" class="form-control" placeholder="Enter your number">
                        </div>

                        <div class="my-2">
                            <label>Address</label>
                            <input type="text" required name="address" class="form-control" placeholder="Enter your address">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="my-2">
                                    <label>city</label>
                                    <select class="form-control" required name="city">
                                        <option value="">--select city--</option>
                                        <option value="mysuru">mysuru</option>
                                        <option value="Hassan">Hassan</option>
                                    </select>
                                </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="my-2">
                                        <label>state</label>
                                        <select class="form-control" required name="state">
                                        <option value="">--select state--</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Karnataka">Kerala</option>
                                        <option value="Karnataka">Tamilnadu</option>                                                                                                            
                                        </select>
                                    </div>
                                </div>

                                    <div class="my-2">
                                        <label>Username</label>
                                        <input type="text" required name="username" class="form-control" placeholder="Enter your username">
                                    </div>
                                    <div class="my-2">
                                        <label>password</label>
                                        <input type="text" required name="password" class="form-control" placeholder="Enter your password">
                                    </div>
                                </div>
                                <button type="submit"class="btn btn-info">submit</button>
                                                                           
                                </div>
                                                                
                                </form>
                    </div>
                </div>
            </div>



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        </body>
</html>