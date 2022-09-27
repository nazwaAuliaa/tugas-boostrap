<?php 
    $dbh = new PDO('mysql:host=localhost;dbname=sekolahku','root','');
    
    $query = $dbh->query("select * from siswa");
    ?>

    <h1>Data Siswa</h1>
    
    <?php while($result = $query->fect()){?>
        <p><?= $result ['nama'];?>

   <?php
    }

?>