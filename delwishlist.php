$id = $_POST['delete_id'];
                    $image = $_POST['del_image'];

                    $query = "DELETE FROM wishlist WHERE id = '$id'";
                    $query_run = mysqli_query($conn,$query);

                    if($query_run)
                    {
                        // unlink("image/".$image);
                        $_SESSION['success']="Data is Deleted";
                        // header("location: staff.php?delete successfully");
                    }
                    else
                    {
                        $_SESSION['status']="Data is Not Deleted";
                    }