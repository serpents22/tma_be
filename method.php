<?php
require_once "db_connection.php";
class Mahasiswa 
{
 
   public  function get_mhss()
   {
      global $conn;
      $query="SELECT * FROM tbl_mahasiswa";
      $data=array();
      $result=$conn->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get List Mahasiswa Successfully.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }
 
   public function get_mhs($id=0)
   {
      global $conn;
      $query="SELECT * FROM tbl_mahasiswa";
      if($id != 0)
      {
         $query.=" WHERE id=".$id." LIMIT 1";
      }
      $data=array();
      $result=$conn->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get Mahasiswa Successfully.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
        
   }
 
   public function insert_mhs()
      {
         global $conn;
         $arrcheckpost = array('nim' => '', 'nama' => '', 'jk' => '', 'alamat' => '', 'jurusan'   => '');
         $hitung = count(array_intersect_key($_POST, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
               $result = mysqli_query($conn, "INSERT INTO tbl_mahasiswa SET
               nim = '$_POST[nim]',
               nama = '$_POST[nama]',
               jk = '$_POST[jk]',
               alamat = '$_POST[alamat]',
               jurusan = '$_POST[jurusan]'");
                
               if($result)
               {
                  $response=array(
                     'status' => 1,
                     'message' =>'Mahasiswa Added Successfully.'
                  );
               }
               else
               {
                  $response=array(
                     'status' => 0,
                     'message' =>'Mahasiswa Addition Failed.'
                  );
               }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Do Not Match'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
 
   function update_mhs($id)
      {
         global $conn;
         $arrcheckpost = array('nim' => '', 'nama' => '', 'jk' => '', 'alamat' => '', 'jurusan'   => '');
         $hitung = count(array_intersect_key($_POST, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
              $result = mysqli_query($conn, "UPDATE tbl_mahasiswa SET
              nim = '$_POST[nim]',
              nama = '$_POST[nama]',
              jk = '$_POST[jk]',
              alamat = '$_POST[alamat]',
              jurusan = '$_POST[jurusan]'
              WHERE id='$id'");
          
            if($result)
            {
               $response=array(
                  'status' => 1,
                  'message' =>'Mahasiswa Updated Successfully.'
               );
            }
            else
            {
               $response=array(
                  'status' => 0,
                  'message' =>'Mahasiswa Updation Failed.'
               );
            }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Do Not Match'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
 
   function delete_mhs($id)
   {
      global $conn;
      $query="DELETE FROM tbl_mahasiswa WHERE id=".$id;
      if(mysqli_query($conn, $query))
      {
         $response=array(
            'status' => 1,
            'message' =>'Mahasiswa Deleted Successfully.'
         );
      }
      else
      {
         $response=array(
            'status' => 0,
            'message' =>'Mahasiswa Deletion Failed.'
         );
      }
      header('Content-Type: application/json');
      echo json_encode($response);
   }
}

class Matakuliah 
{
 
   public  function get_matkuls()
   {
      global $conn;
      $query="SELECT * FROM tbl_matakuliah";
      $data=array();
      $result=$conn->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get List Matakuliah Successfully.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }
 
   public function get_matkul($id=0)
   {
      global $conn;
      $query="SELECT * FROM tbl_matakuliah";
      if($id != 0)
      {
         $query.=" WHERE id=".$id." LIMIT 1";
      }
      $data=array();
      $result=$conn->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get Matakuliah Successfully.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
        
   }
 
   public function insert_matkul()
      {
         global $conn;
         $arrcheckpost = array('nim' => '', 'nama' => '', 'jk' => '', 'alamat' => '', 'jurusan'   => '');
         $hitung = count(array_intersect_key($_POST, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
               $result = mysqli_query($conn, "INSERT INTO tbl_matakuliah SET
               nim = '$_POST[nim]',
               nama = '$_POST[nama]',
               jk = '$_POST[jk]',
               alamat = '$_POST[alamat]',
               jurusan = '$_POST[jurusan]'");
                
               if($result)
               {
                  $response=array(
                     'status' => 1,
                     'message' =>'Matakuliah Added Successfully.'
                  );
               }
               else
               {
                  $response=array(
                     'status' => 0,
                     'message' =>'Matakuliah Addition Failed.'
                  );
               }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Do Not Match'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
 
   function update_matkul($id)
      {
         global $conn;
         $arrcheckpost = array('nim' => '', 'nama' => '', 'jk' => '', 'alamat' => '', 'jurusan'   => '');
         $hitung = count(array_intersect_key($_POST, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
              $result = mysqli_query($conn, "UPDATE tbl_matakuliah SET
              nim = '$_POST[nim]',
              nama = '$_POST[nama]',
              jk = '$_POST[jk]',
              alamat = '$_POST[alamat]',
              jurusan = '$_POST[jurusan]'
              WHERE id='$id'");
          
            if($result)
            {
               $response=array(
                  'status' => 1,
                  'message' =>'Matakuliah Updated Successfully.'
               );
            }
            else
            {
               $response=array(
                  'status' => 0,
                  'message' =>'Matakuliah Updation Failed.'
               );
            }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Do Not Match'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
 
   function delete_matkul($id)
   {
      global $conn;
      $query="DELETE FROM tbl_matakuliah WHERE id=".$id;
      if(mysqli_query($conn, $query))
      {
         $response=array(
            'status' => 1,
            'message' =>'Matakuliah Deleted Successfully.'
         );
      }
      else
      {
         $response=array(
            'status' => 0,
            'message' =>'Mahasiswa Deletion Failed.'
         );
      }
      header('Content-Type: application/json');
      echo json_encode($response);
   }
}

class Nilai 
{
 
   public  function get_all_nilai()
   {
      global $conn;
      $query="SELECT * FROM tbl_nilai";
      $data=array();
      $result=$conn->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get List Nilai Successfully.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }
 
   public function get_nilai($id=0)
   {
      global $conn;
      $query="SELECT * FROM tbl_nilai";
      if($id != 0)
      {
         $query.=" WHERE id=".$id." LIMIT 1";
      }
      $data=array();
      $result=$conn->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get Nilai Successfully.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
        
   }
 
   public function insert_nilai()
      {
         global $conn;
         $arrcheckpost = array('nim' => '', 'nama' => '', 'jk' => '', 'alamat' => '', 'jurusan'   => '');
         $hitung = count(array_intersect_key($_POST, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
               $result = mysqli_query($conn, "INSERT INTO tbl_nilai SET
               nim = '$_POST[nim]',
               nama = '$_POST[nama]',
               jk = '$_POST[jk]',
               alamat = '$_POST[alamat]',
               jurusan = '$_POST[jurusan]'");
                
               if($result)
               {
                  $response=array(
                     'status' => 1,
                     'message' =>'Nilai Added Successfully.'
                  );
               }
               else
               {
                  $response=array(
                     'status' => 0,
                     'message' =>'Nilai Addition Failed.'
                  );
               }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Do Not Match'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
 
   function update_nilai($id)
      {
         global $conn;
         $arrcheckpost = array('nim' => '', 'nama' => '', 'jk' => '', 'alamat' => '', 'jurusan'   => '');
         $hitung = count(array_intersect_key($_POST, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
              $result = mysqli_query($conn, "UPDATE tbl_nilai SET
              nim = '$_POST[nim]',
              nama = '$_POST[nama]',
              jk = '$_POST[jk]',
              alamat = '$_POST[alamat]',
              jurusan = '$_POST[jurusan]'
              WHERE id='$id'");
          
            if($result)
            {
               $response=array(
                  'status' => 1,
                  'message' =>'Nilai Updated Successfully.'
               );
            }
            else
            {
               $response=array(
                  'status' => 0,
                  'message' =>'Nilai Updation Failed.'
               );
            }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Do Not Match'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
 
   function delete_nilai($id)
   {
      global $conn;
      $query="DELETE FROM tbl_nilai WHERE id=".$id;
      if(mysqli_query($conn, $query))
      {
         $response=array(
            'status' => 1,
            'message' =>'Nilai Deleted Successfully.'
         );
      }
      else
      {
         $response=array(
            'status' => 0,
            'message' =>'Nilai Deletion Failed.'
         );
      }
      header('Content-Type: application/json');
      echo json_encode($response);
   }
}


class scoresData 
{
   public  function getScores()
   {
      global $conn;
      $query=" SELECT
                  tbl_mahasiswa.nama_mahasiswa,
                  tbl_matakuliah.nama_matakuliah,
                  tbl_nilai.nilai,
                  CASE
                    WHEN tbl_nilai.nilai >= 70 THEN 'Lulus'
                    WHEN tbl_nilai.nilai < 70 THEN 'Tidak Lulus'
                  END ket_lulus
               FROM tbl_mahasiswa
               JOIN tbl_nilai
                 ON tbl_mahasiswa.id_mahasiswa = tbl_nilai.id_mahasiswa
               JOIN tbl_matakuliah
                 ON tbl_matakuliah.id_matakuliah = tbl_nilai.id_matakuliah;";
      $data=array();
      $result=$conn->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get Scores Success.',
                     'data' => $data,
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }
}
 
 ?>