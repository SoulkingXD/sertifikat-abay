    
      <!-- partial:partials/_navbar.html -->
     
      <!-- partial -->
      
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-folder-image  "></i>
                </span> Generate
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                  </li>
                </ul>
              </nav>
        </div>
            <div style="float: left">
                                    <a href="generate/tambah"class="btn btn-outline-primary"><span class="mdi mdi-folder-plus"></span> Tambah Generate</a>
                                    <br><br>                             
            </div>
            <?= $this->session->set_flashdata('pesan'); ?>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Generate</h4>
                                <br></br>
                                <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th> No </th>
                                    <th> Certificate Id</th>
                                    <th> User Id</th>
                                    <th> Event Id</th>

                                    <th> Aksi </th>
                                    </tr>
                                </thead>

                                <?php $no = 1;
                            foreach ($certificate_assignment as $cas) : ?>
                                <tbody>
                                    <tr class="text-center text-body">
                                        <td class="text-body"><?= $no++ ?></td>
                                        <td class="text-body"><?= $cas->certificate_id ?></td>
                                        <td class="text-body"><?= $cas->user_id ?></td>
                                        <td class="text-body"><?= $cas->event_id ?></td>
                                        <td>
                                            <a href="<?= base_url('generate/Pdfview') ?>" class="btn btn-primary btn-sm"></i>Download</a>
                                            <a href="<?= base_url('generate/delete' . $cas->assignment_id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach ?>
                               
                                </table>
                            </div>
                            </div>
                        </div>
                        
                        <!-- Button trigger modal -->

