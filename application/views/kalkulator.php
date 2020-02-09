<?php $this->load->view("_layouts/_header.php"); ?>
<div class="container-fluid pt-5">
	<div class="row">
		<div class="col-4 mx-auto">
			<div class="card rounded text-center">
				<div class="card-header">
					<h3 class="pt-3">Kalkulator Zakat</h3>
				</div>
				<div class="card-body">
					<h5 class="card-title text-left">Jenis Zakat</h5>
					<form action=""></form>
					<select id="selectZakat" class="form-control pb">
						<option value="">-- Jenis Zakat --</option>
						<option value="1">Zakat Maal</option>
						<option value="2">Zakat Penghasilan</option>
					</select>
				</div>
				<div class="card-footer text-muted">
					<a href="#" class="btn btn-color">Hitung Zakat</a>

				</div>
			</div>
		</div>
	</div>

</div>
<?php $this->load->view("_layouts/_footer.php"); ?>
