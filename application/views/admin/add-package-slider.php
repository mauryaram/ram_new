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
          <form method="post" action="<?=ADMINURL.'Add_package_slider/updsave'?>" enctype="multipart/form-data">
         <div class="block-fluid">
             <div class="row-form clearfix">
               <input type="hidden" name="pid" value="<?=$pdetail['id'];?>">
               <div class="col-md-2">Image:</div>
               <div class="col-md-4"><input type="file" name="image" value=""/></div>
               <div class="col-md-2">Alt Tag:</div>
               <div class="col-md-4"><input type="text" name="altTag" value="" placeholder="Alt Tag"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-3">Status:</div>
               <div class="col-md-9">
                  <label class="checkbox checkbox-inline">
                      <input type="checkbox" name="status" value="Active"/> 
                  </label>
               </div>
            </div>
            <div class="footer">
                <input class="btn btn-default" type="submit" value="Submit">
            </div>
         </div>
      </form>
          
      </div>
   </div>
   <div class="dr"><span></span></div>
   <div class="row">
      <div class="col-md-12">
         <div class="head clearfix">
            <div class="isw-grid"></div>
            <h1><?=notification(); errors();?></h1>
         </div>
         <div class="block-fluid table-sorting clearfix">
            <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Image</th>
                     <th>Alt Tag</th>
                     <th>Status</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php if(!empty($pslider)){
                      $n = 1;
                        foreach ($pslider as $key => $value) { ?>
                  <tr>
                     <td><?=$n;?></td>
                     <td><img src="<?=IMGURL.$value['webp'];?>" height="50px"></td>
                     <td><?=$value['altTag'];?></td>
                     <td><span class="label label-<?php if($value['status'] == 'Active'){echo 'success';}else{echo 'danger';}?>"><?=$value['status'];?></span></td>
                     <td><a href="<?=ADMINURL.'Add_package_slider?pid='.md5($value['packageConfigId']).'&id='.md5($value['id'])?>">
                             <span class="label label-success"><span class="glyphicon glyphicon-pencil"></span></span></a>
                     <a href="<?=ADMINURL.'Add_package_slider/delete?pid='.md5($value['packageConfigId']).'&delId='.md5($value['id']);?>"><span class="label label-danger"><span class="glyphicon glyphicon-trash glyphicon glyphicon-white"></span></span></a></td>
                  </tr>
                  <?php $n++; } } ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
</div>   
</div>    
</body>
</html>