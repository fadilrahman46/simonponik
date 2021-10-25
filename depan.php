<div class="main-content"> 
<div class="section__content section__content--p30" >
                    <div class="container-fluid">
						<div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
								<p><h2>SIMONPONIK</h2><h3>Sistem Monitoring Hidroponik</h3><p>
                                </div>
								
                            </div>
							<br><br><br>
                        </div>
						<div class="row">
                            <?php $sqlt = $koneksi->query("SELECT * FROM set_poin order by id_tanaman");
								while ($rowt =$sqlt->fetch_array()){ 
									echo '<div class="col-lg-6">
                                <div class="au-card recent-report">
								<h3 class="title-2">'.$rowt[1].'</h3>
                                    <div class="au-card-inner">
                                        <div class="notifi__item">
										<div class="bg-c1 img-cir img-40">
										<i class="zmdi zmdi-local-drink"></i>
                                        </div><p>PH ideal tanaman '.$rowt[1].' adalah '.$rowt[2].'</p>
										</div>
										<div class="notifi__item">
										<div class="bg-c1 img-cir img-40">
										<i class="zmdi zmdi-nature"></i>
                                        </div><p>PPM ideal tanaman '.$rowt[1].' adalah '.$rowt[3].'</p>
										</div>
										<div class="notifi__item">
										<div class="bg-c1 img-cir img-40">
										<i class="zmdi zmdi-local-florist"></i>
                                        </div><p>Kelembapan ideal tanaman '.$rowt[1].' adalah '.$rowt[4].'%</p>
										</div>
										<div class="notifi__item">
										<div class="bg-c1 img-cir img-40">
										<i class="zmdi zmdi-invert-colors"></i>
                                        </div><p>Ketinggian Air ideal tanaman '.$rowt[1].' adalah '.$rowt[5].'%</p>
										</div>
										<div class="notifi__item">
										<div class="bg-c1 img-cir img-40">
										<i class="zmdi zmdi-sun"></i>
                                        </div><p>Suhu Air ideal tanaman '.$rowt[1].' adalah '.$rowt[6].'&#8451</p>
										</div>
								  </div>          
                                </div>
                            </div>';
								}
							?>
							
                         
					
					
					
                        </div>
					</div>
				</div>
			</div>
	