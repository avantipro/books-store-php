$(document).ready(function(){

    // add to cart



    $('#cart').click(function(){

      var id = $(this).data('id');

      // console.log(id);

      $.get(
            'http://store/cart/'+ id,
            function(data) {
                console.log('Ajax go');
                $('#cart_res').html(data);
            }
      );

      return false;

    });




    // purchase
    // purchase
    // purchase

    $('#order').click(function(){

        $('#order2').show('slow');

        $('#order').hide('slow');

        $('#order1').show('slow');

        $('#busket').hide('slow');

    });



    $('#order2').click(function(){

        $('#order').show('slow');

        $('#order2').hide('slow');

        $('#order1').hide('slow');

        $('#busket').show('slow');

    });

    // purchase
    // purchase
    // purchase




// validation form
// validation form
// validation form


// validate email
    $('#validateEmail').keyup(function(){

        var email = $(this).val();

        if ( email != 0) {

           if (isValidEmailAddress(email)) {

              $(this).next().css({"color":"green"}).text('email success');

           } else {

              $(this).next().css({"color":"red"}).text('email is not valid');

           }
        }
    });
});

function isValidEmailAddress(emailAddress) {

   var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);

return pattern.test(emailAddress);}
// validate email



// validate name
$('#validateName').keyup(function(){

  var name = $(this).val();

  name = $.trim(name).length;

  if ( name <= 2 ) {

     $(this).next().css({"color":"red"}).text('very short name');

  } else {

     $(this).next().css({"color":"green"}).text('name success');

  }
});



// validate phone
$('#validatePhone').keyup(function(){

  var name = $(this).val();

  name = $.trim(name).length;


  if ( name <= 10 ) {

     $(this).next().css({"color":"red"}).text('very short phone number');

  } else {

     $(this).next().css({"color":"green"}).text('phone number success');

  }
});
// validate phone




// button submit
$('#validateButton').click(function(){

    var email = $('#validateEmail').val();

    var name = $('#validateName').val();

    var phone = $('#validatePhone').val();

    name = $.trim(name).length;

    phone = $.trim(phone).length;

    if ( !isValidEmailAddress(email) || name <= 2 || phone <= 10 ) {

        alert('Incorect fields, please input correct data');

        return false;
    }
});
// button submit

// validation form
// validation form
// validation form
