<section class="content-header">
      <h1>alternatifs
        <small>Data Alternatif</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">alternatif</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php $this->view('message') ?>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?=ucfirst($page)?> alternatif</h3>
                <div class="pull-right">
                    <a href="<?=site_url('alternatif')?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i>Kembali
                    </a>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4" >
                        <?php echo form_open_multipart('alternatif/process') ?>

                            <div class="form-group">
                                <input type="hidden" name="id" value="<?=$row->alternatif_id?>">
                                <label for="alternatif_name">Nama alternatif</label>
                                <input type="text" name="alternatif_name" value="<?=$row->name?>" class="form-control" required>
                                
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <!-- <input type="text" name="addr" value="<?=$row->address?>" class="form-control" required> -->
                                <textarea name="addr" class="form-control" required><?php $row->address?></textarea>
                                
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <!-- <input type="text" name="desc" value="<?=$row->description?>" class="form-control" required> -->
                                <select name="gender" class="form-control" required>
                                    <option value="">=Pilihan=</option>
                                    <option value="L" <?=$row->gender == 'L' ? 'selected' : '' ?>>Laki-Laki</option>
                                    <option value="P" <?=$row->gender == 'P' ? 'selected' : '' ?>>Perempuan</option>
                                </select>
                                
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="<?=$row->email?>" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>kode</label>
                                <input type="text" name="kode" value="<?=$row->kode?>" class="form-control" required>
                                
                            </div>
                            
                           
                            <div class="form-group">
                                <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">
                                    <i class="fa fa-paper-plane"></i>Simpan
                                </button>
                                <button type="reset" class="btn btn-flat" >Reset</button>
                            </div>
                        <?php echo form_close() ?>

                    </div>
                </div>
            </div>
        </div>

    </section>