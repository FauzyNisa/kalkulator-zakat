<?php $this->load->view("_layouts/_header.php"); ?>
<?php $this->load->view("_layouts/_script.php"); ?>

<div class="container-fluid pt-5">
	<div class="row">
		<div class="col-auto mx-auto">
			<div class="card rounded text-center">
				<div class="card-header">
					<h3 class="pt-3">Kalkulator Zakat</h3>
				</div>
				<form action="" method="post" name="Kalkulator" id="Kalkulator">
					<div class="card-body">

						<div class="container">
							<!-- Nav tabs -->
							<ul class="nav nav-pills nav-justified">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="pill" href="#zakatmaal">Zakat Maal</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="pill" href="#zakatpenghasilan">Zakat Penghasilan</a>
								</li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div id="zakatmaal" class="container tab-pane active"><br>
									<?php $this->load->view("zakat_maal.php"); ?>

								</div>
								<div id="zakatpenghasilan" class="container tab-pane fade"><br>
									<?php $this->load->view("zakat_penghasilan.php"); ?>
								</div>

							</div>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>

	<?php $this->load->view("_layouts/_footer.php"); ?>