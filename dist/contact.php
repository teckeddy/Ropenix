<?php
 require './header.php';

?>
<main>
    <div class="contact-us">
        <div class="header-heading">
        <h1>Contact us</h1>
        <p>Our customer care normally responds in seconds.</p>

        </div>

        <div class=" contact-info container">
           <div class="form">
               <form action="">

               <div class="form-group">
                   <label for="name">Full name</label>
                   <input type="text" class="form-control" placeholder="Enter Your name..">
                   
               </div>
              
               <div class="form-group">
                   <label for="email">Email</label>
                   <input type="email" class="form-control" placeholder="Enter Your name..">
                   
               </div>
               <div class="form-group">
                   <label for="message">Message</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Enter Your Message"></textarea>
                   
               </div>
               <input type="submit" value="send messange" class="secondary-btn">
               </form>
           </div>
           <div id="map">

           </div>

        </div>
        <div class="contact-us-direct">
            <div class="vist-us">
                <h2>Vist us</h2>
                <p>Location</p>

            </div>
            <div class="email-us">
              <h2>Email us</h2>
              <p>email</p>

            </div>
            <div class="call-us">
                <h2>Call us</h2>
                <p>Number</p>

            </div>
        </div>
        

    </div>
    
</main>

<?php
require './footer.php';
?>
<script>
    function initMap(){
        let location={lat:-1.292066, lng: 36.821945};
        let map= new google.maps.Map(document.getElementById("map"),{
            zoom: 4,
            center:location
        });
        let marker=new google.maps.Marker({
            position:location,
            map:map
        });
    }

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDA8AQwLDAJoMnSGqcZ7hbmVup00OP5yAs&callback=initMap">

</script>