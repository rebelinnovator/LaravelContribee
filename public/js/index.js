$('.dropbtn').on('click',function(e){
    document.getElementById("myDropdown").classList.toggle("show");
})

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn') && !event.target.matches('.dropbtn-text') && !event.target.matches('.dropbtn-img')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
}
$(document).on('click','#myDropdown a',function(e){
    $('.dropbtn-text').html($(this).attr('myval'))
    $('#country').attr('value',$(this).attr('myval'))
})

$('#form-submit').on('click',function(e){
        e.preventDefault();

        let formdata = $("#message-form").getFormData();
        console.log(formdata)
        for (const [key, value] of Object.entries(formdata)) {
            if(value == '')
            {
                swal({
                    title: "Form Validation Error!",
                    text: `You must complete form. ${key} field is required!`,
                    icon: "error",
                    button: 'Okay',
                  });
                  return
            }

        }
        $.ajax({
            type: 'post',
            url: '/ajax/addMessage',
            data: {
                _token: $('#token').val(),
                ...formdata,
            },
            success: function(data) {

                swal({
                    title: "Submit Success!",
                    text: `Your message ${data.msg.id} has been sent. Greetings from ${data.msg.country}!`,
                    icon: "success",
                    button: {
                        text: "Okay",
                        value: true,
                        visible: true,
                        className: "",
                        closeModal: true,
                      },
                  });

                console.log(data)

            }
        });
})
