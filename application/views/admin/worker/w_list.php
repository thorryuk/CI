<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row mb-3">
        <div>
            <h3>Worker List</h3>
            <tr>
                <td>
                    <a class="btn btn-primary btn-block" href="<?= base_url('admin_controller/add_w'); ?>" role="button">Tambah Data</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-block" href="<?= base_url('admin_controller/pdf'); ?>" role="button">Tampilkan PDF</a>
                </td>
            </tr>
        </div>
    </div>

    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $i = 0;
                        foreach ($worker as $worker) : $i++ ?>
                            <td>
                                <?php echo $i ?>
                            </td>
                            <td>
                                <?php echo $worker->nama ?>
                            </td>
                            <td>
                                <?php echo $worker->nip ?>
                            </td>
                            <td>
                                <?php echo $worker->alamat ?>
                            </td>
                            <td>
                                <a href="<?php echo site_url('admin_controller/detail_w/' . $worker->id) ?>" class="btn btn-small"><i class="fas fa-info-circle"></i> Detail</a>

                                <a href="<?php echo site_url('admin_controller/edit_w/' . $worker->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>

                                <a onclick="deleteConfirm('<?php echo site_url('admin_controller/delete_w/' . $worker->id) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->