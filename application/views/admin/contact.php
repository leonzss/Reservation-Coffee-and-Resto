<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Contact</h1>
          
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
                            
                                        <th scope="col">Person</th>
                            
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach($contact as $row){
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?>.</th>
                                        <td><?= $row->nama ?></td>
                                        <td><?= $row->email ?></td>
                                        <td><?= $row->select_person ?></td>
                                        
                                        <td><?= $row->deskripsi ?></td>
                                        
                            
                                        <td>
                            
                                            <a href="<?= base_url('admin/contact/delete_contact/'.$row->id_contact) ?>" class="btn btn-circle btn-rounded btn-danger"><i class="fa fa-trash"></i> </a>
                                            
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
		</div>


