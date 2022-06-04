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
         <form method="post" action="<?=ADMINURL.'Setting/index?id='.$id?>" enctype="multipart/form-data">
         <div class="block-fluid">
            <div class="row-form clearfix">
               <div class="col-md-2">Compney Name:</div>
               <div class="col-md-10"><input type="text" name="compneyName" value="<?=$compneyName?>" placeholder="Compney Name"/></div>
              </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Mobile No:</div>
               <div class="col-md-4"><input type="text" name="careMobile" value="<?=$careMobile?>" placeholder="Mobile No"/></div>
               <div class="col-md-2">Whatsapp No:</div>
               <div class="col-md-4"><input type="text" name="personalMobile" value="<?=$personalMobile?>" placeholder="Whatsapp No"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Email id:</div>
               <div class="col-md-4"><input type="text" name="careEmail" value="<?=$careEmail?>" placeholder="Email id"/></div>
               <div class="col-md-2">Support Email id:</div>
               <div class="col-md-4"><input type="text" name="personalEmail" value=<?=$personalEmail?>"" placeholder="Support Email id"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Head Office Address:</div>
               <div class="col-md-10"><input type="text" name="headOffice" value="<?=$headOffice?>" placeholder="Head Office Address"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Branch Office Address:</div>
               <div class="col-md-10"><input type="text" name="branchOffice" value="<?=$branchOffice?>" placeholder="Branch Office Address"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Fb Link:</div>
               <div class="col-md-10"><input type="text" name="fbLink" value="<?=$fbLink?>" placeholder="Fb Link"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Twitter Link:</div>
               <div class="col-md-10"><input type="text" name="twitterLink" value="<?=$twitterLink?>" placeholder="Twitter Link"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Yuoutube Link:</div>
               <div class="col-md-10"><input type="text" name="yuoutubeLink" value="<?=$yuoutubeLink?>" placeholder="Yuoutube Link"/></div>
            </div>
             <div class="row-form clearfix">
               <div class="col-md-2">Google Link:</div>
               <div class="col-md-10"><input type="text" name="googleLink" value="<?=$googleLink?>" placeholder="Google Link "/></div>
            </div>
            <div class="row-form clearfix">
                 <div class="col-md-2">Logo:</div>
                 <div class="col-md-3"><input type="file" name="image" value=""/></div>
                 <div class="col-md-">
                     <img src="<?=IMGURL.$logo?>" style="height: 30px; width: 30px">
                     <input type="hidden" name="oldlogo" value="<?=$logo?>"/>
                 </div>
               <div class="col-md-2">Status:</div>
               <div class="col-md-4">
                  <label class="checkbox checkbox-inline">
                      <input type="checkbox" name="status" <?php if($status == 'Active'){echo 'checked';}?>  value="Active"/> 
                  </label>
               </div>
            </div>
            
            <div class="footer">
                <input class="btn btn-default" type="submit" value="Update">
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