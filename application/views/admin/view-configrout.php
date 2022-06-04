<div class="workplace">
   <div class="page-header">
       <h1><?=$title;?><span class="label label-danger" style="font-size:12px;font-weight: normal">   (Total Records: <?=$countdata;?>) </span></h1>
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
                     <th width="25%">Rout</th>
                     <th width="25%">Vehicle</th>
                     <th width="25%">Price</th>
                     <th width="25%">Status</th>
                     <th width="25%">Action</th>
                  </tr>
               </thead>
               <tbody>
                <?php if(!empty($data)){
                    $slug = $this->uri->segment(4);
                    if(!empty($slug)){
                        $n = $slug+1;
                    }else{
                       $n = 1; 
                    }
                foreach ($data as $key => $value) { ?>
                  <tr>
                     <td><?=$n;?></td>
                     <td><?=getftcharray('routmaster', array('id'=>$value['routId']), 'fromm');?> - <?=getftcharray('routmaster', array('id'=>$value['routId']), 'too');?></td>
                     <td><?=getftcharray('vehiclecategory', array('id'=>$value['vehicleCategory']), 'categoryname');?></td>
                     <td><?=$value['price'];?></td>
                     <td><span class="label label-<?php if($value['status'] == 'Active'){echo 'success';}else{echo 'danger';}?>"><?=$value['status'];?></span></td>
                     <td><a href="<?=ADMINURL.'Add_configrout?id='.md5($value['id'])?>">
                             <span class="label label-success"><span class="glyphicon glyphicon-edit"></span></span></a>
                             <a href="<?=ADMINURL.'Add_configrout/delete?id='.md5($value['id'])?>"><span class="label label-danger"><span class=" glyphicon glyphicon-remove"></span></span></a></td>
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