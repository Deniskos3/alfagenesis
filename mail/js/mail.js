
// Отправка данных на сервер
$('#callback').trigger('reset');
$("#form-send").on("click",function(){
    console.log("3");
    "use strict"; 
    let phone=$("#callback_phone").val();
    console.log(phone);
    if(phone=="") {
    }else{
   $("#callback").on("click",function(e){ 
    console.log("333");
    e.preventDefault();
    $.ajax({
      url: 'mail/php/send.php',
      type: 'POST',
      contentType: false,
      processData: false,
      data: new FormData(this),
      success: function(msg) {
        if (msg == 'ok') {
          console.log('Сообщение отправлено');
          $('#callback').trigger('reset'); // очистка формы
        } else {
            console.log('Сообщение без файла');
        }
      }
    });
    $('#callback').off();
    e.preventDefault();
  });
}
});


