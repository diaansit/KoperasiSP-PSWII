<html><head>
	<title></title>
</head><body>
    <h3 style="text-align:center">DAFTAR PINJAMAN KOPERASI SP</h3>

    
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



</body></html>
