<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('sidebar') ?>
            <?php $this->load->view('navbar') ?>
            <div class="right-col" role="main">
                <div class="right_col col-md-10 col10-sm-10 offset-md-1">
                    <table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%" action="<?php echo site_url('MainController/daftarobatm') ?>">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Obat</th>
                                <th>Nama Obat</th>
                                <th>Jumlah Stok</th>
                                <th>Tanggal Dibuat</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            if ($obat) {
                                foreach ($obat as $ob) : ?>
                                    <tr>
                                        <th><?php echo $no++; ?></th>
                                        <th><?php echo $ob['obatalkes_kode'] ?></th>
                                        <th><?php echo $ob['obatalkes_nama'] ?></th>
                                        <th><?php echo $ob['stok'] ?></th>
                                        <th><?php echo $ob['created_date'] ?></th>
                                    </tr>
                            <?php endforeach;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Panggil Fungsi -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- Jquery DataTables -->
<script type="text/javascript" language="javascript" src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap dataTables Javascript -->
<script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('.table-paginate').dataTable();
    });
</script>