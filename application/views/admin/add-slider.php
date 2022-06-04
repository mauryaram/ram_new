<div class="workplace">
   <div class="page-header">
      <h1><?=$title;?></h1>
   </div>
     <form method="post" action="<?=ADMINURL.'Add_slider/updsave?id='.$id?>" enctype="multipart/form-data">
   <div class="row">
      <div class="col-md-12">
         <div class="head clearfix">
            <div class="isw-documents"></div>
            <h1><?=notification(); errors();?></h1>
         </div>
         <div class="block-fluid">
            <div class="row-form clearfix">
               <div class="col-md-2">Heading:</div>
               <div class="col-md-10"><input type="text" name="heading" value="<?=$heading;?>" placeholder="Heading"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Sub Heading:</div>
               <div class="col-md-10"><input type="text" name="subHeading" value="<?=$subHeading;?>" placeholder="Sub Heading"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Image:</div>
               <div class="col-md-4"><input type="file" name="image"/>
               <img src="<?=IMGURL.$image;?>" width="35px">
               <?php if(!empty($id)){ ?>
               <input type="hidden" name="oldimg" value="<?=$image;?>"/>
               <input type="hidden" name="oldimgwebp" value="<?=$webp;?>"/>
               <?php }?>
               </div>
               <div class="col-md-2">Alt Tag:</div>
               <div class="col-md-4"><input type="text" name="altTag" value="<?=$altTag;?>" placeholder="Alt Tag"/></div>
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
                <input class="btn btn-default" type="submit" value="Submit">
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