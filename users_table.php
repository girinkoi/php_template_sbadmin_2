<?php
include 'inc/header.php';
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-flex justify-content-between">
                        <h1 class="h3 mb-2 text-gray-800">Users</h1><br>
                        <button onclick=location.href="form_add.php" class="btn btn-primary btn-user btn-block" style="max-width: 100px; margin-bottom: 20px; float: right;">Add</button>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>First_Name</th>
                                            <th>Last_Name</th>
                                            <th>Company</th>
                                            <th>Phone</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($result_users as $row) : ?>
                                            <tr>
                                                <td><?php echo $row[0]; ?></td>
                                                <td><?php echo $row[1]; ?></td>
                                                <td><?php echo $row[2]; ?></td>
                                                <td><?php echo $row[3]; ?></td>
                                                <td><?php echo $row[4]; ?></td>
                                                <td><?php echo $row[5]; ?></td>
                                                <td><?php echo $row[6]; ?></td>
                                                <td><?php echo $row[7]; ?></td>
                                                <td><a href="users_table.php?action=delete&id=<?php echo $row[0];?>">Delete</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <?php
                                    if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
                                        $get_id = $_GET['id'];
                                        $delete_users = "DELETE FROM `users` WHERE id = '$get_id'";
                                        $result = $db->query($delete_users);
                                        echo '<script>window.location.href = "users_table.php"</script>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<?php
include 'inc/footer.php';
?>