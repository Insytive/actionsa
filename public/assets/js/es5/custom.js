$('.vStationToggle').change(function(){
    if (this.checked) {
   
      $('#CustomVotingStation').fadeIn('slow')
      $('#votingStation').css({display:"none"});  
    

    } else {

        $('#votingStation').fadeIn('slow');
        $('#CustomVotingStation').css({display:"none"});  
    }
    
    
   
  });


  $(function() {
    var $divs = $('#AddressFields > input');
    $divs.first().show()
    $('input[type=radio]').on('change', function() {
      $divs.hide();
      $divs.eq($('input[type=radio]').index(this)).fadeIn();
    });
  });
