<?php $this->load->view("_layouts/_header.php"); ?>
<?php $this->load->view("_layouts/_script.php"); ?>
<div class="container-fluid pt-5">
	<div class="row">
		<div class="col-auto mx-auto">
			<div class="card rounded text-center">
				<div class="card-header">
					<h3 class="pt-3">Zakat Maal</h3>
				</div>
				<form action="" method="post" name="Kalkulator" id="Kalkulator">
					<div class="card-body">
						<div id="maal">
							<div class="form-group">
								<h6 class="card-title text-left">Nilai emas, perak, dan/atau permata</h6>
								<input type="number" class="form-control" id="emasperak" name="emasperak" onchange="maal()" value="0">
							</div>
							<div class="form-group">
								<h6 class="card-title text-left">Uang tunai, tabungan, deposito</h6>
								<input type="number" class="form-control" id="uangtabungan" name="uangtabungan" onchange="maal()" value="0">
							</div>
							<div class="form-group">
								<h6 class="card-title text-left">Kendaraan, rumah, aset lain</h6>
								<input type="number" class="form-control" id="kendaraanrumah" name="kendaraanrumah" onchange="maal()" value="0">
							</div>
							<div class="form-group">
								<h6 class="card-title text-left">Jumlah hutang/cicilan (optional)</h6>
								<input type="number" class="form-control" id="hutang" name="hutang" onchange="maal()" value="0">
							</div>
						</div>

						<br>
						<div class="mt-3">
							<h5 class="card-titlet">Hasil</h5>
							<input class="form-control" type="number" name="zakatm" placeholder="0" value="0" readonly="readonly">
						</div>
						<br>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>
<?php $this->load->view("_layouts/_footer.php"); ?>
