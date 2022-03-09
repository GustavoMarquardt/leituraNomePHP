<?php
session_start();

?>
<h1 style="font-family: 'Courier New', Courier, monospace;">Digte seu nome</h1>

<form method="POST">
    <input name="nome" placeholder="digite seu nome aqui" id="name">
    <button type="submit">Enviar</button>
</form>

<?php
if(isset($_POST['nome'])){
    ?>
    <h1 style="font-family: 'Courier New', Courier, monospace;">Olá <?php echo $_POST['nome'].' VOCE É FODA'; ?></h1>
    <?php
}
?>