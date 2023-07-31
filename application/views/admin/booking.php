<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Booking</h1>
          
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
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Table Number</th>
                                        <th scope="col">Person</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Proof of Payment</th>
                                        <th scope="col">Order</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach($booking as $row){
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?>.</th>
                                        <td><?= $row->nama ?></td>
                                        <td><?= $row->email ?></td>
                                        <td><?= $row->no_hp ?></td>
                                        <td><?= $row->no_meja ?></td>
                                        <td><?= $row->select_person ?></td>
                                        <?php
                                        if($row->status == "Selesai") {
                                            echo '<td style="color: green">Selesai</td>';
                                        } else if($row->status == "Proses") {
                                            echo '<td style="color: blue">Proses</td>';
                                        } else {
                                            echo '<td style="color: orange">Pending</td>';
                                        }
                                        ?>
                                        <td><?= $row->time ?></td>
                                        <td><?= $row->date ?></td>
                                        <td>
                                            <?php if ($row->photo): ?>
                                                <a href="<?= base_url('uploads/' . $row->photo) ?>" target="_blank">
                                                    <img src="<?= base_url('uploads/' . $row->photo) ?>" alt="Photo" style="width: 100px;">
                                                </a>
                                            <?php else: ?>
                                                No photo uploaded
                                            <?php endif; ?>
                                        </td>
                                        <td><?= $row->pesanan ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/booking/edit_booking/'.$row->id_booking) ?>" class="btn btn-circle btn-rounded btn-primary"><i class="fa fa-edit" ></i> </a>
                                            <a href="<?= base_url('admin/booking/delete_booking/'.$row->id_booking) ?>" class="btn btn-circle btn-rounded btn-danger"><i class="fa fa-trash"></i> </a>
                                            
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


