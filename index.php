<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  <title>TMA TEST</title>
</head>
<body>
  <div class="container">
    <div class="table-container">
      <table id="daftarNilai" class="table-hover">
        <thead>
          <tr id="thRow" class="row">
          </tr>
        </thead>
        <tbody>
          <!-- <?php include 'range.php' ?> -->
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  </div>

</body>
</html>

<script>
  const tHeadDatas = ['Nama Mahasiswa', 'Nama Matakuliah', 'Nilai', 'Keterangan Lulus']
  const tHeadRow = document.getElementById('thRow');
      for (let tHeadData of tHeadDatas) {
        const th = document.createElement('th');
        th.classList.add("col")
        console.log(tHeadData)
        th.innerHTML = tHeadData;
        tHeadRow.appendChild(th);
      }

  $(document).ready( function () {
    $('#daftarNilai').DataTable();
  });
</script>
