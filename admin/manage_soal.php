<?php 
include '../Controller/manage_soal.php';
require_once '../layout/headeradmin.php';
 ?>
			<style type="text/css">
				.menudashboard #home
				{	
					width: 100vh;
					background-color: #95a5a6;
					/*margin: 0 10px;*/
					padding: 10px 0 0 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
				}
				.menudashboard #manage_soal
				{	
					width: 100vh;
					background-color: #4183D7;
					border: 5px solid #E4F1FE;
					/*margin: 0 10px;*/
					padding: 10px 0 0 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
				}

				.menudashboard #insert_soal
				{	
					width: 100vh;
					background-color: #2ecc71;
					border: 2px solid #E4F1FE;
					/*margin: 0 10px;*/
					padding: 10px 0 0 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
				}
				.menudashboard #edit_soal
				{	
					width: 100vh;
					background-color: #2ecc71;
					border: 2px solid #E4F1FE;
					/*margin: 0 10px;*/
					padding: 10px 0 0 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
				}
				.menudashboard #delete_soal
				{	
					width: 100vh;
					background-color: #2ecc71;
					border: 2px solid #E4F1FE;
					/*margin: 0 10px;*/
					padding: 10px 0 0 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
				}
				.menudashboard #logout
				{	
					width: 100vh;
					background-color: #6C7A89;
					/*margin: 0 10px;*/
					padding: 10px 0 0 10px;
					letter-spacing: 1px;
					text-transform: uppercase;
					display: inline-block;
					color: #f2f2f2;
				}
				.menudashboard a:hover
				{
						font-weight: bold;
						border: 1px solid #E4F1FE;
				}
			</style>
		</head>
		<body style="background-color: white;">
			<div class="row">
				<!-- ini yang menampilkan menu menu yang ada -->
				<div class="col-md-2" style="background-color: #2c3e50; height: 100vh;">

					<!-- Header Dashboard Menu -->
					<h1 style="color: #e74c3c; margin-left: 10px;">Dashboard</h1> <br>

					<!-- Menu Utama -->
					<div class="menudashboard">
						<?php require_once '../layout/menuadmin.php'; ?>
					</div>
				</div>
				<!-- ini yang menampilkan dashboard -->
				<div class="col-md-10" style="background-color: #ecf0f1;">
					<div class="isimenu">
						<!-- Head isi -->
						<div class="isimenu_head">
									
						</div>
						<!-- Body isi -->
						<div class="isimenu_body">
							<div class="Q&A">
								<div class="Q">
									<h3>Soal dan Jawaban :</h3>
									<?php					
										if ($q->num_rows) 
										{
											while ($row = $q->fetch_assoc()) 
											{
												echo "<div class=question>
															<p>".$row["no"].". ".$row["soal"]."<br>
															<p style=color:red>".$row["system_answer"]."</p>
													  </div>";
											}
										}
									?>	
								</div>										
							</div>
						</div>
					</div>
				</div>	
			</div>
		</body>
	</html>