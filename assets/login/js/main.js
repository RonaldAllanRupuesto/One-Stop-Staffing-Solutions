
var base_url = $("input[name='base_url']").val();
(function ($) {
    "use strict";

    
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }

    
    

})(jQuery);
$(document).on('submit','#RegisterForm',function(e){
    e.preventDefault();
    $.ajax({
        url:`${base_url}login/register`,
        type: 'POST',
        data:{
            First_Name : $('#First_Name').val(),
            Last_Name : $('#Last_Name').val(),
            Email : $('#Email').val(),
            Phone : $('#Phone').val(),
            Username : $('#Username').val(),
            Password : $('#Password').val(),
        },
        dataType: "json",
        beforeSend: function() {
            // to prevent from submitting again
            $('#submit-edited-homework').html(`<button type="submit" class="btn btn-primary">Processing</button>`);
        },
        success:function(response){
            console.log(response);
            $('#submit-edited-homework').html(`<button type="submit" class="btn btn-primary">Submit</button>`);
            if(response.status == 'success'){
                console.log(response);
                Swal.fire('Success','Registration Successful','success').then(function(){
                    location.reload();
                });
            }
            else{
                $('#submit-edited-homework').html(`<button type="submit" class="btn btn-primary">Submit</button>`);
                Swal.fire('Error',response.msg,'error');
            }
        },
        error:function(response){
            $('#submit-edited-homework').html(`<button type="submit" class="btn btn-primary">Submit</button>`);
            Swal.fire('An error has occured');
        }
    });
});