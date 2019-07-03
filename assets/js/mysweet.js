const flashData = $('.flash-data').data('flashdata');

if ( flashData) {
	Swal({
		title: 'Daftar Anda',
		text: 'Telah ' + flashData,
		type: 'success'

	})

}




function hubung(){
	Swal.fire(
		'Terima Kasih',
		'Telah Mengisinya',
		'success'
		)
}






const flashData1 = $('.flash-data').data('flashdata');

if ( flashData1) {
	Swal({
		title: 'Daftar Anda',
		text: 'Telah ' + flashData1,
		type: 'success'

	})

}

// tombol hapus
$('.tombol-nama').on('click', function(e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
		title: 'Apakah anda yakin?',
		text: "data blog akan dihapus!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});





function sweet (){
	const swalWithBootstrapButtons = Swal.mixin({
		confirmButtonClass: 'btn btn-success',
		cancelButtonClass: 'btn btn-danger',
		buttonsStyling: true,
	})

	swalWithBootstrapButtons.fire({
		title: 'Apakah Anda Yakin?',
		text: "Ingin Melakukan Pembayaran!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Ya, Yakin!',
		cancelButtonText: 'Keluar!',
		reverseButtons: true
	}).then((result) => {
		if (result.value) {
			swalWithBootstrapButtons.fire(
				'Pembayaran Berhasil!',
				'Terima Kasih Telah Mengunjungi Kami.',
				'success'
      //   		window.location.href = 'login.html'
      )
			document.location.href = '../laundry1/cetak_home'
		} else if (
    // Read more about handling dismissals
    result.dismiss === Swal.DismissReason.cancel
    ) {
			swalWithBootstrapButtons(
				'Pembayaran Gagal',
				'',
				'error'
				)
		}
	})
}


function pesan (){
	const swalWithBootstrapButtons = Swal.mixin({
		confirmButtonClass: 'btn btn-success',
		cancelButtonClass: 'btn btn-danger',
		buttonsStyling: true,
	})

	swalWithBootstrapButtons.fire({
		title: 'Apakah Anda Yakin?',
		text: "Ingin Melakukan Pembayaran!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Ya, Yakin!',
		cancelButtonText: 'Keluar!',
		reverseButtons: true
	}).then((result) => {
		if (result.value) {
			swalWithBootstrapButtons.fire(
				'Pembayaran Berhasil!',
				'Terima Kasih Telah Mengunjungi Kami.',
				'success'
      //   		window.location.href = 'login.html'
      )
			document.location.href = '../ExpressBayar1/cetak_home'
		} else if (
    // Read more about handling dismissals
    result.dismiss === Swal.DismissReason.cancel
    ) {
			swalWithBootstrapButtons(
				'Pembayaran Gagal',
				'',
				'error'
				)
		}
	})
}



const flashData3 = $('.flash-data3').data('flashdata');

if ( flashData3) {
	Swal({
		position: 'top-end',
		type: 'warning',
		title: 'Password ' + flashData3,
		showConfirmButton: false,
		timer: 3000
	})

}

