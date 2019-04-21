<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    Detail
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th scope="row">#</th>
                            <td><?php echo $worker->id ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Nama</th>
                            <td><?php echo $worker->nama ?></td>
                        </tr>
                        <tr>
                            <th scope="row">NIP</th>
                            <td><?php echo $worker->nip ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat</th>
                            <td><?php echo $worker->alamat ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->