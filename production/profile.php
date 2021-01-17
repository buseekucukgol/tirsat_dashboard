<?php 
    include 'header.php';
   
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Kullanıcı Profili</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="ara..">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Git!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bilgilerim</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="<?php echo $_SESSION['resim'] ?>" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3><?php  echo $_SESSION['ad'].' '.$_SESSION['soyad'] ?></h3>
                      <!-- start skills -->
                      <h4>Yetenekler</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>
                          Web uygulamaları</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                        <li>
                          <p>
                          Web sitesi tasarımı</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                          </div>
                        </li>
                        <li>
                          <p>Proje Yönetimi</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50 "></div>
                          </div>
                        </li>
                        <li>
                          <p>Veritabanı Sistemleri Yönetimi</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                      </ul>
                      <!-- end of skills -->

                    </div>
                            <!-- start recent activity -->
                            <ul class="messages">
                              <li>
                               
                                <div class="message_date">
                                  <h3 class="date text-info">24</h3>
                                  <p class="month">Kasım</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Proje</h4>
                                  <blockquote class="message">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos impedit laudantium quia eum omnis facere eligendi deserunt eveniet atque esse dolorem excepturi deleniti dolores a sed alias odit, eaque voluptatem!</blockquote>
                                  <br />
                                  <p class="url">
                                    <span class="fs1 text-info"  ></span>
                                    <a href="#"><i class="fa fa-paperclip"></i> Lorem.doc </a>
                                  </p>
                                </div>
                              </li>
                              <li>
                                
                                <div class="message_date">
                                  <h3 class="date text-error">10</h3>
                                  <p class="month">Eylül</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Çalışma</h4>
                                  <blockquote class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum laudantium nemo rem officiis nihil tenetur sequi exercitationem, quam neque voluptas quas nisi incidunt accusantium similique, impedit quasi dolore consectetur adipisci?</blockquote>
                                  
                                </div>
                              </li>
                              <li>
                                
                                <div class="message_date">
                                  <h3 class="date text-info">12</h3>
                                  <p class="month">Ağustos</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Proje</h4>
                                  <blockquote class="message">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos impedit laudantium quia eum omnis facere eligendi deserunt eveniet atque esse dolorem excepturi deleniti dolores a sed alias odit, eaque voluptatem!</blockquote>
                                  <br />
                                  <p class="url">
                                    <span class="fs1 text-info"  ></span>
                                    <a href="#"><i class="fa fa-paperclip"></i> Lorem.doc </a>
                                  </p>
                                </div>
                              </li>
                              <li>
                                
                                <div class="message_date">
                                  <h3 class="date text-error">21</h3>
                                  <p class="month">Temmuz</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Çalışma Bilgisi</h4>
                                  <blockquote class="message">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis, autem tempora quia ducimus provident laboriosam asperiores quos commodi mollitia placeat. Esse eius cum labore ad, culpa animi alias? </blockquote>
                                  <br />
                                </div>
                              </li>

                            </ul>
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          <strong>TIRSAT A.Ş. 2010-2020</strong>||<small>Tüm hakları saklıdır.</small>
          </div>
          
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
 
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
   
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>