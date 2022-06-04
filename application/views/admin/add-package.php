<div class="workplace">
   <div class="page-header">
      <h1><?=$title;?></h1>
   </div>
    <form method="post" action="<?=ADMINURL.'Add_package/updsave?id='.$id?>"  enctype="multipart/form-data">
   <div class="row">
      <div class="col-md-12">
         <div class="head clearfix">
            <div class="isw-documents"></div>
            <h1><?=notification(); errors();?></h1>
         </div>
         <div class="block-fluid">
             <div class="row-form clearfix">
               <div class="col-md-2">Package Name:</div>
               <div class="col-md-10"><input type="text" name="packageName" value="<?=$packageName;?>" placeholder="Package Name"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Url:</div>
               <div class="col-md-10"><input type="text" name="slug" value="<?=$slug;?>" placeholder="Url"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Meta Title:</div>
               <div class="col-md-10"><input type="text" name="meta_title" value="<?=$meta_title;?>" placeholder="Meta Title"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Meta Keyword:</div>
               <div class="col-md-10"><input type="text" name="meta_keyword" value="<?=$meta_keyword;?>" placeholder="Meta Keyword"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Meta Description:</div>
               <div class="col-md-10"><input type="text" name="meta_description" value="<?=$meta_description;?>" placeholder="Meta Description"/></div>
            </div>
             
            <div class="row-form clearfix">
               <div class="col-md-2">Overview:</div>
               <div class="col-md-10">
                   <textarea class="jqte-test" name="description" style="height: 200px;" placeholder="Overview"><?=$description;?></textarea>
        </div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Picup/Drop Point:</div>
               <div class="col-md-10"><input type="text" name="picup_drop_point" value="<?=$picup_drop_point;?>" placeholder="Picup/Drop Point"/></div>
            </div>
             
             
             <div class="row-form clearfix">
               <div class="col-md-2">Transportation:</div>
               <div class="col-md-10"><input type="text" name="transportation" value="<?=$transportation;?>" placeholder="Transportation"/></div>
               </div>
             <div class="row-form clearfix">
               <div class="col-md-2">No of Day:</div>
               <div class="col-md-4"><input type="number" name="days" value="<?=$days;?>" placeholder="1"/></div>
               <div class="col-md-2">No of Night:</div>
               <div class="col-md-4"><input type="number" name="night" value="<?=$night;?>" placeholder="1"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Distance:</div>
               <div class="col-md-4"><input type="text" name="distance" value="<?=$distance;?>" placeholder="Distance"/></div>
               <div class="col-md-2">Estimated Time:</div>
               <div class="col-md-4"><input type="text" name="estimated_time" value="<?=$estimated_time;?>" placeholder="Estimated Time"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Route Information:</div>
               <div class="col-md-10">
                   <textarea class="jqte-test" name="route_information" style="height: 200px;" placeholder="Route Information"><?=$route_information;?></textarea>
        </div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Taxi Fare:</div>
               <div class="col-md-10">
                   <textarea class="jqte-test" name="taxi_fare" style="height: 200px;" placeholder="Taxi Fare"><?=$taxi_fare;?></textarea>
            </div>
            </div>
             <div class="row-form clearfix">
                 <div class="col-md-2">A C:</div>
               <div class="col-md-4">
                  <label class="checkbox checkbox-inline">
                      <input type="checkbox" name="ac" <?php if($ac == 'AC'){echo 'checked';}?> value="AC"/> 
                  </label>'
               </div>
               <div class="col-md-2">Exclusions:</div>
               <div class="col-md-4">
                  <label class="checkbox checkbox-inline">
                      <input type="checkbox" name="exclusions" <?php if($exclusions == 'Food & Personal Expense'){echo 'checked';}?> value="Food & Personal Expense"/> 
                  </label>
               </div>
            </div>
            <div class="row-form clearfix">
                <div class="col-md-2">Image:</div>
                 <div class="col-md-3"><input type="file" name="image" value=""/></div>
                 <div class="col-md-1">
                     <img src="<?=IMGURL.$image?>" style="height: 30px; width: 30px">
                     <input type="hidden" name="oldlogo" value="<?=$image?>"/>
                 </div>
               <div class="col-md-2">Status:</div>
               <div class="col-md-4">
                  <label class="checkbox checkbox-inline">
                      <input type="checkbox" name="status" <?php if($status == 'Active'){echo 'checked';}?> value="Active"/> 
                  </label>
               </div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-2">Priority:</div>
               <div class="col-md-4"><input type="number" name="priority" value="<?=$priority;?>" placeholder="1"/></div>
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