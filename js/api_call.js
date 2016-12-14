
  $(document).ready(function() {
    $("#locationBox option").click(function(e) {
      var zone = $('#locationBox').val();
      //Request JAKIM API
      $.getJSON('http://api.kayrules.com/solatjakim/times/today.json?zone='+ zone +'&format=12-hour', function(pt) {
          var ptime = pt.prayer_times;
          //display json
          $('#imsak').html(ptime.imsak);
          $('#subuh').html(ptime.subuh);
          $('#syuruk').html(ptime.syuruk);
          $('#zohor').html(ptime.zohor);
          $('#asar').html(ptime.asar);
          $('#maghrib').html(ptime.maghrib);
          $('#isyak').html(ptime.isyak);
      });
    });
  });
