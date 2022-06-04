<div class="workplace">
   <div class="page-header">
      <h1><?=$title;?></h1>
   </div>
    <form method="post" action="<?=ADMINURL.'Add_packageconfig/updsave?id='.$id?>">
   <div class="row">
      <div class="col-md-12">
         <div class="head clearfix">
            <div class="isw-documents"></div>
            <h1><?=notification(); errors();?></h1>
         </div>
         <div class="block-fluid">
             <div class="row-form clearfix">
               <div class="col-md-3">Package Name:</div>
               <div class="col-md-9">
                  <select name="packageId" id="s2_1" style="width: 100%;">
                     <option value="">choose a option...</option>
                     <?php if(!empty($pmaster)){
                        foreach ($pmaster as $key => $value) { ?>
                     <option <?php if($packageId == $value['id']){echo 'selected';}?> value="<?=$value['id'];?>"><?=$value['packageName'];?></option>
                        <?php } }?>
                  </select>
               </div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-3">Heading:</div>
               <div class="col-md-9"><input type="text" name="heading" value="<?=$heading;?>" placeholder="Heading"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-3">Altitude:</div>
               <div class="col-md-9"><input type="text" name="altitude" value="<?=$altitude;?>" placeholder="Altitude"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Summer:</div>
               <div class="col-md-4"><input type="text" name="summer" value="<?=$summer;?>" placeholder="Summer"/></div>
               <div class="col-md-2">Winter:</div>
               <div class="col-md-4"><input type="text" name="winter" value="<?=$winter;?>" placeholder="Winter"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Day:</div>
               <div class="col-md-4"><input type="text" name="days" value="<?=$days;?>" placeholder="Days"/></div>
               <div class="col-md-2">Night:</div>
               <div class="col-md-4"><input type="text" name="night" value="<?=$night;?>" placeholder="Night"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">MRP:</div>
               <div class="col-md-4"><input type="text" name="mrp" value="<?=$mrp;?>" placeholder="MRP"/></div>
               <div class="col-md-2">Offer Price:</div>
               <div class="col-md-4"><input type="text" name="offerPrice" value="<?=$offerPrice;?>" placeholder="Offer Price"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-3">Description:</div>
               <div class="col-md-9">
         <div class="head clearfix">
         </div>
         <div class="block-fluid" id="wysiwyg_container">
            <textarea id="wysiwyg" name="description" style="height: 300px;"><?=$description;?></textarea>
         </div>
      </div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-3">Status:</div>
               <div class="col-md-9">
                  <label class="checkbox checkbox-inline">
                      <input type="checkbox" name="status" <?php if($status == 'Active'){echo 'checked';}?> value="Active"/> 
                  </label>
               </div>
            </div>
            
            <div class="footer">
                <input class="btn btn-default" type="submit" value="<?=$button;?>">
            </div>
         </div>
      </div>
   </div>
</form>
   <div class="dr"><span></span></div>
   
</div>
</div>   
</div>    
</body>
</html>