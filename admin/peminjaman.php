<?php
  include 'header.php';
  ?>

<div class="container">
    <div clas="row" style="margin-top: 3rem;">
    <h2>Data Peminjaman</h2>
<table class="table my-3">
  <thead class="table table-dark">
    <tr>
      <th scope="col">peminjaman ID</th>
      <th scope="col">User ID</th>
      <th scope="col">Buku ID</th>
      <th scope="col">Tgl peminjaman</th>
      <th scope="col">tgl pengembalian</th>
      <th scope="col">status peminjaman</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
</div>

<?php
  include 'footer.php';
?>