    <nav class="navbar navbar-fixed-top startbootstrap-nav" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">PSB SMA Mitra Bintaro</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li>
			<?php
			include '../config/koneksi.php';
			$SES = @$_SESSION['no_peserta'];
			$LOG_QUERY= mysql_query("select * from psb_formulir where no_peserta='$SES'")or die (mysql_error());
			$LOG_STATUS=mysql_fetch_array($LOG_QUERY);
			$LOG = $LOG_STATUS['status'];
			IF ($LOG){
				$main = mysql_query("SELECT * FROM psb_menu WHERE aktif='Y'AND status_in=1 ORDER BY main_id");
				}
				ELSE{
				$main = mysql_query("SELECT * FROM psb_menu WHERE aktif='Y' AND status_out=1");
					}
		 	while($r=mysql_fetch_array($main)){
			echo "<li><a href='$r[link]'><span>$r[menu]</span></a>";
			$sub=mysql_query("SELECT * FROM psb_submenu, psb_menu  
					 WHERE psb_submenu.main_id=psb_menu.main_id 
					 AND psb_submenu.main_id=$r[main_id]");
			$jml=mysql_num_rows($sub);
			if ($jml > 0){
			  echo "<div><ul class='nav navbar-nav'>";
				while($w=mysql_fetch_array($sub)){
				echo "<li class='dropdown'>
					<ul class='dropdown-menu'><a href='$w[link_sub]&id=$w[sub_id]'><span>$w[nama_sub]</span></a></li></ul>";
				}           
				echo "</ul></div>
					</li>";
					
			}
			else{
			  echo "</li>";
			}
		  }      
  ?>
                    </li>
                </ul>
                <!--<ul class="nav navbar-nav navbar-right">
                    <li><a target="_blank" href="http://designmodo.com/shop/?u=787">Bootstrap Templates by Designmodo <i class="small fa fa-share"></i></a>
                    </li>
                    <li><a target="_blank" class="hidden-sm" href="https://wrapbootstrap.com/?ref=StartBootstrap">WrapBootstrap <i class="small fa fa-share"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
