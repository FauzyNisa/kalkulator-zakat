<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="<?php echo base_url('theme/bootstrap/js/bootstrap.js') ?>"></script>
<script src="<?php echo base_url('theme/bootstrap/js/bootstrap.bundle.js') ?>"></script>

<!-- dynamic tab -->
<script>
	$(document).ready(function() {
		$(".nav-tabs a").click(function() {
			$(this).tab('show');
		});
	});
</script>

<script language="JavaScript" type="text/javascript">
	/* Fungsi formatRupiah */
	function rupiah(angka) {
		var rupiah = '';
		var angkarev = angka.toString().split('').reverse().join('');
		for (var i = 0; i < angkarev.length; i++)
			if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
		return 'Rp. ' + rupiah.split('', rupiah.length - 1).reverse().join('');
	}

	function maal() {
		if (document.Kalkulator.emasperak.value == '') {
			document.Kalkulator.emasperak.value = 0
		} else if (document.Kalkulator.uangtabungan.value == '') {
			document.Kalkulator.uangtabungan.value = 0
		} else if (document.Kalkulator.kendaraanrumah.value == '') {
			document.Kalkulator.kendaraanrumah.value = 0
		} else if (document.Kalkulator.hutang.value == '') {
			document.Kalkulator.hutang.value = 0
		}

		var tharta =
			parseInt(document.Kalkulator.emasperak.value) +
			parseInt(document.Kalkulator.uangtabungan.value) +
			parseInt(document.Kalkulator.kendaraanrumah.value);

		var harta =
			tharta - parseInt(document.Kalkulator.hutang.value);

		var nisab = 600000 * 85;

		if (harta < nisab) {
			harta = 0;
		}

		var total = 0.025 * harta;
		total = parseInt(total)
		document.Kalkulator.zakatm.value = rupiah(total);


	}

	function penghasilan() {

		if (document.Kalkulator.pendapatan.value == '') {
			document.Kalkulator.pendapatan.value = 0
		} else if (document.Kalkulator.bonus.value == '') {
			document.Kalkulator.bonus.value = 0
		}

		var harta =
			parseInt(document.Kalkulator.pendapatan.value) +
			parseInt(document.Kalkulator.bonus.value);

		var nisab = 5240000;

		if (harta < nisab) {
			harta = 0;
		}

		var total = 0.025 * harta;
		total = parseInt(total)
		document.Kalkulator.zakatp.value = rupiah(total);

	}
</script>
