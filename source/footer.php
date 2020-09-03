<div class="footer-logo">
    <img src="images/color-logo.png">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <h2>hotel <br> amburgo</h2>
</div>
<div class="content-footer">
    <p>hotel amburgo <br> Via venere, 19 - 30020 bibione venezia<br>italia</p>
    <div class="row footer-row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 foot-left"><p><span class="word-blue">telefono</span> +39 0431 43441</p></div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 foot-midle"><p><span class="word-blue">fax</span> +39 0431 439331</p></div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 foot-right"><p><span class="word-blue">email</span> info@hotelamburgo.com</p></div>
    </div>
</div>
<div class="last-footer">
    <div class="row lastf-row">
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 col-img-1"><img src="images/footer_1.jpg" alt="footer"></div>
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 col-end-width">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-img-2"><img src="images/footer_2.jpg" alt="footer"></div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-img-3"><img src="images/footer_3.png" alt="footer"></div>
        </div>       
    <div>
</div>

<script src="tools/jquery.js"></script>
<script src="tools/jquery-ui.js"></script>
<script type="text/javascript" src="tools/datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.datepickerclsbtn').on("click", function(){
            $('.datepickercls').datepicker('show');
        });
        $('.datepickerclsbtn1').on("click", function(){
            $('.datepickercls1').datepicker('show');
        });
    });
</script>
<script type="text/javascript">
$(document).ready(function() {
        $('.calendar').datepicker({
            buttonImageOnly: false,
            dateFormat: 'dd/mm/yy',
            constrainInput: true
        });

    $(".ui-datepicker-trigger").mouseover(function() {
        $(this).css('cursor', 'pointer');
    });

});
 </script>
<script src="tools/owl.carousel.js"></script>
<script type="text/javascript" src="tools/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#owl-demo").owlCarousel({

    navigation : true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem : true,
    loop : true

    });
    $("#owl-sauna").owlCarousel({
    navigation : true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem : true,
    loop : true
    
    });
    $("#owl-room1").owlCarousel({
    navigation : true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem : true,
    loop : true
    });
    $("#owl-room2").owlCarousel({
    navigation : true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem : true,
    loop : true
    });
    $("#owl-room3").owlCarousel({
    navigation : true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem : true,
    loop : true
    });
    $("#owl-room4").owlCarousel({
    navigation : true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem : true,
    loop : true
    });
    $("#owl-room5").owlCarousel({
    navigation : true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem : true,
    loop : true
    });  
  });
</script>
<script>
  $(function() {
    $(document).on('click', ' .dropdown-menu', function(e) {
      e.stopPropagation()
    })
  })
</script>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    if($('#googleMap').length){
        var myCenter=new google.maps.LatLng(41.3338458,19.8223407);

        function initialize()
        {
        var mapProp = {
          center:myCenter,
          zoom:17,
          mapTypeId:google.maps.MapTypeId.ROADMAP
          };

        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker=new google.maps.Marker({
          position:myCenter,
          });

        marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    }
</script>
<script type="text/javascript">
$(document).ready( function(){
    // Get window location pathname
    var url = window.location.pathname.substr(15);

    // Getting all the href for each anchor
    $('#nav li a').each(function(){
      var current = $(this).attr('href');

      // Cheking if the current page is equal with the location pathname
      if(current == url.substr(0)){
        $(this).parent().addClass("active");
      }
    });

  });
</script>
</body>
</html>
