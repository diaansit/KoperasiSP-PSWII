<html>
<head>
	<title></title>
</head>
<body>
<table class="table">
    <tr>
        <th>No</th>
       <th>ID Pinjaman</th>
       <th>ID Anggota</th>
       <th>Jumlah Pinjaman</th>
       <th>Jenis Pinjaman</th>
       <th>Asal Angsuran</th>
       <th>Lama Angsuran</th>
    </tr>
   
    <?php
    		$no = 1;
            foreach ($pinjaman as $pjm) : ?>
    
            <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $pjm->id_pinjaman?></td>
            <td><?php echo $pjm->anggota_id?></td>
            <td><?php echo $pjm->jumlah_pinjaman?></td>
            <td><?php echo $pjm->jenis_pinjaman?></td>
            <td><?php echo $pjm->angsuran_dari?></td>
            <td><?php echo $pjm->lama_angsuran?></td>
            </tr>
		<?php endforeach;?>

</table>
<script type ="text/javascript">
         window.print();
</script>


</body>
</html>
