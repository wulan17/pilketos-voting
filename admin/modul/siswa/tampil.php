<?php include "atas.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrator Pilketos
        <small>Pemilihan Ketua OSIS</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="."><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="?m=siswa"><i class="fa fa-laptop"></i> Siswa</a></li>
        <li class="active">Daftar</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title col-xs-12 text-center">Daftar Siswa</h3>
	      <a href="?m=siswa&s=tambah" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Tambah Siswa</a>
              <a href="?m=siswa&s=import" class="btn btn-large btn-danger"><i class="glyphicon glyphicon-plus"></i> &nbsp; Import Siswa .xlsx</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                
<?php
include "../sambungan.php";
$sql="SELECT siswa.*, kelas.kelas FROM siswa,kelas WHERE kelas.idkelas=siswa.idkelas ORDER BY nis";
$query=mysqli_query($koneksi,$sql);
if(mysqli_num_rows($query)==0){
	echo '              <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr bgcolor="#ccc">
                  <th>No</th>
                  <th>Nomer Induk Siswa</th>
                  <th>Nama Lengkap</th>
                  <th>Kelas</th>
                  <th>Memilih</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>';
	echo "<td colspan='9'>Data Masih Kosong</td>";
}else{
	echo '              <table id="pilkasis2" class="table table-bordered table-hover table-striped">
                <thead>
                <tr bgcolor="#ccc">
                  <th>No</th>
                  <th>No Induk Siswa</th>
                  <th>Nama Lengkap</th>
                  <th>Kelas</th>
                  <th>Memilih</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>';
	$no=1;
	while($r=mysqli_fetch_assoc($query)){
	  echo "<tr>";
		echo "<td>$no</td>";
		echo "<td><a href='?m=siswa&s=detail&nis=".$r['nis']."'>".$r['nis']."</a></td>";
		echo "<td>".$r['nama']."</td>";
		echo "<td>".$r['kelas']."</td>";
                echo "<td>".$r['memilih']."</td>";
		echo '<td><a href="index.php?m=siswa&s=edit&nis='.$r['nis'].'"><i class="fa fa-edit"></i></a> | <a href="index.php?m=siswa&s=hapus&nis='.$r['nis'].'" onclick="return confirm(\'Yakin Akan dihapus?\')"><i class="fa fa-remove"></i></a></td>';
	  echo "</tr>";
		$no++;
	}
}
?>
                </tbody>
                <tfoot>
                <tr bgcolor="#ccc">
                  <th>No</th>
                  <th>No Induk Siswa</th>
                  <th>Nama Lengkap</th>
                  <th>Kelas</th>
                  <th>Memilih</th>
                  <th>Opsi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
<?php include "bawah.php"; ?>
