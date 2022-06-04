<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); 
   var fieldHTML = '<div class="col-md-10"><span>Cost Include:</span><input style="width: 58%;MARGIN-LEFT: 113px;margin-top: 10px;" type="text" name="cost[]" value=""/><a style="margin-left: 38px;" href="javascript:void(0);" class="remove_button"><img src="<?=IMGURL?>remove-icon.png"/></a></div>'; //New input field html 
    var x = 1; 
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
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
         <form method="post" action="<?=ADMINURL.'Add_not_cost_include/updsave'?>">
         <div class="block-fluid">
            <div class="row-form clearfix field_wrapper" >
                <div class="col-md-2">Cost Include:</div>
                <input type="hidden" name="pid" value="<?=$pdetail['id']?>">
                <div class="col-md-6"><input type="text" name="cost[]" value="" placeholder="Package Name"/></div>
                <div class="col-md-2"> <a href="javascript:void(0);" class="add_button" title="Add field"><img src="<?=IMGURL?>add-icon.png"/></a></div>               
            </div>
            

            
            <div class="footer">
                <input class="btn btn-default" type="submit" value="Submit">
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