
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

	<div class="mt-5 mb-3">
		<h5 class="card-titlet">Hasil</h5>
		<input class="form-control" type="number" name="zakatp" placeholder="0" value="0" readonly="readonly">
	</div>
