<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-account-plus "></i>
                </span> Generate Sertifikat
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                  </li>
                </ul>
              </nav>
        </div>               


        <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Masukan Sertifikat Tambahan</h4>
                    <p class="card-description">  </p>
                    <form action="<?= base_url('generate/tambah_aksi')?>" method="POST">
                    <div class="form-group text-body">
                                    <label for="certificate_id">Sertifikat Teks</label>
                                    <select class="form-control" aria-label="Default select example" name="certificate_id">
                                        <option selected> - pilih - </option>
                                        <?php foreach ($certificate as $sft) { ?>
                                            <option value="<?= $sft->certificate_id ?>"><?= $sft->certificate_text ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group text-body">
                                    <label for="user_id">Nama Peserta</label>
                                    <select name="user_id" class="form-control">
                                        <option selected> - pilih - </option>
                                        <?php foreach ($users as $usr) { ?>
                                            <option value="<?= $usr->user_id ?>"><?= $usr->username ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group text-body">
                                    <label for="event_id">Nama Event</label>
                                    <select name="event_id" class="form-control">
                                        <option selected> - pilih - </option>
                                        <?php foreach ($event as $evn) { ?>
                                            <option value="<?= $evn->event_id ?>"><?= $evn->event_name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                      
                      <button type="submit" class="btn btn-outline-primary me-2">Submit</button>
                      <button class="btn btn-outline-danger">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>