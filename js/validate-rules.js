$(document).ready(function(){
	$("#first_form").validate({
	   rules:{   
			name:{
				required: true,
				minlength: 6,
				maxlength: 30,
			},
			date:{
				required: true,
			},
			email:{
				required: true,
				email: true,
			},
			phone:{
			   required: true,
				minlength: 10,
				maxlength: 11,
				digits: true, 
			},
			tier:{
			   required: true,
			   digits: true,
			},
			coment:{
			   required: true, 
			},
			adrhome:{
				required: true,
			},
			adrmetr:{
				required: true,
			},
	   },  
	   messages:{
		
			name:{
				required: "Обязательное поле",
				minlength: "Минниум 6 символов",
				maxlength: "Максимум 30 символов",
			},
			date:{
				required: "Обязательное поле",
			},
			email:{
				required: "Обязательное поле",
				email: "Введите валидный адрес",
			},
			phone:{
				required: "Обязательное поле",
				digits: "Только цифры",
				minlength: "Минниум 10 символов",
				maxlength: "Максимум 11 символов",

			},
			tier:{
				required: "Обязательное поле",
				digits: "Только цифры",
			},
			coment:{
				required: "Обязательное поле",
			},
			adrhome:{
				required: "Обязательное поле"
			},
			adrmetr:{
				required: "Обязательное поле"
			},
	   },
	   submitHandler: function() {
		var name,phone,email,date,tier,comment,cake,cakeWeight,mac,pr,fruc,delivery,results,deliveryTwo,adrHome,adrMetr;
			name=$('#name').val(); 
			phone=$('#phone').val();
			email=$('#email').val();
			date=$('#datepicker').val();
			tier=$('#tier').val();
			comment=$('#comment').val();
			cake=$("#meSelect :selected").html();
			cakeWeight=$('#selet-weight').val();
			mac=$('#check1').val();
			pr=$('#check2').val();
			fruc=$('#check3').val();
			delivery=$('#check4').val();
			deliveryTwo=$('#check5').val();
			results=$('#results').html();
			adrHome=$('#adr-home').val();
			adrMetr=$('#adr-metr').val();
			$.ajax({
			  url: 'sendmail.php',
			  crossDomain: true,
			  data: '&name='+name+'&phone='+phone+'&email='+email+'&date='+date+'&tier='+tier+'&comment='+comment+'&cake='+cake+'&cakeWeight='+cakeWeight+'&mac='+mac+'&pr='+pr+'&fruc='+fruc+'&delivery='+delivery+'&results='+results+'&adrHome='+adrHome+'&adrMetr='+adrMetr,
			  type: 'POST',
			  success: function(data){
				$('.cd-modal').removeClass('visible');
				$('.cd-transition-layer').removeClass('visible');
				$('.cd-transition-layer').removeClass('opening');
				$('#first_form').trigger('reset');
				$('.masssend').addClass('mas_ok');
				setTimeout(function() {
					 $('.masssend').removeClass('mas_ok');
				}, 3000);
			  }
			});
		},  
	});  
});