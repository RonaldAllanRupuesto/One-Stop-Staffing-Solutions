var base_url = $('input[name="base_url"]').val();
$(document).ready(function(){
    $.get( base_url+'profile/getProfile', function() {
        $('.wrapper').hide();
        $('.loadWrapper').show();
      })
        .done(function(data) {
            let result = JSON.parse(data);
            console.log(result);
            console.log(result.details[0].mobile_number);

            let mobile = result.Additional_Details[0].mobile_number;
            let address = result.Additional_Details[0].address;
            let fname = result.details[0].firstname;
            let lname = result.details[0].lastname;
            let email = result.details[0].email;
            let phone = result.details[0].phone;
            let jobDiscipline = result.Additional_Details[0].job_discipline;

            $('#fullName').text(fname+' '+lname);
            $('#mobile').text(mobile);
            $('#email').text(email);
            $('#phone').text(phone);
            $('.address').text(address);
            $('#jobDiscipline').text(jobDiscipline);

            setTimeout(function() { 
                $('.wrapper').show();
            }, 1500);
          
        })
        .fail(function() {
            setTimeout(function() { 
                $('.wrapper').show();
                window.location = base_url+'applicant';
            }, 2000);
            Swal.fire('Error','Something Went Wrong','error');
        })
});