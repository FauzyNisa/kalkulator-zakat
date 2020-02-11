<?php $this->load->view("_layouts/_header.php"); ?>
<?php $this->load->view("_layouts/_script.php"); ?>
<div class="container-fluid pt-5">
	<div class="row">
		<div class="col-auto mx-auto">
			<div class="card rounded text-center">
				<div class="card-header">
					<h3 class="pt-3">Zakat Penghasilan</h3>
				</div>
				<form action="" method="post" name="Kalkulator" id="Kalkulator">
					<div class="card-body">
						<div id="penghasilan">
							<div class="form-group">
								<h6 class="card-title text-left">Pendapatan per bulan</h6>
								<input type="number" class="form-control" id="pendapatan" name="pendapatan" onchange="penghasilan()" value="0">
							</div>
							<div class="form-group">
								<h6 class="card-title text-left">Bonus, THR dan lainnya</h6>
								<input type="number" class="form-control" id="bonus" name="bonus" onchange="penghasilan()" value="0">
							</div>
						</div>

						<br>
						<div class="mt-3">
							<h5 class="card-titlet">Hasil</h5>
							<input class="form-control" type="number" name="zakatp" placeholder="0" value="0" readonly="readonly">
						</div>
						<br>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>
<?php $this->load->view("_layouts/_footer.php"); ?>
