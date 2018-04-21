$('#submit').click( function(e) {
             $.ajaxSetup({
                 header:$('meta[name="_token"]').attr('content')
              })
              e.preventDefault;
              if( $('#contact').valid() ) {
                 ajaxSubmit();
               }
               else {
                   $('label.error').hide().fadeIn('slow');
               }
               });
           });

        function ajaxSubmit() {
        $('#loading').show();
        $('#submit').attr('disabled', 'disabled');
        var Name = $('#name').val();
        var Email = $('#email').val();
        var Phone = $('#phone').val();
        var Subject = $('#subject').val();
        var Message = $('#message').val();

        var data = 'name=' +Name+ '&email=' +Email+ '&phone=' +Phone+'&subject=' +Subject+ '&message=' +Message;

        $.ajax({
            url: '/',
            type: 'get',
            dataType: 'json',
            data: data,
            cache: false,
            success: function(response) {
                    $('#loading, #contact, .message').fadeOut('slow');
                    $('#response').html('<h3>'+Lang.get('index.email_sent')+'</h3>').fadeIn('slow');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                    $('#loading').fadeOut('slow');
                    $('#submit').removeAttr('disabled');
                    $('#response').text('Error Thrown: ' +errorThrown+ '<br>jqXHR: ' +jqXHR+ '<br>textStatus: ' +textStatus ).show();
            }
        });
        return false;
        }