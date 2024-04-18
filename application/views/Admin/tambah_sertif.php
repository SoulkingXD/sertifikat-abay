
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-account-plus "></i>
                </span> Tambah Sertifikat
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
                    <form action="<?= base_url('certificate/tambah_data')?>" method="POST">
                    <div class="form-group text-body">
                                    <label for="participant_name">Participant Name</label>
                                    <select class="form-select" aria-label="Default select example" name="participant_name">
                                        <option selected></option>
                                        <?php foreach ($user as $usr) : ?>
                                            <option value="<?= $usr->username ?>">
                                                <?= $usr->username ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group text-body">
                                    <label for="event_name">Event Name</label>
                                    <select class="form-select" aria-label="Default select example" name="event_name">
                                        <option selected></option>
                                        <?php foreach ($event as $evn) : ?>
                                            <option value="<?= $evn->event_name ?>">
                                                <?= $evn->event_name ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                      <div class="form-group">
                        <label for="location">Tanggal</label>
                        <input type="date" name="event_date" class="form-control" id="event_date" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="organizer">Certificate Teks</label>
                        <input type="text" class="form-control" name="certificate_text" id="certificate_text" placeholder="Masukan Teks">
                      </div>
                      <button type="submit" class="btn btn-outline-primary me-2">Submit</button>
                      <button class="btn btn-outline-danger">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>