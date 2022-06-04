<div class="workplace">
   <div class="page-header">
      <h1><?=$title;?></h1>
   </div>
    <form method="post" action="<?=ADMINURL.'Add_configrout/updsave?id='.$id?>" enctype="multipart/form-data">
   <div class="row">
      <div class="col-md-12">
         <div class="head clearfix">
            <div class="isw-documents"></div>
            <h1><?=notification(); errors();?></h1>
         </div>
         <div class="block-fluid">
             <div class="row-form clearfix">
               <div class="col-md-2">Select Rout:</div>
               <div class="col-md-10">
                  <select name="routId" id="s2_1" style="width: 100%;">
                     <option value="">choose a option...</option>
                     <?php if(!empty($routmaster)){
                        foreach ($routmaster as $key => $value) { ?>
                     <option <?php if($routId == $value['id']){echo 'selected';}?> value="<?=$value['id'];?>"><?=$value['fromm'].' - '.$value['too'];?></option>
                        <?php } }?>
                  </select>
               </div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-2">Car Type:</div>
               <div class="col-md-10">
                  <select name="vehicleCategory" id="s2_2" style="width: 100%;">
                     <option value="">choose a option...</option>
                     <option <?php if($vehicleCategory == 10){echo 'selected';}?> value="10">Sedan</option>
                     <option <?php if($vehicleCategory == 3){echo 'selected';}?> value="3">SUV</option>
                  </select>
               </div>
            </div>
             
            <div class="row-form clearfix">
                 <div class="col-md-2">Price:</div>
               <div class="col-md-4"><input type="number" name="price" value="<?=$price;?>" placeholder="Ex. 2100"/></div>
               <div class="col-md-2">Total Persons:</div>
               <div class="col-md-4"><input type="number" name="noofperson" value="<?=$noofperson;?>" placeholder="Ex. 3"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">No of Bags:</div>
              <div class="col-md-4">
                  <input type="number" name="noofbags" value="<?=$noofbags;?>" placeholder="Ex. 1"/>   
               </div>
               <div class="col-md-2">Image:</div>
                 <div class="col-md-3"><input type="file" name="image" value=""/></div>
                 <div class="col-md-1">
                     <img src="<?=IMGURL.$image?>" style="height: 30px; width: 30px">
                     <input type="hidden" name="oldlogo" value="<?=$image?>"/>
                 </div>
                
            </div>
             <div class="row-form clearfix">
                 <div class="col-md-2">A C:</div>
               <div class="col-md-4">
                  <label class="checkbox checkbox-inline">
                      <input type="checkbox" name="ac" <?php if($ac == 'Included'){echo 'checked';}?> value="Included"/> 
                  </label>
               </div>
               <div class="col-md-2">Toll Tax:</div>
               <div class="col-md-4">
                  <label class="checkbox checkbox-inline">
                      <input type="checkbox" name="tollTax" <?php if($tollTax == 'Excluded'){echo 'checked';}?> value="Excluded"/> 
                  </label>
               </div>
               
            </div>
             
            <div class="row-form clearfix">
                <div class="col-md-2">State Tax:</div>
               <div class="col-md-4">
                  <label class="checkbox checkbox-inline">
                      <input type="checkbox" name="stateTax" <?php if($stateTax == 'Excluded'){echo 'checked';}?> value="Excluded"/> 
                  </label>
               </div>
                <div class="col-md-2">Priority:</div>
              <div class="col-md-4">
                  <input type="number" name="priority" value="<?=$priority;?>" placeholder="Ex. 1"/>   
               </div>
            </div>
            <div class="row-form clearfix">
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