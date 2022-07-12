<?php
 
class koneksi{
 
   public $koneksi;
 
   function __construct(){
       $this->koneksi=mysqli_connect("localhost","root","","db_pelatihan27");
       if(mysqli_connect_errno()){
           echo "koneksi gagal";
 
       }/*else {
           echo "koneksi berhasil";
       }*/
   }
 
 
   //data matkul
   function get_matkul(){
     
       $data=$this->koneksi->query("select * from tbl_matkul");
       return $data;
 
   }
 
   function add_matkul($kd_matkul,$nama_matkul,$sks){
       $this->koneksi->query("insert into tbl_matkul values('$kd_matkul','$nama_matkul','$sks')");
       return true;
   }
 
 	function get_matkulById($kd_matkul){
       $data=$this->koneksi->query("select * from tbl_matkul where kd_matkul='$kd_matkul'");
       return $data;
   }
 
   function update_matkul($kd_matkul,$nama_matkul,$sks){
       $this->koneksi->query("update tbl_matkul set nama='$nama_matkul', sks='$sks' where kd_matkul='$kd_matkul'");
      return true;
   }

   function delete_matkul($kd_matkul){
       $this->koneksi->query("delete from tbl_matkul where kd_matkul='$kd_matkul'");
       return true;
 
   }

   function get_user($username,$password){
        $data=$this->koneksi->query("select * from tbl_user where username='$username' and password='$password'");
        return $data;
   
   }

   function get_dosen(){
    $data=$this->koneksi->query("select * from tbl_dosen");
    return $data;
	}
	function add_dosen($kd_dosen,$nama_dosen,$alamat){
		$this->koneksi->query("INSERT INTO tbl_dosen values('$kd_dosen','$nama_dosen','$alamat')");
		return true;
	}
	function get_dosenById($kd_dosen){
		$data=$this->koneksi->query("SELECT * FROM tbl_dosen WHERE kd_dosen='$kd_dosen'");
		return $data;
	}
	function update_dosen($kd_dosen,$nama_dosen,$alamat){
		$this->koneksi->query("UPDATE tbl_dosen set nama='$nama_dosen', alamat='$alamat' where kd_dosen='$kd_dosen'");
		return true;
	}
	function delete_dosen($kd_dosen){
		$this->koneksi->query("DELETE FROM tbl_dosen WHERE kd_dosen='$kd_dosen'");
		return true;
	}
	

	function get_jadwal(){
       $data=$this->koneksi->query("SELECT j.id,j.kd_matkul, j.kd_dosen, j.ruang, j.waktu, m.nama as nama_matkul, d.nama as nama_dosen FROM tbl_jadwal j INNER JOIN tbl_matkul m ON m.kd_matkul=j.kd_matkul INNER JOIN tbl_dosen d ON d.kd_dosen=j.kd_dosen");
       return $data;
   }

   function add_jadwal($kd_dosen,$kd_matkul,$ruang,$waktu){
    $this->koneksi->query("insert into tbl_jadwal(kd_dosen,kd_matkul,ruang,waktu) values('$kd_dosen','$kd_matkul','$ruang','$waktu')");
    return true;
	}
	function get_jadwalById($id){
		$data=$this->koneksi->query("SELECT * FROM tbl_jadwal WHERE id='$id'");
		return $data;
	}
	
	function delete_jadwal($id){
       $this->koneksi->query("delete from tbl_jadwal where id='$id'");
        return true;
   }


   function get_mahasiswa(){
		$data=$this->koneksi->query("SELECT * FROM tbl_mahasiswa");
		return $data;
	}
	function add_mahasiswa($nim,$nama_mahasiswa,$jurusan,$alamat){
		$this->koneksi->query("INSERT INTO tbl_mahasiswa values('$nim','$nama_mahasiswa','$jurusan','$alamat')");
		return true;
	}
	function get_mahasiswaById($nim){
		$data=$this->koneksi->query("SELECT * FROM tbl_mahasiswa WHERE nim='$nim'");
		return $data;
	}
	function update_mahasiswa($nim,$nama_mahasiswa,$jurusan,$alamat){
		$this->koneksi->query("UPDATE tbl_mahasiswa set nama_mahasiswa='$nama_mahasiswa', jurusan='$jurusan', alamat='$alamat' where nim='$nim'");
		return true;
	}
	function delete_mahasiswa($nim){
		$this->koneksi->query("DELETE FROM tbl_mahasiswa WHERE nim='$nim'");
		return true;
	}	



	function get_semester(){
		$data=$this->koneksi->query("SELECT * FROM tbl_semester");
		return $data;
	}
	function add_semester($kd_semester,$semester){
		$this->koneksi->query("INSERT INTO tbl_semester values('$kd_semester','$semester')");
		return true;
	}
	function get_semesterById($kd_semester){
		$data=$this->koneksi->query("SELECT * FROM tbl_semester WHERE kd_semester='$kd_semester'");
		return $data;
	}
	function update_semester($kd_semester,$semester,$alamat){
		$this->koneksi->query("UPDATE tbl_semester set semester='$semester', where kd_semester='$kd_semester'");
		return true;
	}
	function delete_semester($kd_semester){
		$this->koneksi->query("DELETE FROM tbl_semester WHERE kd_semester='$kd_semester'");
		return true;
	}
	
	
	function get_krs(){
	$data=$this->koneksi->query("SELECT * FROM tbl_krs");
		return $data;
	}
	function add_krs($id,$id_jadwal){
		$this->koneksi->query("INSERT INTO tbl_krs values('$id','$id_jadwal')");
		return true;
	}
	function get_krsById($id){
		$data=$this->koneksi->query("SELECT * FROM tbl_krs WHERE id='$id'");
		return $data;
	}
	function update_krs($id,$id_jadwal,$alamat){
		$this->koneksi->query("UPDATE tbl_krs set id_jadwal='$id_jadwal', where id='$id'");
		return true;
	}
	function delete_krs($id){
		$this->koneksi->query("DELETE FROM tbl_krs WHERE id='$id'");
		return true;
	}



   //
}
 $data=new koneksi();
