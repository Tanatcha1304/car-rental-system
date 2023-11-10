
    <body style="background-color:#FAFAFC;">
        <div class="container-fluid">

        <!--car status and add car butt-->
        <div class="ml-5" style="padding-top: 30px">
            <div class="row">
                <div class="col-sm ml-5">
                    <h1 style="color:#406A8D;">Car Status</h1>
                </div>
                <div class="col-sm text-right" style="margin-right: 100px">
                    <a href="index.php?page=add_car" class="btn btn-primary " style="background-color: #406A8D; border:1px solid #406A8D">ADD CAR</a>
                </div>
            </div>
        </div>
        <?php if (isset($_SESSION['errors'])) : ?>
            <div class="alert" role="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <pre>
                    <?php
                        echo "error : ",implode("\nerror : ", $_SESSION['errors']);
                        unset($_SESSION['errors']);
                    ?>
                </pre>
            </div>
        <?php endif ?>
        <!-- success alert -->
        <?php if (isset($_SESSION['add_success'])) : ?>
            <div class="alertSuccess" role="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <pre>
                    <?php
                        echo $_SESSION['add_succes'];
                        unset($_SESSION['add_success']);
                    ?>
                </pre>
            </div>
        <?php endif ?>
        <!-- delete alert -->
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>
        
        

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>License plate</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include('assets/server.php');
                    $sqlSelect = "SELECT * FROM vehicle";
                    $result = mysqli_query($conn,$sqlSelect);
                    while($data = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $data['License_plate'];?></td>
                    <td><?php echo $data['Brand'];?></td>
                    <td><?php echo $data['Model'];?></td>
                    <td><?php echo $data['Color'];?></td>
                    <td><?php echo $data['Price'];?></td>
                    <td><?php echo $data['Vehicle_status'];?></td>
                <td>
                    <a href="index.php?page=edit_car&id=<?php echo $data['License_plate']; ?>" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="assets/delete_car.php" method="POST">
                        <input type="hidden" name="delete_license" value="<?php echo $data['License_plate']; ?>">
                        <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                    
            </tr>
            <?php
        }
        ?>
                    
                </tbody>
            </table>

        </div>
    </div>
        
    </body>

