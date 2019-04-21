<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <div class="row">

        <form action="<?php base_url('admin_controller/edit_u') ?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $user->id ?>" />

            <div class="form-group row">
                <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $user->nama ?>" />
                </div>
                <div class="invalid-feedback">
                    <?php echo form_error('nama') ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="Nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input class="form-control <?php echo form_error('nik') ? 'is-invalid' : '' ?>" type="text" name="nik" placeholder="Nomor Izin Kependudukan" value="<?php echo $user->nik ?>" />
                </div>
                <div class=" invalid-feedback">
                    <?php echo form_error('nik') ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" placeholder="Alamat" value="<?php echo $user->alamat ?>" />
                </div>
                <div class=" invalid-feedback">
                    <?php echo form_error('alamat') ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="Email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" type="text" name="email" placeholder="Email" value="<?php echo $user->email ?>" />
                </div>
                <div class=" invalid-feedback">
                    <?php echo form_error('email') ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="Password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="password" name="password" placeholder="Password" value="<?php echo $user->password ?>" />
                </div>
                <div class=" invalid-feedback">
                    <?php echo form_error('password') ?>
                </div>
            </div>

            <input class="btn btn-success" type="submit" name="btn" value="Update Data" />
        </form>

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->