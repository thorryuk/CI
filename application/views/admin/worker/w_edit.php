<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <div class="row">

        <form action="<?php base_url('admin_controller/edit_w') ?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $worker->id ?>" />

            <div class="form-group row">
                <label for="Nama" class="col-sm-2 col-form-label">Name*</label>
                <div class="col-sm-10">
                    <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $worker->nama ?>" />
                </div>
                <div class="invalid-feedback">
                    <?php echo form_error('nama') ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="Nip" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                    <input class="form-control <?php echo form_error('nip') ? 'is-invalid' : '' ?>" type="text" name="nip" placeholder="Nomor Izin Pegawai" value="<?php echo $worker->nip ?>" />
                </div>
                <div class=" invalid-feedback">
                    <?php echo form_error('nip') ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" placeholder="Alamat" value="<?php echo $worker->alamat ?>" />
                </div>
                <div class=" invalid-feedback">
                    <?php echo form_error('alamat') ?>
                </div>
            </div>

            <input class="btn btn-success" type="submit" name="btn" value="Update Data" />
        </form>

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->