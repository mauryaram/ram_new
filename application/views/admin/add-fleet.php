<div class="workplace">
   <div class="page-header">
      <h1><?=$title;?></h1>
   </div>
    <form method="post" action="<?=ADMINURL.'Add_fleet/updsave?id='.$id?>" enctype="multipart/form-data">
   <div class="row">
      <div class="col-md-12">
         <div class="head clearfix">
            <div class="isw-documents"></div>
            <h1><?=notification(); errors();?></h1>
         </div>
         <div class="block-fluid">
             <div class="row-form clearfix">
               <div class="col-md-2">vehicle Name:</div>
               <div class="col-md-10">
                   <input type="text" name="vehicleName" value="<?=$vehicleName;?>" placeholder="Ex. Swift Dzire"/>   
               </div>
            </div>
            
             
            <div class="row-form clearfix">
                 <div class="col-md-2">Price:</div>
               <div class="col-md-4"><input type="number" name="price" value="<?=$price;?>" placeholder="Ex. 9"/></div>
                   <div class="col-md-2">Image:</div>
                 <div class="col-md-3"><input type="file" name="image" value=""/></div>
                 <div class="col-md-1">
                     <img src="<?=IMGURL.$image?>" style="height: 30px; width: 30px">
                     <input type="hidden" name="oldlogo" value="<?=$image?>"/>
                 </div>
            </div>
             <div class="row-form clearfix">
                  <div class="col-md-2">Priority:</div>
               <div class="col-md-4"><input type="number" name="priority" value="<?=$priority;?>" placeholder="Ex. 1"/></div>
               <div class="col-md-2">Status:</div>
               <div class="col-md-4">
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