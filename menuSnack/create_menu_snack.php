<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                  <form class="forms-sample" action="../inc/proses.php" method="post">
                    <div class="form-group">
                      <label for="exampleInputNamaMenu">Nama Snack</label>
                      <input type="text" class="form-control" id="exampleInputNamaMenu" placeholder="Nama Menu" name="namaMenu">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputHargaMenu">Harga</label>
                      <input type="text" class="form-control" id="exampleInputHargaMenu" placeholder="Harga Menu" name="hargaMenu">
                    </div>
                    <div class="invisible">
                        <input type="text" id="makeid" name="kategori" class="form-control" value="<?php echo 3; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary me-2" name="create_menu">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>