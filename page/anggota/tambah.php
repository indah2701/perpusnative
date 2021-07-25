<script type="text/javascript">
    function validasi(form){
        if (form.nisn.value=="") {
            alert("Nisn Tidak Boleh Kosong");
            form.nisn.focus();
            return(false);
        }if (form.nama.value=="") {
            alert("Nama Tidak Boleh Kosng");
            form.nama.focus();
            return(false);
        }if (form.tmpt_lahir.value=="") {
            alert("tempat Lahir Tidak Boleh Kosong");
            form.tmpt_lahir.focus();
            return(false);
        }if (form.tgl.value=="") {
            alert("Tanggal Tidak Boleh Kosong");
            form.tgl.focus();
            return(false);
        }
        return(true);
    }
</script>
<div class="panel panel-primary">
<div class="panel-heading">
Tambah Anggota
</div>

  <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" onsubmit="return validasi(this)">
                                        <div class="form-group">
                                            <label>NISN</label>
                                            <input class="form-control" name="nisn"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br/>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="l" name="jk" /> Laki-laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="p" name="jk" /> Wanita
                                            </label>

                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <select class="form-control" name="jurusan">
                                                <option value="ipa">IPA</option>
                                                <option value="ips">IPS</option>
                                            </select>
                                        </div>



                                        <div>
                                            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                        </div>
                                </div>

                            </form>
                            </div>
</div> 
</div>
</div>
<?php

    $nisn = $_POST ['nisn'];
    $nama = $_POST ['nama'];
    $tempat_lahir = $_POST ['tempat_lahir'];
    $tgl_lahir = $_POST ['tgl_lahir'];
    $jk = $_POST ['jk'];
    $jurusan = $_POST ['jurusan'];

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        
        $sql = $koneksi->query("insert into tb_anggota (nisn, nama, tempat_lahir, tgl_lahir, jk, jurusan)values('$nisn', '$nama', '$tempat_lahir', '$tgl_lahir', '$jk', '$jurusan')");

        if ($sql) {
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=anggota";

                </script>
            <?php
        }
    }

 ?>