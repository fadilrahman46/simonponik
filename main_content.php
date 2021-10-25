

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
								
                                    <h2 class="title-1">Rangkaian Pohon <?php echo $nama_tanaman; ?></h2>
                                    <a class="au-btn au-btn-icon au-btn--blue" href="#tambah_pohon" data-toggle='modal'>
                                        <i class="zmdi zmdi-plus"></i></a>
                                </div>
                            </div>
							<br><br><br><br>
                        </div>
                        <div class="row">
							<div class="col">
								<a href="#ph" data-toggle="modal">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
											<i class="zmdi zmdi-local-drink"></i>
											</div>
										<div class="text">
											<span>PH</span>
												<h2><?php if($count_ph !=null){
												echo $ph;
												} else {
												echo $ph_ideal;
												}?></h2>
											  
											</div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart"></canvas>
                                        </div>
                                    </div>
                                </div></a>
                            </div>
							<div class="col">
							<a href="#humid" data-toggle='modal'>
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-nature"></i>
                                            </div>
                                            <div class="text">
											<span>Room Humidity</span>
													
												<h2><?php if($count_humid !=null){
												echo $humid;
												} else {
												echo $humid_ideal;
												}?>%</h2>
												
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart"></canvas>
                                        </div>
                                    </div>
                                </div></a>
                            </div>
                            <div class="col">
							<a href="#ppm" data-toggle="modal">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-local-florist"></i>
                                            </div>
                                            <div class="text">
                                               <span>PPM</span>
													
												<h2><?php if($count_ppm !=null){
												echo $ppm;
												} else {
												echo $ppm_ideal;
												}?></h2>
												
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart"></canvas>
                                        </div>
                                    </div>
                                </div></a>
                            </div>
						
						  <div class="col">
							<a href="#level" data-toggle='modal'>
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-invert-colors"></i>
                                            </div>
                                            <div class="text">
                                               <span>Water Level</span>
													
												<h2><?php if($count_level !=null){
												echo $level;
												} else {
												echo $level_ideal;
												}?>%</h2>
												
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart"></canvas>
                                        </div>
                                    </div>
                                </div></a>
                          </div>
                            <div class="col">
							<a href="#temp" data-toggle='modal'>
                                <div class="overview-item overview-item--c5">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-sun"></i>
                                            </div>
                                            <div class="text">
                                                <h2></h2>
                                                <span>Water Temperature</span>
													
												<h2><?php if($count_temp !=null){
												echo $temp;
												} else {
												echo $temp_ideal;
												}?>&#8451 </h2>
												
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart"></canvas>
                                        </div>
                                    </div>
                                </div></a>
                            </div>
						</div>
						
						<?php include ('grafik.php'); ?>	
						<div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>SIMONPONIK</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>