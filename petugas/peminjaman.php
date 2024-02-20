<?php
  include 'header.php';
  ?>
  

<div class="container">
    <div clas="row" style="margin-top: 7rem;">
    <h2>Data Peminjaman</h2>
<table class="table my-7">
  <thead class="table table-dark">
    <tr>
      <th scope="col">peminjaman ID</th>
      <th scope="col">User ID</th>
      <th scope="col">Buku ID</th>
      <th scope="col">Tgl peminjaman</th>
      <th scope="col">tgl pengembalian</th>
      <th scope="col">status peminjaman</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button class="favorite styled" type="button">detail</button>
      <button class="favorite styled" type="button">Ubah</button>
      <button class="favorite styled" type="button">Hapus</button></td>
      

    </tr>
    
  </tbody>
</table>
</div>
</div>



<?php
  include 'footer.php';
?>