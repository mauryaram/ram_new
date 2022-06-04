<div class="workplace">
   <div class="page-header">
      <h1><?=$title;?></h1>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="head clearfix">
            <div class="isw-documents"></div>
            <h1><?=notification(); errors();?></h1>
         </div>
         <form method="post" action="<?=ADMINURL.'Add_routmst/updsave?id='.($id)?>">
         <div class="block-fluid">
            <div class="row-form clearfix">
               <div class="col-md-3">From:</div>
               <div class="col-md-9"><input type="text" name="fromm" value="<?=$fromm;?>" placeholder="Ex.AHMADABAD"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-3">To:</div>
               <div class="col-md-9"><input type="text" name="too" value="<?=$too;?>" placeholder="Ex. BARODA"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-3">Toll Tax & State tax Extra:</div>
               <div class="col-md-9">
                  <label class="checkbox checkbox-inline">
                      <input type="checkbox" name="tollTax" <?php if($tollTax == 'Toll Tax & State tax Extra'){echo 'checked';}?> value="Toll Tax & State tax Extra"/> 
                  </label>
               </div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-3">Parking Extra, if Applicable:</div>
               <div class="col-md-9">
                  <label class="checkbox checkbox-inline">
                      <input type="checkbox" name="parkingCharge" <?php if($parkingCharge == 'Parking Extra, if Applicable'){echo 'checked';}?> value="Parking Extra, if Applicable"/> 
                  </label>
               </div>
            </div>
             <div class="row-form clearfix">
                 <div class="col-md-2">Important Information::</div>
               <div class="col-md-10">
                    <textarea class="jqte-test" name="description" style="height: 200px;" placeholder="Overview"><?=$description;?></textarea>
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
        </form>
      </div>
   </div>
   <div class="dr"><span></span></div>
   
</div>
</div>   
</div>    
</body>
</html>