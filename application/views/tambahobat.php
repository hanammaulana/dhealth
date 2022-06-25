<style>
    #height{
        height : 600px
    }
</style>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('sidebar') ?>
            <?php $this->load->view('navbar') ?>
            <div class="right_col col-md-10 col10-sm-10 offset-md-1" role="main" id="height">
                <div id="container body" class="col-md-6 col-sm-6 offset-md-3">
                    <form action="<?php echo ('addobatnr') ?>">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example1">Nama Obat : </label>
                            <input type="text" id="obat" class="form-control" name="obat" >
                        </div>
                        <div class="form-outline mb-4">
                            <label for="signa">Signa:</label>
                            <br>
                            <select id="signa_id" class="form_control" name="signa">
                                <option value="" name="signa" hidden selected>-- Pilih Signa --</option>
                                <?php
                                foreach ($signa as $sg) {
                                    echo "<option value='" . $sg['signa_id'] . "'>" . $sg['signa_nama'] . "</option>";
                                }
                                echo "
		</select>"
                                ?>
                            </select>
                        </div>
                        <div class="form-outline mb -4">
                            <label class="">Bahan <span class="required">*</span></label>
                            <br>
                            <select id="bahan" class="form_control" name="bahan_1">
                                <option value="" name="bahan_1" hidden selected>-- Pilih Bahan --</option>

                                <?php
                                foreach ($bahan as $bh) {
                                    echo "<option value='" . $bh['obatalkes_id'] . "'>" . $bh['obatalkes_nama'] . "</option>";
                                }
                                echo "
		</select>"
                                ?>
                            </select>
                        </div>
                        <div class="form-outline mb-4">
                            <div>
                                <label class="form-label" for="form4Example1">Jumlah</label>

                                <input type="number" id="form4Example1" class="form-control" name="jumlah">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 offset-md-3">

                            <button type="submit" class="btn btn-success" value="Submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>