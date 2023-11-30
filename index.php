<?php
require_once 'connection.php';

if(!array_key_exists('logged', $_SESSION)) {
    header('Location: login.php');
    return;
}

require_once "includes/header.php";
?>
    <main class="container p-4">
        <?php if(isset($_SESSION['message'])) {?>
            <div class="alert alert-<?=$_SESSION["message_type"] ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php unset($_SESSION['message']);?>
        <?php } ?>
        
        
    
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    
                     <form action="save.php" method="POST"> 
                        
                        <!-- <label for="ffullName">Full Name:</label><br>
                        <input type="text" id="fname" name="fname" ><br>

                        <label for="lphone">Phone:</label><br>
                        <input type="text" id="lphone" name="lphone" ><br><br>

                        <label for="lemail">Phone:</label><br>
                        <input type="email" id="lemail" name="lemail" ><br><br>

                        <label for="laddress">Address:</label><br>
                        <input type="text" id="laddress" name="laddress" ><br><br>

                        <label for="lrelation">Relation:</label><br>
                        <input type="text" id="lrelation" name="lrelation" ><br><br> -->

                        <div class="form-group">
                            <input type="text" name="fullName" id="fullName" placeholder="fullName" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="phone" id="phone" placeholder="phone" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="address" id="address" placeholder="address" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="relation" id="relation" placeholder="relation" class="form-control">
                        </div>

                        
                        <div class="form-group">
                            <input type="submit" value="Save" class="btn btn-success btn-block" id="button">
                        </div>
                        
                        <div class="form-group">
                            <input type="reset" value="Clear" class="btn btn-success btn-block" id="button2">
                        </div>
                        <div class="text-center">
                            <a href="login.php">Back to Login</a>
                        </div>
                     </form> 
                </div>
            </div>

            <div class="col-md-8">
                
                
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Full Name:</th>
                        <th>Phone:</th>
                        <th>Email:</th>
                        <th>Address:</th>
                        <th>Relation:</th>
                        <th>Date:</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT * FROM `contacts`";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['fullName']?></td>
                            <td><?php echo $row['phone']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['address']?></td>
                            <td><?php echo $row['relation']?></td>
                            <td><?php echo $row['created_at']?></td>
                            <td>
                                <a href="edit.php?id=<?=$row['id']?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>


<?php
require_once "includes/footer.php";
?>