<?php
include "connect.php";
$query = mysqli_query($conn,"SELECT * FROM mahasiswa ORDER BY nim DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jenis Kelamin</th>
            <th>Program Studi</th>
            <th>Fakultas</th>
            <th>Asal</th>
            <th>Moto Hidup</th>
        </tr>

        <?php if(mysqli_num_rows($query)>0){  ?>
           <?php $no = 1;
            while($data = mysqli_fetch_array($query)){
       ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["nim"];?></td>
            <td><?php echo $data["jenisKel"];?></td>
            <td><?php echo $data["prodi"];?></td>
            <td><?php echo $data["fakultas"];?></td>
            <td><?php echo $data["asal"];?></td>
            <td><?php echo $data["motohidup"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>


<a href="form.php">Input Data Baru
