<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learning CI</title>
</head>
<body>
    <?php if(isset($_SESSION)) {
        echo $this->session->flashdata('flash_data');
    } ?>
 
    <form action="<?= site_url('login') ?>" method="post">
        <p><label for="username">Usuario</label>
        <input type="text" name="username" /></p>
        <p><label for="password">Contreseña</label>
        <input type="text" name="password" /></p>
        <p> <button type="submit">validar</button></p>
        
        
       
    </form>
</body>
</html>