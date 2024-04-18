
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-account-plus "></i>
                </span> Tambah Event
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
                    <h4 class="card-title">Masukan Event Tambahan</h4>
                    <p class="card-description">  </p>
                    <form action="<?= base_url('event/tambah_aksi')?>" method="POST">
                      <div class="form-group">
                        <label for="event_name">Event Name</label>
                        <input type="text" name ="event_name" class="form-control" id="event_name" placeholder="Masukan Nama">
                      </div>
                      <div class="form-group">
                        <label for="event_date">Tanggal</label>
                        <input type="date" name="event_date" class="form-control" id="event_date" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="location">Location</label>
                        <textarea class="form-control" name="location" id="location" placeholder="Masukan Alamat"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="organizer">Organizer</label>
                        <input type="text" class="form-control" name="organizer" id="organizer" placeholder="Masukan Organizer">
                      </div>
                      <button type="submit" class="btn btn-outline-primary me-2">Submit</button>
                      <button class="btn btn-outline-danger">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>