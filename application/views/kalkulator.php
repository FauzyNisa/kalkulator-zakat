<?php $this->load->view("_layouts/_header.php"); ?>
<div class="container-fluid pt-5">
	<div class="row">
		<div class="col-auto mx-auto">
			<div class="card rounded text-center">
				<div class="card-header">
					<h3 class="pt-3">Kalkulator Zakat</h3>
				</div>
				<div class="card-body">
					<h5>Silahkan pilih</h5>
					<a href="<?php echo site_url('kalkulator/maal') ?>" class="btn btn-color">Zakat Maal</a>
					<a href="<?php echo site_url('kalkulator/penghasilan') ?>" class="btn btn-color">Zakat Penghasilan</a>
				</div>
				<br>
			</div>
		</div>
	</div>

</div>
<?php $this->load->view("_layouts/_footer.php"); ?>
