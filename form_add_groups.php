<?php
include 'inc/header.php';
?>
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Form Add Group</h1>
                    <div class="card">
                        <form action="form_add_groups.php" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputUsername">Username</label>
                                    <input type="text" class="form-control form-control-user"
                                        id="exampleInputUsername" placeholder="Username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword">Description</label>
                                    <input type="text" placeholder="Description" class="form-control" id="exampleInputDescription" name="description" aria-describedby="passwordHelp">
                                </div>
                            <div class="card-footer">
                                <button type="submit" name="submit" value="submit" class="btn btn-primary btn-user btn-block">
                                            Submit
                                </button>
                            </div>
                        </form>
                        <?php
                            if(isset($_POST['submit'])) {
                                $get_name = $_POST['username'];
                                $get_description = $_POST['description'];

                                $add_groups = "INSERT INTO `groups` (id,name,description) VALUES (null,'$get_name','$get_description')";
                                $result = $db->query($add_groups);
                                
                                echo '<script>window.location.href = "groups_table.php"</script>';
                            }
                        ?>
                    </div>
                </div>
<?php
include 'inc/footer.php';
?>