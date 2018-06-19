jQuery(document).ready(function() {
	var selector = $('.input_data'),
		name = $("#name"),
		email = $("#email"),
		letter = $("#input_textarea"),
		send = $(".submit"),
		error_mail = $(".error_block_email"),
		error_name = $(".error_block_name"),
		error_textarea = $(".error_block_letter"),
		list = $('.blank_item'),
		input_list = list.find('.input_data');

		//console.log(input_list);


	$('.form').on('submit', function() {
		var key = $('#g-recaptcha-response').val().trim();
		if(key == ''){
			alert('Пройдите капчу!');
			flag_captcha = false;
			return false;
		} else{
			flag_captcha = true; 
			console.log('пользователь активировал капчу');
		}

	});


	$(selector).unbind().blur( function(){

		var _this = $(this),
			id = _this.attr('id'),
			val =_this.val(),
			rv_name = /^[a-zA-Zа-яА-Я]+$/,
			rv_mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		switch(id)
		{
			case 'name' : 
				if (val == ''){
					_this.removeClass('not_error').addClass('error');
					error_name.addClass('active').text("Пожайлуйста, заполните поле");
				}else if(!rv_name.test(val)){
					_this.removeClass('not_error').addClass('error');
					error_name.addClass('active').text("Для указания имени используйте латиницу или кириллицу");
				}else if( val != '' && rv_name.test(val)) {
					_this.removeClass('error').addClass('not_error');
					//send.removeAttr('disabled').removeClass('inactive');
					error_name.removeClass('active');
				}
			break;

			case 'email':
				if (val == ''){
					_this.removeClass('not_error').addClass('error');
					error_mail.addClass('active').text("Пожайлуйста, заполните поле");
				}else if(!rv_mail.test(val)){
					_this.removeClass('not_error').addClass('error');
					error_mail.addClass('active').text("Неверный формат email");
				}else if( val != '' && rv_mail.test(val)) {
					_this.removeClass('error').addClass('not_error');
					//send.removeAttr('disabled').removeClass('inactive');
					error_mail.removeClass('active');
				}
			break;

			case 'input_textarea' :
				if (val == ''){
					_this.removeClass('not_error').addClass('error');
					error_textarea.addClass('active').text("Пожайлуйста, заполните поле");
				}else if(val.length > 1000){
					_this.removeClass('not_error').addClass('error');
					error_textarea.addClass('active').text("Слишком большое сообщение");
				}else if( val != '' && val.length < 1000) {
					_this.removeClass('error').addClass('not_error');
					//send.removeAttr('disabled').removeClass('inactive');
					error_textarea.removeClass('active').text("");
				}
			break;
		}	
		$.each(input_list, function(i,value) {
			if ($(value).hasClass('not_error')) {
				i++;
			}
			if (i == 3){
				console.log(i);
				send.removeAttr('disabled').removeClass('inactive').addClass('activesub');
			}
		});
	});




});