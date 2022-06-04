   
        <marquee width="100%" behavior="alternate" class="mrq">  
BooK Taxi Online  One Way Taxi | Round Trip | Tour Packages Anytime and Anywhere Any Place in Gujrat.</marquee> 
  
      
<div class="w3-content w3-section" >
    <?php if(!empty($slider)){
$i = 1;
foreach ($slider as $key => $slidval) { ?>
  <img class="mySlides" src="<?=IMGURL.$slidval['webp']?>" style="">
      <?php  $i++;}    }?>
</div>
          
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<?php $this->load->view('frontend/include/searchbox');?>
<?php /*?>
<section class="about-style-three clearfix">
   <div class="left-block">
      <div class="content-block">
         <div class="image-block">
            <img src="<?=FRONTASSESTS;?>images/resources/book-1-1.jpg" alt="Awesome Image"/>
         </div>
         <!-- /.image-block -->
         <div class="block-title">
            <h2>WELCOME TO RAJ ONEWAY CAB SERVICE AHMEDABAD</h2>
         </div>
         <!-- /.block-title -->
         <p>We are Providing a Taxi rental service in Ahmedabad to all over India.<b>Our All Taxi & Cab is Net Clean well professional Driver and  fully Sanitized Cabs. </b>
 We are a best  taxi service in Ahmedabad .We are Providing a Luxury Cab Service and Car Rental in All over Gujrat India.We are also We Provide Outstation Cabs for Mumbai, Rajasthan & Goa | Round Trips | Tour Packages. If You are Booking a Taxi or Cab Service then Call now or Whats'up now @<b>+91-7433800333</b> .
Taxi Service in Ahmedabad 
Cab Hire in Ahmedabad 
.</p>
      </div>
      <!-- /.content-block -->
   </div>
   <!-- /.left-block -->
   <div class="right-block">
      <div class="right-upper-block">
         <div class="content-block">
            <div class="block-title">
                <?=notification(); errors();?>
               <h2 class="light">BOOK YOUR TAXI GUJRAT TO ALL OVER INDIA</h2>
               <b>Are You Looking for Taxi ?</b>
               <p>We Provide Outstation Cabs for Mumbai, Rajasthan & Goa | Round Trips | Tour Packages</p>
            </div>
            <!-- /.block-title -->
            <form action="<?=FRONTURL.'Enquiry/home'?>" method="post" class="booking-form-one">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="input-holder">
                         <select class="selectpicker" name="vehicleName">
                           <option>Select  Cab</option>
                           <option value="10">Sedan</option>
                           <option value="3">SUV</option>
                        </select>
                        <i class="fa fa-angle-down select-icon"></i>  
                     </div>
                     <!-- /.input-holder -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-12">
                     <div class="input-holder">
                         <input type="text" class="lettersOnly" name="name" maxlength="100" placeholder="Your name"> 
                     </div>
                     <!-- /.input-holder -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-12">
                     <div class="input-holder">
                         <input type="text" name="mobileNo" class="numbersOnly" maxlength="10" placeholder="Mobile XXX99">
                     </div>
                     <!-- /.input-holder -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                     <div class="input-holder">
                        <input type="date" name="bookingDate" placeholder="Select date">
                     </div>
                     <!-- /.input-holder -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                     <div class="input-holder">
                         <select class="selectpicker" name="bookingTime">
                           <option>Select Time</option>
                           <?php 
                           $timeslot = fetchall('timeslot', array('id !='=>'') , $keys = null, 'id ASC' );
                           foreach ($timeslot as $key => $timeslotval) { ?>
                           <option value="<?= date('h:i A', strtotime($timeslotval['time']))?>"><?= date('h:i A', strtotime($timeslotval['time']))?></option>
                           <?php  } ?>
                        </select>
                        <i class="conexi-icon-clock"></i>
                     </div>
                     <!-- /.input-holder -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-12">
                     <div class="input-holder">
                         <input type="text" name="picuPaddress" class="alphanimericOnly" maxlength="250" placeholder="Pick up address">
                     </div>
                     <!-- /.input-holder -->
                  </div>
                  <!-- /.col-lg-12 -->
                  <div class="col-lg-12">
                     <div class="input-holder">
                         <input type="text" name="dropAddress" class="alphanimericOnly" maxlength="250" placeholder="Drop off address">
                     </div>
                     <!-- /.input-holder -->
                  </div>
                  <!-- /.col-lg-12 -->
                  <div class="col-lg-12">
                     <div class="input-holder">
                        <button type="submit">Book Now</button>
                     </div>
                     <!-- /.input-holder -->
                  </div>
                  <!-- /.col-lg-12 -->
               </div>
               <!-- /.row -->
            </form>
            <!-- /.booking-form-one -->
         </div>
         <!-- /.content-block -->
      </div>
      <!-- /.right-upper-block -->
   </div>
   <!-- /.right-block -->
</section>
<?php */?>
<!-- /.about-style-three -->
<section class="taxi-style-one">
   <div class="container">
      <div class="block-title text-center">
         <h2>Our Rates</h2>
      </div>
      <!-- /.block-title -->
      <div class="row">
         <?php if(!empty($routmaster)){
            foreach ($routmaster as $value) {
              $sedan = fetchrow('routconfig', array('vehicleCategory'=>10,'routId'=>$value['routId']),$keys = null );
              $suv = fetchrow('routconfig', array('vehicleCategory'=>3,'routId'=>$value['routId']),$keys = null );
              $configmst = fetchrow('routmaster', array('id'=>$value['routId']),$keys = null );
                ?>
         <div class="col-lg-4">
            <div class="single-taxi-one">
               <div class="inner-content">
                  <h3><?=$configmst['fromm'] .'⇋'. $configmst['too']?></h3>
                  <ul class="feature-list">
                     <li>
                        <span class="name-line"><?=getftcharray('vehiclecategory', array('id'=>$sedan['vehicleCategory']), 'categoryname');?></span>
                        <span class="price-line">- ₹ <?=$sedan['price'];?></span>
                     </li>
                     <li>
                        <span class="name-line"><?=getftcharray('vehiclecategory', array('id'=>$suv['vehicleCategory']), 'categoryname');?></span>
                        <span class="price-line">- ₹ <?=$suv['price'];?></span>
                     </li>
                     <li>
                        <span class="name-line">*<?=$configmst['tollTax']?></span>
                     </li>
                     <li>
                        <span class="name-line">*<?=$configmst['parkingCharge']?></span>
                     </li>
                  </ul>
                  <!-- /.feature-list -->
                  <a href="<?=FRONTURL.$configmst['slug']?>" class="book-taxi-btn">Book Taxi</a>
               </div>
               <!-- /.inner-content -->
            </div>
            <!-- /.single-taxi-one -->
         </div>
         <!-- /.col-lg-4 -->
         <?php } }?>
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /.taxi-style-one -->
<section class="offer-style-one">
   <div class="container">
      <div class="block-title text-center">
         <h2>Our Fleet</h2>
      </div>
      <!-- /.block-title -->
      <div class="row">
          <?php if(!empty($fleet)){
            foreach ( $fleet as $key => $fleetval) { ?>
         <div class="col-lg-4">
            <div class="single-offer-one hvr-float-shadow">
               <div class="image-block">
                  <a href="<?=FRONTURL.'contact/'.$fleetval['slug']?>"><i class="fa fa-link"></i></a>
                  <img style="height: 250px;width: 383px;" src="<?=IMGURL.$fleetval['image'];?>" alt="Raj one way cab" />
               </div>
               <!-- /.image-block -->
               <div class="text-block">
                   <h3><a href="<?=FRONTURL.'contact/'.$fleetval['slug']?>" style="font-size: 15px;"><?=$fleetval['vehicleName'];?></a></h3>
                  <p>₹<?=$fleetval['price'];?> Per KM</p>
                  <a href="<?=FRONTURL.'contact/'.$fleetval['slug']?>" class="book-taxi-btn">Book Taxi</a>
               </div>
               <!-- /.text-block -->
            </div>
            <!-- /.single-offer-one -->
         </div>
          <?php }} ?>
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /.offer-style-one -->
<hr class="style-one">
<section class="blog-style-one blog-page">
   <div class="container">
      <div class="block-title text-center">
         <h2>Our Packages</h2>
      </div>
      <!-- /.block-title -->
      <div class="row">
          <?php if(!empty($package)){
     foreach ($package as $key => $packval) { ?>
         <div class="col-xl-3 col-lg-12">
            <div class="single-blog-style-one">
               <div class="image-block">
                  <div class="inner-block">
                      <a href="<?=FRONTURL.$packval['slug'];?>"><i class="fa fa-link"></i></a>
                     <img src="<?=IMGURL.$packval['image'];?>" alt="Raj One Way Cab" />
                  </div>
                  <!-- /.inner-block -->
               </div>
               <!-- /.image-block -->
               <div class="text-block">
                  <div class="meta-info">
                     <a href="<?=FRONTURL.$packval['slug'];?>" class="date-block"> <?=$packval['packageName'];?> </a>
                  </div>
                  <!-- /.meta-info -->
               </div>
               <!-- /.text-block -->
            </div>
            <!-- /.single-blog-style-one -->
         </div>
         <!-- /.col-xl-6 col-lg-12 -->
         <?php  } }?>
         <!-- /.col-xl-6 col-lg-12 -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /.blog-style-one -->
<section class="cta-style-two no-zigzag">
   <div class="container">
      <div class="content-block">
         <h3>
            <i class="conexi-icon-phone-call"></i>
            Customer Support
         </h3>
         <p>If you need any help, our call center are available 24x7 for any support Call Us on</p>
      </div>
      <!-- /.content-block -->
      <div class="button-block">
         <a href="tel:<?=$setting['personalMobile'];?>" class="cta-btn"><i class="conexi-icon-phone-call"></i> <?=$setting['personalMobile'];?></a>
      </div>
      <!-- /.button-block -->
   </div>
   <!-- /.container -->
</section>