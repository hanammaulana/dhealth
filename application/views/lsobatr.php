
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('sidebar') ?>
            <?php $this->load->view('navbar') ?>
            <div class="container body">
                <div class="right_col col-md-9 col-sm-12 offset-md-1">
                    <table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%" action="<?php echo site_url('MainController/daftarobatm') ?>">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Obat</th>
                                <th>Stok</th>
                                <th>Keterangan</th>
                                <th>Bahan 1</th>
                                <th>Bahan 2</th>
                                <th>Bahan 3</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($obatr as $obr) : ?>
                                <tr>
                                    <th><?php echo $no++; ?></th>
                                    <th><?php echo $obr['nama_obat'] ?></th>
                                    <th><?php echo $obr['jumlah'] ?></th>
                                    <th><?php echo $obr['signa_nama'] ?></th>
                                    <th><?php echo $obr['bahan_1'] ?></th>
                                    <th><?php echo $obr['bahan_2'] ?></th>
                                    <th><?php echo $obr['bahan_3'] ?></th>
                                    <th><a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#Modal<?php echo $obr['obatnr_id'] ?>">Beli</a><br>
                                        <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#Modalt<?php echo $obr['obatnr_id'] ?>">Tambah</a>
                                    </th>
                                </tr>
                            <?php endforeach;
                            ?>
                        </tbody>
                    </table>
                    <?php
                    foreach ($obatr as $obr) : ?>
                        <div class="modal fade" id="Modal<?php echo $obr['obatnr_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Beli</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="editobatr">
                                            <input type="hidden" name="obatnr_id" value="<?php echo $obr['obatnr_id'] ?>">
                                            <label for="">Jumlah awal : </label>
                                            <input type="number" name="stok" value="<?php echo $obr['jumlah'] ?>"readonly>
                                            <br>
                                            <label for="">Jumlah Beli : </label>
                                            <input type="number" name="jumlah">
                                    </div>
                                    <div class="modal-footer-ob">
                                        <input class="btn btn-default submit" type="submit" value="Submit" style="margin-left:140px">
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach; ?>
                    <?php
                    foreach ($obatr as $obr) : ?>
                        <div class="modal fade" id="Modalt<?php echo $obr['obatnr_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="tambahobatracik">
                                            <input type="hidden" name="obatnr_id" value="<?php echo $obr['obatnr_id'] ?></">
                                            <label for="">Jumlah awal : </label>
                                            <input type="number" name="stok" value="<?php echo $obr['jumlah'] ?>"readonly>
                                            <br>
                                            <label for="">Tambah : </label>
                                            <input type="number" name="jumlah">>
                                    </div>
                                    <div class="modal-footer-ob">
                                        <input class="btn btn-default submit" type="submit" value="Submit" style="margin-left:140px">
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