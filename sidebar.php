       <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="SIMONPONIK.png" alt="simonponik" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php?dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                       <!--<li>
                            <a href="nilmat.php">
                                <i class="fas fa-table"></i>Perhitungan Topsis</a>
                        </li>-->
						<li>
						<a class="js-arrow" href="#">
							<i class="fa fa-tree"></i>Pilih Tanaman</a>
						<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
						<?php $sql = $koneksi->query("select * from set_poin"); 
						while ($row =$sql->fetch_array()){
							echo "<li>
                                    <a href='index.php?tanaman=".$row[0]."'>".$row[1]."</a>
								</li>";
						}
						?>
						</li>
					</ul>
					<li>
						<a href="index.php?keterangan">
						<i class="fas fa-table"></i>Keterangan</a>
					</li>
                </nav>
            </div>
        </aside>