<style>
    .modal-body-ob {
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .modal-footer-ob {
        margin-bottom: 15px;
        background: #f7f7f7;

    }
</style>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('sidebar') ?>
            <?php $this->load->view('navbar') ?>
            <div class="container body">
                <div class="right_col col-md-15 col-sm-9 offset-md-1">
                    <table id="" class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%" action="<?php echo site_url('MainController/daftarobatm') ?>">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Obat</th>
                                <th>Stok</th>
                                <th>Keterangan</th>
                                <th>Bahan</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($obatnr as $obnr) : ?>
                                <tr>
                                    <th><?php echo $no++; ?></th>
                                    <th><?php echo $obnr['nama_obat'] ?></th>
                                    <th><?php echo $obnr['jumlah'] ?></th>
                                    <th><?php echo $obnr['signa_nama'] ?></th>
                                    <th><?php echo $obnr['obatalkes_nama'] ?></th>
                                    <th><a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#Modal<?php echo $obnr['obat_id'] ?>">Beli</a>
                                        <br>
                                        <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#Modalt<?php echo $obnr['obat_id'] ?>">Tambah</a>
                                    </th>
                                </tr>
                            <?php endforeach;
                            ?>
                        </tbody>
                    </table>
                    <?php
                    foreach ($obatnr as $obnr) : ?>
                        <div class="modal fade" id="Modal<?php echo $obnr['obat_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Beli</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="editobatnr">
                                            <input type="hidden" name="obat_id" value="<?php echo $obnr['obat_id'] ?></">
                                            <label for="">Jumlah awal : </label>
                                            <input type="number" name="stok" value="<?php echo $obnr['jumlah'] ?>"readonly>
                                            <br>
                                            <label for="">Jumlah Beli : </label>
                                            <input type="number" name="jumlah">
                                    </div>
                                    <div class="modal-footer-ob">
                                        <input class="btn btn-default submit" type="submit" value="Submit" style="margin-left:140px" onclick="">
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach; ?>
                    <?php
                    foreach ($obatnr as $obnr) : ?>
                        <div class="modal fade" id="Modalt<?php echo $obnr['obat_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="tambahobatnr">
                                            <input type="hidden" name="obat_id" value="<?php echo $obnr['obat_id'] ?></">
                                            <label for="">Jumlah awal : </label>
                                            <input type="number" name="stok" value="<?php echo $obnr['jumlah'] ?>"readonly>
                                            <br>
                                            <label for="">Tambah : </label>
                                            <input type="number" name="jumlah">>
                                    </div>
                                    <div class="modal-footer-ob">
                                        <input class="btn btn-default submit" type="submit" value="Submit" style="margin-left:140px" onclick="">
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<!-- Panggil Fungsi -->
<!-- Jquery DataTables -->
<script type="text/javascript" language="javascript" src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap dataTables Javascript -->
<script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('.table-paginate').dataTable();
    });
</script>