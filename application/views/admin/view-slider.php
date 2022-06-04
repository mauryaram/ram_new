<div class="workplace">
   <div class="page-header">
      <h1><?=$title;?></h1>
   </div>
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
                     <th width="25%">ID</th>
                     <th width="25%">Heading</th>
                     <th width="25%">Image</th>
                     <th width="25%">Status</th>
                     <th width="25%">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php if(!empty($data)){
                    $n = 1;
                foreach ($data as $key => $value) { ?>
                  <tr>
                     <td><?=$n;?></td>
                     <td><?=$value['heading'];?></td>
                     <td><img src="<?=IMGURL.$value['image'];?>" height="45px"></td>
                     <td><span class="label label-<?php if($value['status'] == 'Active'){echo 'success';}else{echo 'danger';}?>"><?=$value['status'];?></span></td>
                     <td><a href="<?=ADMINURL.'Add_slider?id='.md5($value['id'])?>">
                             <span class="label label-success"><span class="glyphicon glyphicon-edit"></span></span></a>
                             <a href="<?=ADMINURL.'Add_slider/delete?id='.md5($value['id'])?>"><span class="label label-danger"><span class=" glyphicon glyphicon-remove"></span></span></a></td>
                  </tr>
                   <?php $n++; } }?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <div class="dr"><span></span></div>
</div>
</div>   
</div>
</body>
</html>