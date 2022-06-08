<section class="content-header">
      <h1>
        Produk Simpanan dan Pinjaman
      </h1>
</section>
    
    <section class="content">
    <h4 class="mb"><span class='glyphicon glyphicon-briefcase'></span> Produk Pinjaman
                    <span style="float:right;"></h4>
    <form class="form-inline" >
        <table class="table table-bordered table-striped ">    
    		<tr>
                <td><b>ID Jenis Pinjam</td>
                <td><b>Nama Pinjaman</td>
                <td><b>Lama Angsuran</td>
                <td><b>Maks Pinjam</td>
                <td><b>Bunga</td>
            </tr>

            <?php foreach ($product as $prd) : ?> 

                    <tr> 
                        <td><?php echo $prd->id_jenis_pinjam?></td>
                        <td><?php echo $prd->nama_pinjaman?></td>
                        <td><?php echo $prd->lama_angsuran?></td>
                        <td><?php echo $prd->maks_pinjam?></td>
                        <td><?php echo $prd->bunga?></td>
                    </tr>
            <?php endforeach; ?>
                
    		
        </table>
    <form>
    </section>

    <section class="content">
    <h4 class="mb"><span class='glyphicon glyphicon-briefcase'></span> Produk Simpanan <span style="float:right;"></h4>
    	<table class="table table-bordered table-striped">

                <tr>
                    <td>ID Jenis Simpan</td>
                    <td>Nama Simpanan</td>
                    <td>Besar Simpanan</td>
                </tr>

                <?php foreach ($uang as $uag) : ?>

                    <tr>
                        <td><?php  echo $uag->id_jenis_simpan?></td>
                        <td><?php  echo $uag->nama_simpanan?></td>
                        <td><?php  echo $uag->besar_simpanan?></td>
                    </tr>
                    
                <?php endforeach; ?> 
                                
    		
    	</table>
    </section>

 
