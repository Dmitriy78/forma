function cleanForm(form)
{
    form.find('.form-group').removeClass('has-error');
    form.find('.help-block').text('');
}

$(document).ready(function(){
    return;
    
//    $(document).on("keydown", "input", function(e){
//        alert('ch');
//    });
    
    $(document).on("click", "#btn-login", function(e){
        e.preventDefault();
        
        login = $(document).find('#login');
//        pass = $(document).find('#pass');
        form = $(document).find('#form-login');
        
        cleanForm(form);
        
        jQuery.ajax({
            url: "/ajax.php",
            type: "POST",
            dataType: "json",
//            data: 'action=login' + '&login=' + login + '&pass=' + pass,
            data: 'action=login&' + form.serialize(),
            async: false,
            success: function(response) {
                //alert(response['login']);
                if (response['login']) {
                    $(document).find('#help-block-login').text(response['login']);
                    $(document).find('#form-group-login').addClass('has-error');
                    //login.val(response);
                }
                    //tr.after(response);
//                    form = $(document).find('#form-login');
//        
//                    form.submit();
            },
            error: function(response) {

            }
        });
        
        
    });
    
});
