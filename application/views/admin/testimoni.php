<div class="container-fluid"> 
 
    <!-- Page Heading --> 
    <div class="d-sm-flex align-items-center justify-content-between mb-4"> 
        <h1 class="h3 mb-0 text-gray-800">Testimoni</h1> 
    </div> 
 
    <!-- Content Row --> 
    <div class="row"> 
        <div class="col-md-12"> 
            <?= $this->session->flashdata('pesan'); ?> 
            <div class="card"> 
                <div class="table-responsive shadow-sm"> 
                    <table class="table table-hover table-borderless"> 
                        <thead> 
                            <tr class="table-primary"> 
                                <th scope="col">No</th> 
                                <th scope="col">Name</th> 
                                <th scope="col">Email</th> 
                                <th scope="col">Deskripsi</th> 
                                <th scope="col">Status</th> 
                                <th scope="col">Action</th> 
                            </tr> 
                        </thead> 
                        <tbody> 
                            <?php 
                            $no = 1; 
                            foreach ($testimoni as $row) { 
                            ?> 
                                <tr> 
                                    <th scope="row"><?= $no++ ?>.</th> 
                                    <td><?= $row->nama ?></td> 
                                    <td><?= $row->email ?></td> 
                                    <td><?= $row->deskripsi ?></td> 
                                    <td><?= $row->status ?></td> 
                                    <td> 
                                        <?php if ($row->status == 'pending') { ?> 
                                            <a href="<?= base_url('admin/testimoni/approve_testimoni/'.$row->id_testimoni) ?>" class="btn btn-circle btn-rounded btn-success" title="Approve"><i class="fa fa-check"></i></a> 
                                            <a href="<?= base_url('admin/testimoni/reject_testimoni/'.$row->id_testimoni) ?>" class="btn btn-circle btn-rounded btn-danger" title="Reject"><i class="fa fa-times"></i></a> 
                                        <?php } else { ?> 
                                            <a href="<?= base_url('admin/testimoni/delete_testimoni/'.$row->id_testimoni) ?>" class="btn btn-circle btn-rounded btn-danger" title="Delete"><i class="fa fa-trash"></i></a> 
                                        <?php } ?> 
                                    </td> 
                                </tr> 
                            <?php } ?> 
                        </tbody> 
                    </table> 
                </div> 
            </div> 
        </div> 
    </div> 
</div>