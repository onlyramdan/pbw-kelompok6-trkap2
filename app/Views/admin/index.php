<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container" >
<h2 class="mt-3 mb-2 text-center">Daftar Pelatihan dan Event</h2>
<?php if(session()->getFlashdata('pesan')) : ?>
<div class="alert alert-success" role="alert">
  <?= session()->getFlashdata('pesan'); ?>
</div>
<?php endif; ?>
<a href="/admin/create">
          <button id="button" type="button" class="btn text-light mt-5 mb-5 shadow" style="--bs-btn-border-radius: 30rem; background-color: #fbbb90">Tambah data Event dan Pelatihan</button></a>
<table id="example" class="table table-striped mt-5 mb-5 text-center">
<thead class="text-center">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Judul</th>
      <th scope="col">Gambar</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Link Pendaftaran</th>
      <th scope="col">Kategori</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($event as $row) : ?>
    <tr>
      <th scope="row"><?= $row['id']; ?></th> 
      <td><?= $row['judul']; ?></td>
      <td><img height="100" width="150" src="/img/<?= $row['gambar']; ?>" alt="" srcset=""> <br><?= $row['gambar']; ?> </td>
      <td><?= $row['deskripsi']; ?></td>
      <td><?= $row['linkpendaftaran']; ?></td>
      <td><?= $row['kategori']; ?></td>
      <td>
      <a href="/event/edit/<?= $row['id']; ?>">
          <button id="button" type="button" class="btn text-light mb-2 shadow" style="--bs-btn-border-radius: 30rem; background-color: #fbbb90">Edit</button></a>
      <a href="/event/delete/<?= $row['id']; ?>"onclick="return confirm('apakah yakin hapus data')">
          <button id="button" type="button" class="btn text-light shadow" style="--bs-btn-border-radius: 30rem; background-color: #fbbb90">Hapus</button></a>

      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/searchpanes/2.1.0/js/dataTables.searchPanes.min.js"></script>
<script src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script>
  $(document).ready(function () {
    // Create DataTable
    var table = $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
 
    // Create the chart with initial data
    var container = $('<div/>').insertBefore(table.table().container());
 
    var chart = Highcharts.chart(container[0], {
        chart: {
            type: 'pie',
        },
        title: {
            text: 'Perbandinggan Pelatihan dan Event',
        },
        series: [
            {
                data: chartData(table),
            },
        ],
    });
 
    // On each draw, update the data in the chart
    table.on('draw', function () {
        chart.series[0].setData(chartData(table));
    });
});
 
function chartData(table) {
    var counts = {};
 
    // Count the number of entries for each position
    table
        .column(5, { search: 'applied' })
        .data()
        .each(function (val) {
            if (counts[val]) {
                counts[val] += 1;
            } else {
                counts[val] = 1;
            }
        });
 
    // And map it to the format highcharts uses
    return $.map(counts, function (val, key) {
        return {
            name: key,
            y: val,
        };
    });
}
</script>
<?= $this->endSection('content'); ?>
