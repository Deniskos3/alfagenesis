document.getElementById('callback').reset();
// Отправка данных на сервер
$('#callback').trigger('reset');
$("#form-send").on("click",function(){
    "use strict"; 
    let phone=$(this).closest("form").find('#callback_phone').val().trim();
    console.log("отправка"+phone);
    if (phone.length==18){
   $("#callback").on("click",function(e){ 
    let mainstr=$(this).find('#strsite').val().trim();
    if (mainstr=='главная страница сайта'){
      var urlmail='mail/php/send.php';
    }else{
      var urlmail='../mail/php/send.php';
    }
    console.log(mainstr);
    console.log("333");
    e.preventDefault();
    $.ajax({
      url: urlmail,
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
    $('#callback').trigger('reset');
    $('#callback').off();
    e.preventDefault();
  });
}
});


