<?php
session_start();
if(isset($_GET['idnoticia'])){
    $id = $_GET['idnoticia'];
}

if(isset($_POST['idnoticia'])){
    include "conexao.php";

    $id = $_POST['idnoticia'];
$sql = "DELETE FROM noticia WHERE id={$id}";

if ($conn->query($sql) === TRUE) {
    header("location: lista-noticia.php");
}else {
    echo "Error: " . $conn->error;

}    

$conn->close();
}
?>

<?php include "includes/head.php"; ?>
<?php include "includes/menu.php"; ?>


    <form method="POST" action="excluir-noticia.php">
    <label>Deseja Realmente Excluir?</label>
        <input type="hidden" name="idnoticia" value="<?php echo $id; ?>">
        <input type="submit" <a class="btn btn-danger"value="Sim" </a>
    </form>

    <?php include "includes/footer.php"; ?> 