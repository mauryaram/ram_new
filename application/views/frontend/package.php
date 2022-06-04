<section class="taxi-fare-one">
   <div class="container">
      <div class="block-title text-center">
         <h2><?=$package['night']?> Night | <?=$package['days']?> Days <?=$package['packageName']?></h2>
      </div>
      <!-- /.block-title -->
      <div class="row">
         <div class="col-lg-6">
            <div class="single-taxi-fare-one thm-base-bg hvr-float-shadow">
               <div class="top-block">
                  <div class="icon-block">
                     <img src="<?=IMGURL.'sedan_package.gif';?>">
                  </div>
                  <div class="text-block">
                     <h3>Sedan</h3>
                  </div>
                  <!-- /.text-block -->
               </div>
               <!-- /.top-block -->
               <ul class="features-list">
                  <li>
                     <div class="name-line">Total Persons</div>
                     <!-- /.name-line -->
                     <div class="price-line">4</div>
                     <!-- /.price-line -->
                  </li>
                  <li>
                     <div class="name-line">A C	</div>
                     <!-- /.name-line -->
                     <div class="price-line"> <?=$package['ac'];?></div>
                     <!-- /.price-line -->
                  </li>
                  <li>
                     <div class="name-line">Pickup/Drop Location</div>
                     <!-- /.name-line -->
                     <div class="price-line"><?=$package['picup_drop_point'];?></div>
                     <!-- /.price-line -->
                  </li>
                  <li>
                     <div class="name-line">Exclusions</div>
                     <!-- /.name-line -->
                     <div class="price-line"><?=$package['exclusions'];?></div>
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
                     <img src="<?=IMGURL.'suv_pcakge.gif';?>">
                  </div>
                  <div class="text-block">
                     <h3>SUV </h3>
                  </div>
               </div>
               <!-- /.top-block -->
               <ul class="features-list">
                  <li>
                     <div class="name-line">Total Persons</div>
                     <!-- /.name-line -->
                     <div class="price-line">6</div>
                     <!-- /.price-line -->
                  </li>
                  <li>
                     <div class="name-line">A C	</div>
                     <!-- /.name-line -->
                     <div class="price-line"> <?=$package['ac'];?></div>
                     <!-- /.price-line -->
                  </li>
                  <li>
                     <div class="name-line">Pickup/Drop Location</div>
                     <!-- /.name-line -->
                     <div class="price-line"><?=$package['picup_drop_point'];?></div>
                     <!-- /.price-line -->
                  </li>
                  <li>
                     <div class="name-line">Exclusions</div>
                     <!-- /.name-line -->
                     <div class="price-line"><?=$package['exclusions'];?></div>
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


<section class="single-blog-details-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-blog-style-one">
                            <div class="text-block">
                                <h3 class="post-title"><?=$package['packageName'];?> Overview:</h3>
                                <p><?=$package['description'];?>.</p>
                            </div><!-- /.text-block -->
                        </div><!-- /.single-blog-style-one -->
                    </div><!-- /.col-lg-8 -->
                    
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>




<section class="contact-form-style-one">
   <div class="container">
      <div class="block-title text-center">
         <h2>Book Your Cab</h2>
          <?=notification(); errors();?>
      </div>
      <!-- /.block-title -->
      <form action="<?=FRONTURL.'Enquiry/package'?>" class="contact-form-one row" id="contact-form" method="post" novalidate="novalidate">
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
                   <input type="hidden" name="url" value="<?=$package['slug'];?>">
                   <input type="hidden" name="pakcageId" value="<?=$package['id'];?>">
                   <input type="hidden" name="packageName" value="<?=$package['exclusions'];?>">
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
            
            
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
               <div class="input-holder">
                  <input type="text" name="picuPaddress" class="alphanimericOnly" maxlength="250" placeholder="Pick up address">
               </div>
               <!-- /.input-holder -->
            </div>
            <!-- /.col-lg-12 -->
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