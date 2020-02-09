<?php $this->load->view("_layouts/_header.php"); ?>
<div class="container-fluid pt-5">
	<div class="row">
		<div class="col-auto mx-auto">
			<div class="card rounded text-center">
				<div class="card-header">
					<h3 class="pt-3">Kalkulator Zakat</h3>
				</div>
				<div class="card-body">

					<div class="form-group">
						<h6 class="card-title text-left">Jenis Zakat</h6>
						<select id="selectZakat" class="custom-select form-control pb">
							<option value="">-- Jenis Zakat --</option>
							<option value="1">Zakat Maal</option>
							<option value="2">Zakat Penghasilan</option>
						</select>
					</div>
					<div id="maal">
						<form action="">
							<div class="form-group">
								<h6 class="card-title text-left">Nilai emas, perak, dan/atau permata</h6>
								<input type="number" class="form-control" id="emasperak">
							</div>
							<div class="form-group">
								<h6 class="card-title text-left">Uang tunai, tabungan, deposito</h6>
								<input type="number" class="form-control" id="uangtabungan">
							</div>
							<div class="form-group">
								<h6 class="card-title text-left">Kendaraan, rumah, aset lain</h6>
								<input type="number" class="form-control" id="kendaraanrumah">
							</div>
							<div class="form-group">
								<h6 class="card-title text-left">Jumlah hutang/cicilan (optional)</h6>
								<input type="number" class="form-control" id="hutang">
							</div>
						</form>
					</div>
					<div id="penghasilan">
						<form action="">
							<div class="form-group">
								<h6 class="card-title text-left">Jumlah pendapatan per bulan</h6>
								<input type="number" class="form-control" id="emasperak">
							</div>
							<div class="form-group">
								<h6 class="card-title text-left">Bonus, THR dan lainnya</h6>
								<input type="number" class="form-control" id="uangtabungan">
							</div>
						</form>
					</div>

				</div>

				<div class="card-footer">
					<a href="#" class="btn btn-color">Hitung Zakat</a>
					<div class="mt-3">
						<h5 class="card-titlet">Hasil</h5>
						<input class="form-control" type="text" placeholder="0" readonly>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php $this->load->view("_layouts/_footer.php"); ?>
