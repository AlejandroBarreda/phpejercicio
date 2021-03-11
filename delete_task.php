<?php include('db.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM task_tareas WHERE id=$id";
    $resultado= mysqli_query($conn,$query);
if(!$resultado){
    die("Query failed");
}
$_SESSION['message']='Tarea removida satisfactoriamente';
$_SESSION['message_type']='danger';

header("Location:index.php");
}
?>