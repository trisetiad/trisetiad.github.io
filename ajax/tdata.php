<table class="table table-bordered table-striped text-center">
        <tr>
        <th>Kode</th>
        <th>Nama Produk</th>
        <th>Jenis Kue</th>
        <th>Jumlah Stock</th>
        <th>Harga</th>
        <th>Files</th>
        <th colspan="3">Aksi</th>
    	</tr>
                <?php
                    include ("../koneksi.php");
                    include ("../seleksi_db.php");
                    
                    
                        $kata_cari =$_GET['kata_cari'];

                        $seleksi = "SELECT * FROM kue
                                    WHERE 
                                        id like '%".$kata_cari."%' OR nama like '%".$kata_cari."%' OR jenis like '%".$kata_cari."%' OR stok like '%".$kata_cari."%' OR harga like '%".$kata_cari."%' ORDER BY id ASC";
                    
                    $hasil_seleksi = mysqli_query ($koneksi , $seleksi);

                    if (!$hasil_seleksi){
                    echo "Proses penyeleksian Data Kue gagal !!!";
                    } else {
                    while ($baris = mysqli_fetch_assoc ($hasil_seleksi)) {
                    echo "<tr>
                            <td>$baris[kode]</td>
			                <td>$baris[nama]</td>
			                <td>$baris[jenis]</td>
			                <td>$baris[stok]</td>
			                <td>$baris[harga] </td>
			                <td>$baris[files]</td>
			                <td>
			                <a class = 'btn btn-dark' href='form.php?action=edit&kode=$baris[kode]&
			                                                             nama=$baris[nama]&
			                                                             jenis=$baris[jenis]&
			                                                             stok=$baris[stok]&
			                                                             harga=$baris[harga]'>
			                                                             Edit </a>
			                </td>
			                            
			                <td>
			                <a class = 'btn btn-danger' href='hapus.php?&id=$baris[id]'> Hapus </a>
			                </td>

                            <td> 
                            <a class = 'btn btn-info' href=\"donlot.php?files=$baris[files]\"> Download </a>
                            </td>
			               </tr>";
                        };
                    };
                ?>
</table>