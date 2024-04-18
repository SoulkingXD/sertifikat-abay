        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class=" mdi mdi-equal-box"></i>
                </span> Certificate
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                  </li>
                </ul>
              </nav>
        </div>
            <div style="float: left">
                                    <a href="certificate/tambah"class="btn btn-outline-primary"><span class="mdi mdi-folder-plus"></span> Tambah Sertifikat</a>
                                    <br><br>                             
            </div>
            <?= $this->session->set_flashdata('pesan'); ?>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Sertifikat</h4>
                                <br></br>
                                <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th> No </th>
                                    <th> Participant Name</th>
                                    <th> Event Name</th>
                                    <th> Event Date</th>
                                    <th> Certificate Text </th>
                                    <th> Aksi </th>
                                    </tr>
                                </thead>
                                <?php $no = 1;
                                foreach ($certificate as $certificates) : ?>
                                <tbody>
                                    <tr class="text-center text-dark">
                                      <td class="text-body"><?= $no++ ?></td>
                                      <td class="text-body"><?= $certificates->participant_name ?></td>
                                      <td class="text-body"><?= $certificates->event_name ?></td>
                                      <td class="text-body"><?= $certificates->event_date ?></td>
                                      <td class="text-body"><?= $certificates->certificate_text?></td>
                                      <td>

                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?= $certificates->certificate_id ?>"> <i class="mdi mdi-wrench"></i></button>
                                        <a href="<?= base_url('certificate/hapus/' .$certificates->certificate_id) ?>" class="btn btn-danger btn-sm " onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">
                                        <i class="mdi mdi-delete"></i></a>
                                        
                                      </td>
                                    </tr>
                                </tbody>
                                <?php endforeach ?>
                                </table>
                            </div>
                            </div>

                            <!-- modal edit sertifikat -->

                        <?php foreach ($certificate as $sft) : ?>
                            <div class="modal" id="edit<?= $sft->certificate_id ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Sertifikat</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="<?= base_url('certificate/edit/' . $sft->certificate_id) ?>" method="POST">
                                                <div class="form-group text-body">
                                                    <label>Participant Name</label>
                                                    <input type="text" name="participant_name" class="form-control" value="<?= $sft->participant_name ?>">
                                                    <?= form_error('participant_name', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>
                                                <div class="form-group text-body">
                                                    <label>Event Name</label>
                                                    <input type="text" name="event_name" class="form-control" value="<?= $sft->event_name ?>">
                                                    <?= form_error('event_name', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>
                                                <div class="form-group text-body">
                                                    <label>Event Date</label>
                                                    <input type="date" name="event_date" class="form-control" value="<?= $sft->event_date ?>">
                                                    <?= form_error('event_date', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>
                                                <div class="form-group text-body">
                                                    <label>Certificate Text</label>
                                                    <input type="text" name="certificate_text" class="form-control" value="<?= $sft->certificate_text ?>">
                                                    <?= form_error('certificate_text', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div><br>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan </button>
                                                    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>

                        </div>