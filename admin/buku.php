<?php
  include 'header.php';
  ?>

<div class="container">
    <div clas="row" style="margin-top: 5rem;">
    <h2>Data buku</h2>
<table class="table my-5">
  <thead class="table table-dark">
    <tr>
      <th scope="col">Buku ID</th>
      <th scope="col">Judul</th>
      <th scope="col">penulis</th>
      <th scope="col">penerbit</th>
      <th scope="col">tahun penerbit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>1982</td>
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