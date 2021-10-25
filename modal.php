
<div class="modal fade" id="ph" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodalLabel">PH Tanaman</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="up_ph.php" method="post">
						<div class="modal-body">
							<p>Kadar PH Air Saat Ini 
							<b><?php echo $ph; ?></b></p>
							<p>Kadar PH Air Normal Adalah
							<b><?php echo $ph_ideal; ?></b></p>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="ph" value="<?php echo $ph_ideal ?>">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="id_tanaman" value="<?php echo $id_tanaman ?>">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="ph_before" value="<?php echo $ph;?>">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="id_ph" value="<?php echo $id_ph;  ?>">
                            </div>
                         </div>
							<div class="modal-footer">
					<?php if($ph_ideal == $ph){
							echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>";	
							} else {
							echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>";
								echo "<button type='submit' class='btn btn-primary'>Perbaiki</button>";	
					}
							?> 
					</div>
						</form>
					</div>
				</div>
			</div>
			
<div class="modal fade" id="ppm" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodalLabel">Kadar PPM Tanaman</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="up_ppm.php" method="post">
						<div class="modal-body">
							<p>Kadar PPM Tanaman Saat Ini
							<b><?php echo $ppm; ?></b></p>
							<p>Kadar PPM Tanaman Normal Adalah
							<b><?php echo $ppm_ideal; ?></b></p>
							
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="ppm" value="<?php echo $ppm_ideal ?>">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="id_tanaman" value="<?php echo $id_tanaman ?>">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="ppm_before" value="<?php echo $ppm;?>">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="id_ppm" value="<?php echo $id_ppm;  ?>">
                            </div>
                         </div>
							<div class="modal-footer">
								<?php if($ppm_ideal == $ppm){
							echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>";	
							} else {
							echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>";
								echo "<button type='submit' class='btn btn-primary'>Perbaiki</button>";	
								}
							?> 
						</form>
						</div>
					</div>
				</div>
</div>

<div class="modal fade" id="humid" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodalLabel">Kadar Kelembapan Ruangan</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="up_humid.php" method="post">
						<div class="modal-body">
							<p>Kadar Kelembapan Ruangan Saat Ini
							<b><?php echo $humid; ?>%</b></p>
							<p>Kadar Kelembapan Ruangan Normal Adalah 	
							<b><?php echo $humid_ideal; ?>%</b></p>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="humid" value="<?php echo $humid_ideal ?>">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="id_tanaman" value="<?php echo $id_tanaman ?>">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="humid_before" value="<?php echo $humid;?>">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="id_humid" value="<?php echo $id_humid;  ?>">
                            </div>
                         </div>
						<div class="modal-footer">
								<?php if($humid_ideal == $humid){
							echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>";	
							} else {
							echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>";
								echo "<button type='submit' class='btn btn-primary'>Perbaiki</button>";	
								}
							?> 
						</form>
						</div>
					</div>
				</div>
</div>

<div class="modal fade" id="level" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodalLabel">Tingkat Ketinggian Air</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="up_level.php" method="post">
						<div class="modal-body">
							<p>Ketinggian Air Tanaman Saat Ini Adalah
							<b><?php echo $level; ?>%</b></p>
							<p>Ketinggian Air Normal pada Tanaman Adalah
							<b><?php echo $level_ideal; ?>%</b></p>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="level" value="<?php echo $level_ideal ?>">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="id_tanaman" value="<?php echo $id_tanaman ?>">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="level_before" value="<?php echo $level;?>">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="id_level" value="<?php echo $id_level;  ?>">
                            </div>
                         </div>
							<div class="modal-footer">
									<?php if($level_ideal == $level){
							echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>";	
							} else {
							echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>";
								echo "<button type='submit' class='btn btn-primary'>Perbaiki</button>";	
								}
							?> 
						</form>
						</div>
					</div>
				</div>
</div>

<div class="modal fade" id="temp" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodalLabel">Suhu Air</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="up_temp.php" method="post">
						<div class="modal-body">
							<p>Suhu Air pada Tanaman Sebesar
							<b><?php echo $temp; ?>&#8451 </b></p><br>
							<p>Suhu Air Normal pada Tanaman Adalah
							<b><?php echo $temp_ideal; ?>&#8451 </b></p>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="temp" value="<?php echo $temp_ideal ?>">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="id_tanaman" value="<?php echo $id_tanaman ?>">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="temp_before" value="<?php echo $temp;?>">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="hidden" name="id_temp" value="<?php echo $id_temp;  ?>">
                            </div>
                         </div>
							<div class="modal-footer">
									<?php if($temp_ideal == $temp){
							echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>";	
							} else {
							echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>";
								echo "<button type='submit' class='btn btn-primary'>Perbaiki</button>";	
								}
							?> 
						</form>
						</div>
					</div>
				</div>
</div>


<div class="modal fade" id="tambah_pohon" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodalLabel">Tambahkan Tanaman</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="tambah_tanaman.php" method="post">
						<div class="modal-body">
							<p>Kriteria Ideal Kondisi Tanaman yang Akan Dipantau</p>
							
							<div class="form-group">
                            <input class="au-input au-input--full" type="text" name="nm_tanaman" placeholder="nama tanaman">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="text" name="ph_tanaman" placeholder="ph air">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="text" name="humid_tanaman" placeholder="kelembapan ruangan">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="text" name="ppm_tanaman" placeholder="ppm air">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="text" name="level_tanaman" placeholder="ketinggian air">
                            </div>
							<div class="form-group">
                            <input class="au-input au-input--full" type="text" name="temp_tanaman" placeholder="suhu lingkungan">
                            </div>
                         </div>
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Tambah</button>
						</form>
						</div>
					</div>
				</div>
</div>