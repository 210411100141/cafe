<?php
if (isset($_GET['id_menu'])){
  $id=$_GET['id_menu'];
}
?><div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                  <form class="forms-sample" action="../inc/proses.php" method="post">
                    <div class="invisible">
                        <input type="text" id="makeid" name="id_menu" class="form-control" value="<?php echo $id; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNamaMenu">Nama Menu</label>
                      <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM menu WHERE id_menu='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                      <input type="text" class="form-control" id="exampleInputNamaMenu" placeholder="Nama Menu" name="namaMenu" value="<?php echo $data['nama_menu']; ?>">
                      <?php } ?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputHargaMenu">Harga</label>
                      <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM menu WHERE id_menu='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                      <input type="text" class="form-control" id="exampleInputHargaMenu" placeholder="Harga Menu" name="hargaMenu"value="<?php echo $data['harga']; ?>">
                      <?php } ?>
                    </div>
                    <button type="submit" class="btn btn-primary me-2" name="update_menu">Update</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>