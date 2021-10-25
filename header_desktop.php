  <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <!--<input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>-->
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <?php if($ph==$ph_ideal AND $ppm==$ppm_ideal AND $humid==$humid_ideal AND $level==$level_ideal AND $temp==$temp_ideal){
										echo "<i class='zmdi zmdi-notifications'></i>";
										} else {
										echo "<i class='zmdi zmdi-notifications-active' style='color:red;'></i>";
										} 
										?> 
										
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have Notifications</p>
                                            </div>
                                            <div class="notifi__item">
											<?php if($ph==$ph_ideal){
												echo " <div class='bg-c1 img-cir img-40'>
                                                    <i class='zmdi zmdi-local-drink'></i>
                                                </div>";
											} else {
												echo " <div class='bg-c2 img-cir img-40'>
                                                    <i class='zmdi zmdi-local-drink'></i>
                                                </div>";
												} ?> 
                                                
                                                <div class="content">
												<?php if($ph > $ph_ideal){
													echo "<a href='#ph'><p>PH Tanaman '".$nama_tanaman."' Terlalu Tinggi</p>";
													echo "<span class='date'>'".$waktu_cek1."'</span></a>";
												} else if($ph < $ph_ideal) {
													echo "<a href='#ph'><p>PH Tanaman '".$nama_tanaman."' Terlalu Rendah</p>";
													echo "<span class='date'>'".$waktu_cek1."'</span></a>";
												} else {
													echo "<p>PH Tanaman '".$nama_tanaman."' Telah Sesuai</p>";
													echo "<span class='date'>'".$waktu_perbaikan1."'</span>";
												}?>
                                                    
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <?php if($humid==$humid_ideal){
												echo " <div class='bg-c1 img-cir img-40'>
                                                    <i class='zmdi zmdi-nature'></i>
                                                </div>";
											} else {
												echo " <div class='bg-c2 img-cir img-40'>
                                                    <i class='zmdi zmdi-nature'></i>
                                                </div>";
												} ?>
                                                <div class="content">
                                                   <?php if($humid > $humid_ideal){
													echo "<p>Tingkat Kelembapan Tanaman '".$nama_tanaman."' Terlalu Tinggi</p>";
													echo "<span class='date'>'".$waktu_cek3."'</span>";
												} else if($humid < $humid_ideal) {
													echo "<p>Tingkat Kelembapan Tanaman '".$nama_tanaman."' Terlalu Rendah</p>";
													echo "<span class='date'>'".$waktu_cek3."'</span>";
												} else {
													echo "<p>Tingkat Kelembapan Tanaman '".$nama_tanaman."' Telah Sesuai</p>";
													echo "<span class='date'>'".$waktu_perbaikan3."'</span>";
												}?>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <?php if($ppm==$ppm_ideal){
												echo " <div class='bg-c1 img-cir img-40'>
                                                    <i class='zmdi zmdi-local-florist'></i>
                                                </div>";
											} else {
												echo " <div class='bg-c2 img-cir img-40'>
                                                    <i class='zmdi zmdi-local-florist'></i>
                                                </div>";
												} ?>
                                                <div class="content">
                                                    <?php if($ppm > $ppm_ideal){
													echo "<p> Kadar PPM Tanaman '".$nama_tanaman."' Terlalu Tinggi</p>";
													echo "<span class='date'>'".$waktu_cek2."'</span>";
												} else if($ph < $ph_ideal) {
													echo "<p>Kadar PPM Tanaman '".$nama_tanaman."' Terlalu Rendah</p>";
													echo "<span class='date'>'".$waktu_cek2."'</span>";
												} else {
													echo "<p>Kadar PPM Tanaman '".$nama_tanaman."' Telah Sesuai</p>";
													echo "<span class='date'>'".$waktu_perbaikan2."'</span>";
												}?>
                                                </div>
                                            </div>
											   <div class="notifi__item">
                                                <?php if($level==$level_ideal){
												echo " <div class='bg-c1 img-cir img-40'>
                                                    <i class='zmdi zmdi-invert-colors'></i>
                                                </div>";
											} else {
												echo " <div class='bg-c2 img-cir img-40'>
                                                    <i class='zmdi zmdi-invert-colors'></i>
                                                </div>";
												} ?>
                                                <div class="content">
												
                                                    <?php if($level > $level_ideal){
													echo "<p> Ketinggian Air Tanaman '".$nama_tanaman."' Terlalu Tinggi</p>";
													echo "<span class='date'>'".$waktu_cek4."'</span>";
												} else if($level < $level_ideal) {
													echo "<p>Ketinggian Air Tanaman '".$nama_tanaman."' Terlalu Rendah</p>";
													echo "<span class='date'>'".$waktu_cek4."'</span>";
												} else {
													echo "<p>Ketinggian Air Tanaman '".$nama_tanaman."' Telah Sesuai</p>";
													echo "<span class='date'>'".$waktu_perbaikan4."'</span>";
												}?>
												
                                                </div>
                                            </div>
											   <div class="notifi__item">
                                                <?php if($temp==$temp_ideal){
												echo " <div class='bg-c1 img-cir img-40'>
                                                    <i class='zmdi zmdi-sun'></i>
                                                </div>";
											} else {
												echo " <div class='bg-c2 img-cir img-40'>
                                                    <i class='zmdi zmdi-sun'></i>
                                                </div>";
												} ?>
                                                <div class="content">
                                                    <?php if($temp > $temp_ideal){
													echo "<p>Suhu Air Tanaman '".$nama_tanaman."' Terlalu Tinggi</p>";
													echo "<span class='date'>'".$waktu_cek5."'</span>";
												} else if($temp < $temp_ideal) {
													echo "<p>Suhu Air Tanaman '".$nama_tanaman."' Terlalu Rendah</p>";
													echo "<span class='date'>'".$waktu_cek5."'</span>";
												} else {
													echo "<p>Suhu Air Tanaman '".$nama_tanaman."' Telah Sesuai</p>";
													echo "<span class='date'>'".$waktu_perbaikan5."'</span>";
												}?>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="Ahmad K" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Ahmad K</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="Ahmad K" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Ahmad_K</a>
                                                    </h5>
                                                    <span class="email">Ahmad_K@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                </div>
                                            <div class="account-dropdown__footer">
                                                <a href="login.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>