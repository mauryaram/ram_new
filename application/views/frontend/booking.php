<section class="taxi-fare-one">
   <div class="container">
      <div class="block-title text-center">
         <h2><?=$routmst['fromm'] .' ⇋ '. $routmst['too']?></h2>
      </div>
      <!-- /.block-title -->
      <div class="row">
         <div class="col-lg-6">
            <div class="single-taxi-fare-one thm-base-bg hvr-float-shadow">
               <div class="top-block">
                  <div class="icon-block">
                     <img src="<?=IMGURL.$sedan['image'];?>">
                  </div>
                  <div class="text-block">
                     <h3><?=getftcharray('vehiclecategory', array('id'=>$sedan['vehicleCategory']), 'categoryname');?></h3>
                     <p>₹ <?=$sedan['price'];?></p>
                  </div>
                  <!-- /.text-block -->
               </div>
               <!-- /.top-block -->
               <ul class="features-list">
                  <li>
                     <div class="name-line">Total Persons</div>
                     <!-- /.name-line -->
                     <div class="price-line"><?=$sedan['noofperson'];?></div>
                     <!-- /.price-line -->
                  </li>
                  <li>
                     <div class="name-line">Bags</div>
                     <!-- /.name-line -->
                     <div class="price-line"><?=$sedan['noofbags'];?></div>
                     <!-- /.price-line -->
                  </li>
                  <li>
                     <div class="name-line">A C	</div>
                     <!-- /.name-line -->
                     <div class="price-line"> <?=$sedan['ac'];?></div>
                     <!-- /.price-line -->
                  </li>
                  <li>
                     <div class="name-line">Toll Tax</div>
                     <!-- /.name-line -->
                     <div class="price-line"><?=$sedan['tollTax'];?></div>
                     <!-- /.price-line -->
                  </li>
                  <li>
                     <div class="name-line">State Tax</div>
                     <!-- /.name-line -->
                     <div class="price-line"><?=$sedan['stateTax'];?></div>
                     <!-- /.price-line -->
                  </li>
               </ul>
               <!-- /.features-list -->
            </div>
            <!-- /.single-taxi-fare-one -->
         </div>
         <!-- /.col-lg-6 -->
         <div class="col-lg-6">
            <div class="single-taxi-fare-one thm-base-bg hvr-float-shadow">
               <div class="top-block">
                  <div class="icon-block">
                     <img src="<?=IMGURL.$suv['image'];?>">
                  </div>
                  <div class="text-block">
                     <h3><?=getftcharray('vehiclecategory', array('id'=>$suv['vehicleCategory']), 'categoryname');?> </h3>
                     <p>₹ <?=$suv['price'];?></p>
                  </div>
               </div>
               <!-- /.top-block -->
               <ul class="features-list">
                  <li>
                     <div class="name-line">Total Persons</div>
                     <!-- /.name-line -->
                     <div class="price-line"><?=$suv['noofperson'];?></div>
                     <!-- /.price-line -->
                  </li>
                  <li>
                     <div class="name-line">Bags</div>
                     <!-- /.name-line -->
                     <div class="price-line"><?=$suv['noofbags'];?></div>
                     <!-- /.price-line -->
                  </li>
                  <li>
                     <div class="name-line">A C	</div>
                     <!-- /.name-line -->
                     <div class="price-line"> <?=$suv['ac'];?></div>
                     <!-- /.price-line -->
                  </li>
                  <li>
                     <div class="name-line">Toll Tax</div>
                     <!-- /.name-line -->
                     <div class="price-line"><?=$suv['tollTax'];?></div>
                     <!-- /.price-line -->
                  </li>
                  <li>
                     <div class="name-line">State Tax</div>
                     <!-- /.name-line -->
                     <div class="price-line"><?=$suv['stateTax'];?></div>
                     <!-- /.price-line -->
                  </li>
               </ul>
               <!-- /.features-list -->
            </div>
            <!-- /.single-taxi-fare-one -->
         </div>
         <!-- /.col-lg-6 -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /.taxi-fare-one -->
<section class="contact-form-style-one">
   <div class="container">
      <div class="block-title text-center">
         <h2>Book Your Cab</h2>
          <?=notification(); errors();?>
      </div>
      <!-- /.block-title -->
      <form action="<?=FRONTURL.'Enquiry/booking'?>" class="contact-form-one row" id="contact-form" method="post" novalidate="novalidate">
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
                   <input type="hidden" name="url" value="<?=$routmst['slug'];?>">
                   <input type="hidden" name="routid" value="<?=$routmst['id'];?>">
                   <input type="hidden" name="routName" value="<?=$routmst['fromm'].'⇋'.$routmst['too'];?>">
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
<!--                  <i class="conexi-icon-small-calendar"></i>-->
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
                  <textarea class="form-control" name="message" placeholder="Message, if any"></textarea>
               </div>
               <!-- /.input-holder -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-12">
               <div class="input-holder text-center">
                  <button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait..."><span>Send Message</span></button>
               </div>
               <!-- /.input-holder -->
            </div>
            <!-- /.col-lg-6 -->
         </div>
         <!-- /.col-lg-8 -->
      </form>
      <!-- /.contact-form-one -->
   </div>
   <!-- /.container -->
</section>

<?php if(!empty($routmst['description'])){?>
<section class="contact-form-style-one">
   <div class="container">
      <div class="block-title text-center">
         <h2>Important Information:</h2>
      </div>
      <!-- /.block-title -->
      <?=$routmst['description']?>
      <!-- /.contact-form-one -->
   </div>
   <!-- /.container -->
</section>
<?php }?>