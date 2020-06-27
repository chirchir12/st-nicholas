(function ($) {
  //appointement;
  $('#appointmentform').submit(function (e) {
    e.preventDefault();
    var data = $(this).serializeArray();
    var good_data = data.map((item) => {
      if (item.name == 'time') {
        var time = item.value;
        if (time.split(':').length === 3) {
          item.value = time;
        } else {
          var time_arr = time.split(':');
          time_arr.push('00');
          var new_time = time_arr.join(':');
          item.value = new_time;
        }
      }
      return item;
    });

    var post_url = $('#appointmentform').attr('action');
    $.post(post_url, good_data, function (info) {
      $('#appointmentSub').html('Thank you!!');
      $('#time').val('');
      $('#date').val('');
      $('#phone').val('');
      $('#message').val('');
      $('#lastname').val('');
      $('#firstname').val('');
      $('#service').val('');
    });
  });

  // contanct

  $('#contactform').submit(function (event) {
    event.preventDefault();
    var data = $(this).serializeArray();
    var post_url = $('#contactform').attr('action');
    $.post(post_url, data, function (info) {
      $('#contactSub').html('Message Sent!');
      $('#cname').val('');
      $('#cemail').val('');
      $('#csubject').val('');
      $('#cmessage').val('');
    });
  });
})(jQuery);
