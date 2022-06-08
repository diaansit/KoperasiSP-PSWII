<html>
<head>
	<title></title>
</head>
<body>
<table class="table">
    <tr>
       <th>No</th>
       <th>ID Anggota</th>
       <th>Nama Anggota</th>
       <th>Alamat Lengkap</th>
       <th>Tanggal Lahir</th>
       <th>Email</th>
        <th>No Telepon</th>
    </tr>
   
    <?php
    		$no = 1;
    		foreach ($anggota as $agt) : ?>

				<tr>
					<td><?php echo $no++?></td>
                    <td><?php echo $agt->id_anggota?></td>
					<td><?php echo $agt->nama_anggota?></td>
					<td><?php echo $agt->alamat_lengkap?></td>
					<td><?php echo $agt->tanggal_lahir?></td>
					<td><?php echo $agt->email?></td>
					<td><?php echo $agt->no_telepon?></td>
				</tr>
			<?php endforeach;?>

    </table>

    <script type ="text/javascript">
         window.print();
    </script>


</body>
</html>
