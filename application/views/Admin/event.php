    
      <!-- partial:partials/_navbar.html -->
     
      <!-- partial -->
      
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Event
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                  </li>
                </ul>
              </nav>
        </div>
            <div style="float: left">
                                    <a href="event/tambah"class="btn btn-outline-primary"><span class="mdi mdi-folder-plus"></span> Tambah Event</a>
                                    <br><br>                             
            </div>
            <?= $this->session->set_flashdata('pesan'); ?>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Event</h4>
                                <br></br>
                                <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th> No </th>
                                    <th> Nama</th>
                                    <th> Date</th>
                                    <th> Location</th>
                                    <th> Organizer </th>
                                    <th> Aksi </th>
                                    </tr>
                                </thead>
                                <?php $no = 1;
                                foreach ($events_certificates as $evn) : ?>
                                <tbody>
                                    <tr class="text-center text-dark">
                                      <td class="text-body"><?= $no++ ?></td>
                                      <td class="text-body"><?= $evn->event_name ?></td>
                                      <td class="text-body"><?= $evn->event_date ?></td>
                                      <td class="text-body"><?= $evn->location ?></td>
                                      <td class="text-body"><?= $evn->organizer?></td>
                                      <td>


                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?= $evn->event_id ?>"> <i class="mdi mdi-wrench"></i></button>
                                        <a href="<?= base_url('event/hapus/' .$evn->event_id) ?>" class="btn btn-danger btn-sm " onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">
                                        <i class="mdi mdi-delete"></i></a>
                                        
                                      </td>
                                    </tr>
                                </tbody>
                                <?php endforeach ?>
                                </table>
                            </div>
                            </div>
                        </div>
                        
                        <!-- Button trigger modal -->

<!--  Modal Edit -->
<?php foreach ($events_certificates as $evn) : ?>
                <div class="modal" id="edit<?= $evn->event_id ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Data Event</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="<?= base_url('event/edit/' . $evn->event_id) ?>" method="POST">
                                    <div class="form-group text-body">
                                        <label>Event Name</label>
                                        <input type="text" name="event_name" class="form-control" value="<?= $evn->event_name ?>">
                                        <?= form_error('event_name', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group text-body">
                                        <label>Event Date</label>
                                        <input type="date" name="event_date" class="form-control" value="<?= $evn->event_date ?>">
                                        <?= form_error('event_date', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group text-body">
                                        <label>Location</label>
                                        <textarea name="location" class="form-control"><?= $evn->location ?></textarea>
                                        <?= form_error('location', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group text-body">
                                        <label>Organizer</label>
                                        <input type="text" name="organizer" class="form-control" value="<?= $evn->organizer ?>">
                                        <?= form_error('organizer', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div><br>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"> </i> Simpan </button>
                                        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"> </i> Reset </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            <!-- end Modal Edit -->

                      </div>
                        
                    