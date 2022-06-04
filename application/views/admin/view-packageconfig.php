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
                     <th>ID</th>
                     <th>Package Name</th>
                     <th>Heading</th>
                     <th>Itinerary</th>
                     <th>Cost Includes</th>
                     <th>Cost Not Includes</th>
                     <th>Slider</th>
                      <th>Status</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                   <?php if(!empty($data)){
                    $n = 1;
                    foreach ($data as $key => $value) { ?>
                  <tr>
                     <td><?=$n;?></td>
                     <td><?=getftcharray('packagemaster', array('id'=>$value['packageId']), 'packageName');?></td>
                     <td><?=$value['heading'];?></td>
                     <td><a target="_blank" target="_blank" href="<?=ADMINURL.'Itinerary?id='.md5($value['id'])?>">
                             <span class="label label-success"><span class="glyphicon glyphicon-pencil"></span></span></a></td>
                     <td><a target="_blank" href="<?=ADMINURL.'Add_cost_include?id='.md5($value['id'])?>">
                             <span class="label label-success"><span class="glyphicon glyphicon-pencil"></span></span></a></td>
                     <td><a target="_blank" href="<?=ADMINURL.'Add_not_cost_include?id='.md5($value['id'])?>">
                             <span class="label label-success"><span class="glyphicon glyphicon-pencil"></span></span></a></td>
                             <td><a target="_blank" href="<?=ADMINURL.'Add_package_slider?id='.md5($value['id'])?>">
                             <span class="label label-success"><span class="glyphicon glyphicon-pencil"></span></span></a></td>
                     <td><span class="label label-<?php if($value['status'] == 'Active'){echo 'success';}else{echo 'danger';}?>"><?=$value['status'];?></span></td>
                     <td><a href="<?=ADMINURL.'Add_packageconfig?id='.md5($value['id'])?>">
                             <span class="label label-success"><span class="glyphicon glyphicon-pencil"></span></span></a>
                     <a href="<?=ADMINURL.'Add_packageconfig/delete?id='.md5($value['id'])?>"><span class="label label-danger"><span class="glyphicon glyphicon-trash glyphicon glyphicon-white"></span></span></a></td>
                  </tr>
                  <?php $n++; } }?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
    <div class="pagination_area text-center">
        <ul class="pagination">
          <?= $pagination; ?>
        </ul>
    </div>
   <div class="dr"><span></span></div>
</div>
</div>   
</div>
</body>
</html>