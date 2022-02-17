<table class="table table-bordered table-striped text-center">
        <tr>
        <th>Kode Supplier</th>
        <th>Nama Supplier</th>
        <th>Alamat</th>
        <th>No Telpon</th>
        <th>Email</th>
        <th>Files</th>
        <th colspan="3">Aksi</th>
    	</tr>
                <?php
                    include ("../koneksi.php");
                    include ("../seleksi_db.php");
                    
                    
                        $kata_cari =$_GET['kata_cari'];

                        $seleksi = "SELECT * FROM supplier
                                    WHERE 
                                        id like '%".$kata_cari."%' OR nama_supplier like '%".$kata_cari."%' OR alamat like '%".$kata_cari."%' OR telp like '%".$kata_cari."%' OR email like '%".$kata_cari."%' ORDER BY id ASC";
                    
                    $hasil_seleksi = mysqli_query ($koneksi , $seleksi);

                    if (!$hasil_seleksi){
                    echo "Proses penyeleksian Data Supplier gagal !!!";
                    } else {
                    while ($baris = mysqli_fetch_assoc ($hasil_seleksi)) {
                    echo "<tr>
                            <td>$baris[kd_supplier]</td>
                            <td>$baris[nama_supplier]</td>
                            <td>$baris[alamat]</td>
                            <td>$baris[telp]</td>
                            <td>$baris[email] </td>
                            <td>$baris[files]</td>
			                <td> 
			                <a class = 'btn btn-dark' href=\"donlot.php?files=$baris[files]\"> Download </a>
                            </td>
                
                            <td>
                            <a class = 'btn btn-info' href='formsupplier.php?action=edit&kd_supplier=$baris[kd_supplier]&
                                                             nama_supplier=$baris[nama_supplier]&
                                                             alamat=$baris[alamat]&
                                                             telp=$baris[telp]&
                                                             email=$baris[email]'>
                                                             Edit </a>
                            </td>
                            
                             <td>
                            <a class = 'btn btn-danger' href='hapussupplier.php?&id=$baris[id]'> Hapus </a>
                            </td>
			               </tr>";
                        };
                    };
                ?>
</table>
<center><a class = 'btn btn-dark' href="formsupplier.php"> Tambah Data Supplier </a></center>