<?php
    include("db.php");




    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query= "SELECT * FROM task_tareas WHERE id= $id";
        $result=mysqli_query($conn,$query);

        if(mysqli_num_rows($result)==1){
            $row=mysqli_fetch_array($result);
            $title=$row['tittle'];
            $description=$row['description'];

        }
    }

    if(isset($_POST['update'])){
        $id - $_GET['id'];
        $title= $_POST['title'];
        $description= $_POST['description'];


        $query="UPDATE task_tareas set tittle='$title', description='$description' WHERE id=$id";
        mysqli_query($conn,$query);
        header("Location:Index.php");
    }


    ?>



    <?php include("includes/header.php")?>

    <div>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-bpdy">
                    <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" value="<?php echo $title;?>" class="form-control"
                         placeholder="Update Title">
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" <?php echo $description;?> class="form-control" placeholder="Update Description"></textarea>
                    </div>

                    <button class="btn btn-success" name="update">
                        Update
                    </button>

                    </form>
                </div>

            </div>
        </div>
    </div>
    
    
    </div>

    <?php include("includes/footer.php")?>