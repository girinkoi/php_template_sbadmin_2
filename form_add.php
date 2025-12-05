<?php
include 'inc/header.php';
?>
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Form Add</h1>
                    <div class="card">
                        <form action="form_add.php" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputUsername">Username</label>
                                    <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword" aria-describedby="passwordHelp "name="password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFirstName">First Name</label>
                                    <input type="text" class="form-control" id="exampleInputFirstName" aria-describedby="firstnameHelp" name="first_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputLastName">Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputLastName" aria-describedby="lastnameHelp" name="last_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCompany">Company</label>
                                    <input type="text" class="form-control" id="exampleInputCompany" aria-describedby="companyHelp" name="company">
                                </div>
                                <div class="form-group">
                                    <label for="examplePhone">Phone</label>
                                    <input type="number" class="form-control" id="exampleInputPhone" aria-describedby="phoneHelp" name="phone">
                                </div>
                            </div>
                            <div class="card-footer">
                               <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <?php
                            $random_number = rand();
                            if(isset($_POST['submit'])) {
                                $get_name = $_POST['username'];
                                $get_password = $_POST['password'];
                                $get_email = $_POST['email'];
                                $get_first_name = $_POST['first_name'];
                                $get_last_name = $_POST['last_name'];
                                $get_company = $_POST['company'];
                                $get_phone = $_POST['phone'];

                                $add_users = "INSERT INTO `users`(id, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES (null,'$random_number','$get_name','$get_password','$get_email','$random_number','$random_number','$random_number','$random_number','$random_number','$random_number','$random_number','$random_number','$random_number','1','$get_first_name','$get_last_name','$get_company','$get_phone')";
                                $result = $db->query($add_users);
                                
                                echo '<script>window.location.href = "users_table.php"</script>';
                            }
                        ?>
                        </form>
                    </div>
                </div>
<?php
include 'inc/footer.php';
?>