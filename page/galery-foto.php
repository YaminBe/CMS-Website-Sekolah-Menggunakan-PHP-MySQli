<!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Album Galery</h1>
            <div class="content-page">
                <div class="filter-v1">
                  <ul class="mix-filter">
                     <li data-filter="all" class="filter active">All</li>
                       <?php 
                      $sql = mysqli_query($con,"SELECT * FROM tb_album");
                      while ($data1= mysqli_fetch_array($sql)) { ?>
                           <a href="?page=galeri&id=<?php echo $data1['id_album'] ?>"><li data-filter="category_1" class="filter"><?php echo $data1['nama_album'] ?></li></a>
                      <?php } ?>

                   
                  </ul>
                              <div class="row mix-grid thumbnails">
                                 <?php 
                      $sql = mysqli_query($con,"SELECT * FROM tb_album ORDER BY id_album DESC LIMIT 8");
                      while ($data1= mysqli_fetch_array($sql)) { ?>
                           <div class="col-md-3 col-sm-4 mix category_1 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                       <img alt="" src="assets/galery/<?php echo $data1['cover'] ?>" class="img-responsive">
                                       <div class="mix-details">
                                          <h4><?php echo $data1['nama_album'] ?></h4>
                                          <a class="mix-link"><i class="fa fa-link"></i></a>
                                          <a data-rel="fancybox-button" title="<?php echo $data1['nama_album'] ?>" href="assets/galery/<?php echo $data1['cover'] ?>" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                       </div>           
                                    </div>                       
                                  </div>                           
                      <?php } ?>

                               

                        
                        
                       
                           
                             
                               
                            
                                  
                              </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->