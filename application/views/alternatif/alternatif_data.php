<section class="content-header">
      <h1>Alternatif
        <small>Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Alternatif</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Alternatifs</h3>
                <div class="pull-right">
                    <a href="<?=site_url('Alternatif/add')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-Alternatif-plus"></i>Tambah
                    </a>
                </div>
            </div>
            <div class="box-body table responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Alternatif</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Kode</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) {?>
                    <tr>
                            <td><?=$no++?></td>
                            <td><?=$data->name?></td>
                            <td><?=$data->address?></td>
                            <td><?=$data->gender?></td>
                            <td><?=$data->email?></td>
                            <td><?=$data->kode?></td>
                            <td class="text-center" width="160px"> 
                                <a href="<?=site_url('alternatif/edit/'.$data->alternatif_id)?>" class="btn btn-primary btn-xs">
                                   <i class="fa fa-pencil"></i>Edit
                                </a>
                                <a href="<?=site_url('alternatif/del/'.$data->alternatif_id)?>" onclick="return confirm('apakah anda yakin ?')" class="btn btn-danger btn-xs">
                                   <i class="fa fa-trash"></i>Hapus
                                </a>

                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>