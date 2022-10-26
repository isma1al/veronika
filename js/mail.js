$('.ui-form').submit(function(e){
    e.preventDefault();
    let th =$(this);
    let modal = $('.modal');
    let btn = th.find('.submit__btn');

    $.ajax({
        url: '../mail.php',
        type:  'POST',
        data: th.serialize(),
        success: function(data){
            if(data == 1){
                console.log('Ошибка отправки');
                return false;
            } else {
                setTimeout(function(){
                    th.trigger('reset');
                    modal.css('display', 'none')
                }, 2000)
            }
            modal.css('display', 'block')
        }, error: function(){

        }
    })
    
})