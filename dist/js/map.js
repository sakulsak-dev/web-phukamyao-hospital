// When you add a marker using a Place instead of a location, the Maps
      // API will automatically add a 'Save to Google Maps' link to any info
      // window associated with that marker.
      function initMap() {
        var wang = {lat: 18.157305, lng: 99.5374373};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            scrollwheel: false,
            zoomControl: true,
            center: wang,
            disableDefaultUI: false
        });

        var marker = new google.maps.Marker({
          map: map,
          position: wang
        });

        var contentString = '<div id="content">'+
        '<div id="siteNotice"></div>'+
        '<div id="bodyContent"><br><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;289 หมู่ 10 ถนนลำปาง-แม่ทะ ตำบลแม่ทะ อำเภอแม่ทะ จังหวัดลำปาง 52150<br>'+
        '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.google.com/maps/place/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B9%81%E0%B8%A1%E0%B9%88%E0%B8%97%E0%B8%B0/@18.157305,99.5374373,17z/data=!3m1!4b1!4m5!3m4!1s0x30d94070d46eb1a3:0x3a53bd4460c92448!8m2!3d18.157305!4d99.539626?hl=th" target="_blank">ดู Google Map</a></p>'+
        '</div></div>';

        // Construct a new InfoWindow.
        var infoWindow = new google.maps.InfoWindow({
          content: contentString
        });

        // Opens the InfoWindow when marker is clicked.
        marker.addListener('click', function() {
          infoWindow.open(map, marker);
        });
          infoWindow.open(map, marker);
      }