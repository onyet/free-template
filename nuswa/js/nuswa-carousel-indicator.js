function checkout(id1, id2){
	$(id1).on('click', function(){
		if ($(id2).is(':checked')) {
			$(id2).click();
			$(id1 +' .checked').attr('class', 'checked');
		}else{
			$(id2).click();
			$(id1 +' .checked').attr('class', 'checked active');
		}
	});
}

function uploadPengaturan(id){
	$(id + ' .btn').click(function(){
		$(id + ' input[type="file"]').click();
	});
	$(id + ' input[type="file"]').change(function(){
		$(id + ' img').attr('src', 'image/user/004.jpg');
	});
}
$(document).ready(function () {
	uploadPengaturan('#uploadpengaturan-01');
	// delete ajax jquery mobile
	$('a').attr('rel','external');
	$('a').attr('data-ajax','false');
	$('form').attr('rel','external');
	$('form').attr('data-ajax','false');
	$('input').attr('data-role','none');
	// // Bootstrap Carousel JS
	// $('#nuswa-hot-news').on('slid.bs.carousel', function () {
	// 	var carouselData = $(this).data('bs.carousel');
	// 	var indexSekarang = carouselData.getItemIndex(carouselData.$element.find('.item.active'));
	// 	var junklength = document.getElementsByClassName("nuswa-indikator");
	// 	for (var i = 0; i <= junklength.length; ++i) {
	// 		if (i==indexSekarang) {
	// 			junklength[i].setAttribute('class', 'col-md-3 normal-pad-col-junk nuswa-indikator active');
	// 		}else{
	// 			junklength[i].setAttribute('class', 'col-md-3 normal-pad-col-junk nuswa-indikator');
	// 		}
	// 	}
	// 	//setAttribute bikin error uy :v
	// });

    //Tooltips
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover({
    	html: true
    });
// Market placec JS
	// range price
	$('.nuswa-price-format').priceFormat({
	    prefix: '',
	    thousandsSeparator: '.',
	    centsLimit: 3
	});
	//zooming
	$('.nuswa-image-zoom').zoom();
// file upload
	$('.file-input .file-caption-name').text('Foto Barang...');
	$('#file1').click(function(){
	  $('.file-preview').css({'display':'none'});
	});
	$('#file2').click(function(){
	  $('.file-preview').css({'display':'none'});
	});
	$('#file3').click(function(){
	  $('.file-preview').css({'display':'none'});
	});
	$('#file4').click(function(){
	  $('.file-preview').css({'display':'none'});
	});
	$('#file5').click(function(){
	  $('.file-preview').css({'display':'none'});
	});
// select
	$('#properti1').show();
	$('#properti2').hide();
	$('#select4').on('change', function(){
		if ($(this).val() == 6) {
			$('#properti1').show();
			$('#properti2').hide();
		}else{
			$('#properti1').hide();
			$('#properti2').show();
		}
	});

// btn upload
	// tambah barang
	$('#btnupload1').click(function(){
	    $('#file1').click();
	  });
	  $('#file1').on('change', function(){
	    $('#txttext7').val($(this).val());
	  });
	  $('#btnupload2').click(function(){
	    $('#file2').click();
	  });
	  $('#file2').on('change', function(){
	    $('#txttext8').val($(this).val());
	  });
	  $('#btnupload3').click(function(){
	    $('#file3').click();
	  });
	  $('#file3').on('change', function(){
	    $('#txttext9').val($(this).val());
	  });
	  $('#btnupload4').click(function(){
	    $('#file4').click();
	  });
	  $('#file4').on('change', function(){
	    $('#txttext10').val($(this).val());
	  });
	  $('#btnupload5').click(function(){
	    $('#file5').click();
	  });
	  $('#file5').on('change', function(){
	    $('#txttext11').val($(this).val());
	  });
	  $('#file_upload_form1').submit(function(){
	  	// if($('#judulbarang1').val() == ''){
	  	// 	alert('judul harus di isi !');
	  	// }else if($('#txttext1').val() == 0 || $('#txttext1').val() <= 1000 || $('#txttext1').val() == ''){
	  	// 	alert('Harga harus lebih dari Rp 1000,-');
	  	// }else if($('#textarea1').val() == ''){
	  	// 	alert('Deskripsi harus di isi.');
	  	// }else if($('#select4').val() != 6){
	  	// 	if($('#txttext2').val() == ''){
	  	// 		alert('Berat barang harus di isi.');
	  	// 	}
	  	// }else if($('#select4').val() == 6){
	  	// 	if ($('#txttext3').val() == 0 || $('#txttext3').val() == '') {
	  	// 		alert('Luas tanah harus di isi.');
	  	// 	}else if ($('#txttext4').val() == 0 || $('#txttext4').val() == '') {
	  	// 		alert('Luas bangunan harus di isi.');
	  	// 	}else if($('#txttext5').val() == 0 || $('#txttext5').val() == ''){
	  	// 		alert('Jumlah kamar tidur harus di isi.');
	  	// 	}else if($('#txttext6').val() == 0 || $('#txttext6').val() == ''){
	  	// 		alert('jumlah kamar mandi harus di isi.');
	  	// 	}
	  	// }else if ($('#radio1').val() == '') {
	  	// 	alert('Barang baru atau bekas?');
	  	// }else{
	  	// 	if($('#file1').val() != '' || $('#file2').val() != '' || $('#file3').val() != '' || $('#file4').val() != '' $('#file5').val() != ''){
		  // 		// noting
		  // 		$('#select4').focus();
		  // 	}else{
		  // 		alert('Minimal memiliki 1 foto barang.');
		  // 	}
	  	// }
	  	$('#iframe1').load(function(){
		  	$.ajax({
		  		url: 'http://localhost/nuswa/proses.php',
		  		success: function(data){
		  			if (data == 'berhasil') {
		  				$('#modaln3').modal('show');
					  	$('#modaln1 input[type="reset"]').click();
					  	$('#modaln1').modal('hide');
		  			}else{
		  				$('#modaln4').modal('show');
		  			}
		  		},
		  		error: function(){
		  			$('#modaln4').modal('show');
		  		}
		  	});
		});
	  });

	$('#modaln1 input[type="reset"]').click(function(){
		$('#modaln1').modal('hide');
	});

	// informasi toko
	$('#btnupload6').click(function(){
		$('#file7').click();
	});
	$('#file7').on('change', function(){
		$('#txttext12').val($(this).val());
		$('#form1').submit();
		$('#iframe1').load(function(){
			alert('asad');
		});
	});
	$('#btnupload7').click(function(){
		$('#file8').click();
	});
	$('#file8').on('change', function(){
		$('#txttext13').val($(this).val());
		$('#form2').submit();
		$('#iframe1').load(function(){
			alert('asad');
		});
	});
// pengiriman
	checkout('#checkout1', '#pengiriman-pos');
	checkout('#checkout2', '#pengiriman-tiki');
	checkout('#checkout3', '#pengiriman-jne');
	checkout('#checkout4', '#bankmandiri');
	checkout('#checkout5', '#bankbca');
	checkout('#checkout6', '#bankbni');
	checkout('#checkout7', '#bankmega');
	checkout('#checkout8', '#bankbri');
	checkout('#checkout9', '#bankmandirisyariah');
	checkout('#checkout10', '#bankbjb');
	checkout('#checkout11', '#bankmuamalat');
	checkout('#checkout12', '#bankpanin');
	checkout('#checkout13', '#bankbtpn');
	checkout('#checkout14', '#bankdanamon');
// tiny mce
	tinymce.init({
      	selector: "#isi-artikel-profile1"
  	});
	tinymce.init({
      	selector: "#isi-artikel-profile2"
  	});
});
