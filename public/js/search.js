$(document).ready(function() {
  console.log('ready');
  $('#search').keyup(function() {
    console.log('search')
    var str = $("#search").val();
    if(str == "") {
      $('#hints').show();
      $('#hints').html('Hints appear here...');
    }
    else {
      $.get('user_profile/?string='+str,function(data) {
        $('#hints').html(data);
      })
    }
  });
});
