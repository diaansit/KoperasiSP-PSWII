<html>
<head>
	<title></title>
</head>
<body>
    <h3 style="text-align:center">DAFTAR SIMPANAN KOPERASI SP</h3>

    
<table class="table">
    <tr>
       <th>No</th>
       <th>ID Simpanan</th>
       <th>ID Anggota</th>
       <th>Nama</th>
       <th>Jenis Simpanan</th>
       <th>Jumlah</th>
       <th>Tanggal Simpanan</th>
    </tr>
   
    <?php
    		$no = 1;
    		foreach ($simpanan as $smp) : ?>

				<tr>
					<td><?php echo $no++?></td>
          <td><?php echo $smp->id_simpanan?></td>
					<td><?php echo $smp->id_anggota?></td>
					<td><?php echo $smp->nama_anggota?></td>
					<td><?php echo $smp->jenis_simpanan?></td>
					<td><?php echo $smp->jumlah_simpanan?></td>
					<td><?php echo $smp->tanggal_simpanan?></td>
				</tr>
			<?php endforeach;?>

    </table>



</body>
</html>
