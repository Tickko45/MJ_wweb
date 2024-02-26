<?php require("Connect.php"); ?>

<?php     
    if(isset ($_GET["id"])){
        $id = $_GET["id"];
        $sql = "DELETE FROM employees WHERE id=$id";

        $conn->query($sql);
        
        header("Location:Add_data.php");
    }
?>
<?php $conn->close(); ?>