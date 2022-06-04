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
         <form method="post" action="<?=ADMINURL.'Add_packagemst/updsave?id='.($id)?>">
         <div class="block-fluid">
            <div class="row-form clearfix">
               <div class="col-md-3">Package Name:</div>
               <div class="col-md-9"><input type="text" name="packageName" value="<?=$packageName;?>" placeholder="Package Name"/></div>
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