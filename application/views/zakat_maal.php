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
						<div class="mt-5 mb-3">
							<h5 class="card-titlet">Hasil</h5>
							<input class="form-control" type="text" name="zakatm" placeholder="0" value="0" readonly="readonly">
						</div>
