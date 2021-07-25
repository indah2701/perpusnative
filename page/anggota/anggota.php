

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nisn</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Jurusan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_anggota");

                                            while ($data= $sql->fetch_assoc()) {
                                                
                                            $jk = ($data['jk']==l)?"Laki-laki":"Wanita";

                                            $jurusan = ($data['jurusan']==ipa)?"IPA":"IPS";
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nisn'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['tempat_lahir'];?></td>
                                            <td><?php echo $data['tgl_lahir'];?></td>
                                            <td><?php echo $jk;?></td>
                                            <td><?php echo  $jurusan ;?></td>
                                            <td>
                                                <a href="?page=anggota&aksi=ubah&id=<?php echo $data['nisn']; ?>" class="btn btn-info" ><i class="fa fa-edit"></i> Ubah</a>
                                                
                                                <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ... ???')" href="?page=anggota&aksi=hapus&id=<?php echo $data['nisn']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                                            </td>
                                        </tr>


                                        <?php  } ?>
                                    </tbody>

                                    </table>

                                  </div>

                                  <a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>


                                  <a href="./laporan/laporan_anggota.php" class="btn btn-warning" target="blank" style="margin-top: 8px; margin-left: 5px;"><i class="fa fa-print"></i> ExportToPdf</a>


                        </div>
                     </div>
                   </div>
     </div>                           