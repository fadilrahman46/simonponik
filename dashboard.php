

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
								
                                    <h2 class="title-1">Rangkaian Hidroponik</h2>
                                    
                                </div>
                            </div>
							<br><br><br><br>
                        </div>
                        <div class="row">
						<?php $sqlw =  $koneksi->query("SELECT * FROM set_poin order by id_tanaman");
								while ($roww =$sqlw->fetch_array()){ 
								echo '<div class="col-md-6 col-lg-3">
									<div class="statistic__item">
									<a href="index.php?tanaman='.$roww[0].'">
                                    <h2 class="number">'.$roww[1].'</h2>
                                    <span class="desc"></span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-local-florist"></i>
                                    </div></a>
                                </div>
                            </div>';}?>
							
						</div>
						
						<div class="row">
						<div class="col-xl-12">
                                <!-- RECENT REPORT 2-->
                                <div class="recent-report2">
                                    <h3 class="title-3">recent reports</h3>
                                    <div class="chart-info">
                                        <div class="chart-info__left">
                                            <div class="chart-note">
                                                <span class="dot dot--blue"></span>
                                                <span>Ideal</span>
                                            </div>
                                            <div class="chart-note">
                                                <span class="dot dot--green"></span>
                                                <span>Progress</span>
                                            </div>
                                        </div>
                                        <div class="chart-info-right">
											<div class="rs-select2--dark rs-select2--md m-r-10">
                                                <select class="js-select2" name="property">
                                                    <option selected="selected">Tanaman</option>
                                                    <option value="">Sawi</option>
                                                    <option value="">Cabe</option>
													<option value="">Kangkung</option>
													<option value="">Selada Air</option>
													
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <div class="rs-select2--dark rs-select2--md m-r-10">
                                                <select class="js-select2" name="property">
                                                    <option selected="selected">Monitor</option>
                                                    <option value="">PH</option>
                                                    <option value="">PPM</option>
													<option value="">Kelembapan</option>
													<option value="">Suhu Air</option>
													<option value="">Tinggi Air</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <div class="rs-select2--dark rs-select2--sm">
                                                <select class="js-select2 au-select-dark" name="time">
                                                    <option selected="selected">All Time</option>
                                                    <option value="">By Month</option>
                                                    <option value="">By Day</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-report__chart">
                                        <canvas id="recent-rep2-chart"></canvas>
                                    </div>
                                </div>
                                <!-- END RECENT REPORT 2             -->
                            </div>
						</div>
						
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