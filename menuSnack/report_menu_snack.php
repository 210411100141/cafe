
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered table</h4>
                  <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Nama Menu
                          </th>
                          <th>
                            Harga Menu
                          </th>
                          <th>
                            Kategori
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                      </thead>
                      <?php
                        require("../inc/config.php");
                            $cari=mysqli_query($conn, "SELECT id_menu,nama_menu,harga,kategori.nama_kategori FROM menu INNER JOIN kategori ON menu.id_kategori = kategori.id_kategori WHERE menu.id_kategori = '3'");
                            $no=0;
                            while($data=mysqli_fetch_array($cari)){
                            $no++;
                            ?>
                      <tbody>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['nama_menu']; ?></td>
                            <td><?php echo $data['harga']; ?></td>
                            <td><?php echo $data['nama_kategori']; ?></td>
                            <td class="text-right">
                                <a href="template_menu_snack.php?aksi=update&id_menu=<?php echo $data['id_menu']; ?>"class="btn btn-primary" name="update">UPDATE</a> 
                                <a href="../inc/proses.php?aksi=delete_menu&id_menu=<?php echo $data['id_menu']; ?>" class="btn btn-primary" name="delete">DELETE</a></td>
                        </tr>
                        <?php
                                }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>