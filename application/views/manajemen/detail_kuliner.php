<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div id="content-container">
				
				<!--Page Title-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<div id="page-title">
					<h1 class="page-header text-overflow">Detail Kuliner</h1>

					<!--Searchbox-->
					<div class="searchbox">
						<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Search..">
							<span class="input-group-btn">
								<button class="text-muted" type="button"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</div>
				</div>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End page title-->		

				<!--Page content-->
				<!--===================================================-->
				<div id="page-content">				
			        <!--User table-->
			        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			        <div class="panel">
			            	<?php echo $this->session->flashdata('message'); ?>
			            <div class="panel-heading">
			                <div class="panel-control">
			                    <a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip" href="#" data-original-title="<h4 class='text-thin'>Information</h4><p style='width:150px'>This is an information About Our Client.</p>" data-html="true" title=""></a>
			                </div>
			                <h3 class="panel-title">Detail Kuliner</h3>
			            </div>
			
			            <div class="panel-body">
			                <div class="form-inline">
			                    <div class="row">
			                        <div class="col-md-6">
			                        	<div class="form-group">
			                        		<h4><strong>NAMA KULINER</strong></h4>
			                        		<div><?php echo isset($detail->nama_kuliner) ? $detail->nama_kuliner:'-';?></div>
			                        	</div>
			                        	<br>
			                        	<div class="form-group">
			                        		<h4><strong>DEKAT WISATA</strong></h4>
			                        		<div><?php echo isset($detail->nama_wisata) ? $detail->nama_wisata:'-';?></div>
			                        	</div>
			                        	<br>
			                        	<div class="form-group">
			                        		<h4><strong>JAM BUKA</strong></h4>
			                        		<div><?php echo isset($detail->jam_buka) ? $detail->jam_buka:'-';?></div>
			                        	</div>
			                        	<br>
			                        	<div class="form-group">
			                        		<h4><strong>ALAMAT</strong></h4>
			                        		<div><?php echo isset($detail->alamat_kuliner) ? $detail->alamat_kuliner:'-';?></div>
			                        	</div>
			                        </div>
			                        <!-- <div class="col-md-6">
			                        	<div class="form-group">
			                        		<h4><strong>KATEGORI</strong></h4>
			                        		<div><?php echo isset($detail->nama_kategori) ? $detail->nama_kategori:'-';?></div>
			                        	</div>
			                        	<br>
			                        	<div class="form-group">
			                        		<h4><strong>TRANSPORTASI</strong></h4>
			                        		<div><?php echo isset($detail->nama_t) ? $detail->nama_t:'-';?></div>
			                        	</div>
			                        	<br>
			                        	<div class="form-group">
			                        		<h4><strong>PENGUNJUNG</strong></h4>
			                        		<div><?php echo isset($detail->pengunjung) ? $detail->pengunjung:'-';?></div>
			                        	</div>
			                        </div> -->
			                        <div class="col-md-12">
			                        <hr>
			                        	<a href="<?php echo base_url()?>Manajemen_data/warung_makan" class="btn btn-default">Kembali</a>
			                        </div>
			                    </div>
			                </div>
			            </div>			            
			        </div>	
			        <div class="panel">
			        	<div class="panel-heading">
			                <div class="panel-control">
			                    <a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip" href="#" data-original-title="<h4 class='text-thin'>Information</h4><p style='width:150px'>This is an information About Our Client.</p>" data-html="true" title=""></a>
			                </div>
			                <h3 class="panel-title">Detail Gambar</h3>
			            </div>
			        	<div class="panel-body">
			            	<div data-title="Landscape" class="t">
							<?php 
								foreach ($gambar as $row) 
							{ ?>
								<img style="cursor: pointer;" class="alb_item img-thumbnail" src="<?php echo base_url()?>assets/uploads/resto/real/<?php echo $row->gambar?>" width="150px">
							<?php
								}
							?>
							</div>
			            </div>
			        </div>				
				</div>
				<!--===================================================-->
				<!--End page content-->

			</div>
			<!--===================================================-->
			<!--END CONTENT CONTAINER