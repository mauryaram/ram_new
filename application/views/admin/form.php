<div class="workplace">
   <div class="page-header">
      <h1>Forms <small>Stuff</small></h1>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="head clearfix">
            <div class="isw-documents"></div>
            <h1>Text fields</h1>
         </div>
         <div class="block-fluid">
            <div class="row-form clearfix">
               <div class="col-md-3">Input type text:</div>
               <div class="col-md-9"><input type="text" value="some text value..."/></div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-3">Input type password:</div>
               <div class="col-md-9"><input type="password" value="123123123"/></div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-3">Readonly input:</div>
               <div class="col-md-9"><input type="text" value="readonly input field..." readonly="readonly"/></div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-3">Disabled input:</div>
               <div class="col-md-9"><input type="text" value="disabled input field..." disabled="disabled"/></div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-3">Placeholder:</div>
               <div class="col-md-9"><input type="text" placeholder="placeholder..."/></div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-3">Textarea field:</div>
               <div class="col-md-9"><textarea name="textarea">Some text in textarea field...</textarea></div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-3">Textarea placeholder:</div>
               <div class="col-md-9"><textarea name="textarea" placeholder="Textarea field placeholder..."></textarea></div>
            </div>
            <div class="footer tar">
               <button class="btn btn-default">Submit</button>
            </div>
         </div>
      </div>
   </div>
   <div class="dr"><span></span></div>
   <div class="row">
      <div class="col-md-12">
         <div class="head clearfix">
            <div class="isw-favorite"></div>
            <h1>WYSIWYG HTML Editor</h1>
         </div>
         <div class="block-fluid" id="wysiwyg_container">
            <textarea id="wysiwyg" name="text" style="height: 300px;"></textarea>
         </div>
      </div>
   </div>
   <div class="dr"><span></span></div>
   <div class="row">
      <div class="col-md-6">
         <div class="head clearfix">
            <div class="isw-list"></div>
            <h1>Select fields</h1>
         </div>
         <div class="block-fluid">
            <div class="row-form clearfix">
               <div class="col-md-5">Simple select:</div>
               <div class="col-md-7">
                  <select name="select">
                     <option value="0">choose a option...</option>
                     <option value="1">Andorra</option>
                     <option value="2">Antarctica</option>
                     <option value="3">Bulgaria</option>
                     <option value="4">Germany</option>
                     <option value="5">Dominican Republic</option>
                     <option value="6">Micronesia</option>
                     <option value="7">United Kingdom</option>
                     <option value="8">Greece</option>
                     <option value="9">Italy</option>
                     <option value="10">Ukraine</option>
                  </select>
               </div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-5">Multiple select:</div>
               <div class="col-md-7">
                  <select name="select" multiple="multiple">
                     <option value="0">choose a option...</option>
                     <option value="1">Andorra</option>
                     <option value="2">Antarctica</option>
                     <option value="3">Bulgaria</option>
                     <option value="4">Germany</option>
                     <option value="5">Dominican Republic</option>
                     <option value="6">Micronesia</option>
                     <option value="7">United Kingdom</option>
                     <option value="8">Greece</option>
                     <option value="9">Italy</option>
                     <option value="10">Ukraine</option>
                  </select>
               </div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-5">Simple Select2:</div>
               <div class="col-md-7">
                  <select name="select" id="s2_1" style="width: 100%;">
                     <option value="0">choose a option...</option>
                     <optgroup label="Some group #1">
                        <option value="1">Andorra</option>
                        <option value="2">Antarctica</option>
                        <option value="3">Bulgaria</option>
                     </optgroup>
                     <optgroup label="Some group #1">
                        <option value="4">Germany</option>
                        <option value="5">Dominican Republic</option>
                        <option value="6">Micronesia</option>
                        <option value="7">United Kingdom</option>
                     </optgroup>
                     <optgroup label="Some group #3">
                        <option value="8">Greece</option>
                        <option value="9">Italy</option>
                        <option value="10">Ukraine</option>
                     </optgroup>
                  </select>
               </div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-5">Select2 multiple:</div>
               <div class="col-md-7">
                  <select name="select" id="s2_2" style="width: 100%;" multiple="multiple">
                     <option value="0">choose a option...</option>
                     <optgroup label="Some group #1">
                        <option value="1" selected="selected">Andorra</option>
                        <option value="2">Antarctica</option>
                        <option value="3">Bulgaria</option>
                     </optgroup>
                     <optgroup label="Some group #1">
                        <option value="4">Germany</option>
                        <option value="5">Dominican Republic</option>
                        <option value="6">Micronesia</option>
                        <option value="7">United Kingdom</option>
                     </optgroup>
                     <optgroup label="Some group #3">
                        <option value="8">Greece</option>
                        <option value="9">Italy</option>
                        <option value="10">Ukraine</option>
                     </optgroup>
                  </select>
               </div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-5">Tags input:</div>
               <div class="col-md-7">                                
                  <input type="text" class="tags" value="PHP,JavaScript,CSS"/>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="head clearfix">
            <div class="isw-target"></div>
            <h1>Checkbox, radio and file fields</h1>
         </div>
         <div class="block-fluid">
            <div class="row-form clearfix">
               <div class="col-md-5">Checkbox:</div>
               <div class="col-md-7">
                  <label class="checkbox checkbox-inline">
                  <input type="checkbox" value="checkbox1"/> unchecked
                  </label>
                  <label class="checkbox checkbox-inline">
                  <input type="checkbox" value="checkbox2" checked="checked"/> checked
                  </label>
               </div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-5">Disabled checkbox:</div>
               <div class="col-md-7">
                  <label class="checkbox checkbox-inline">
                  <input type="checkbox" value="checkbox1" disabled="disabled"/> unchecked
                  </label>
                  <label class="checkbox checkbox-inline">
                  <input type="checkbox" value="checkbox2" disabled="disabled" checked="checked"/> checked
                  </label>
               </div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-5">Radio button:</div>
               <div class="col-md-7">
                  <label class="checkbox checkbox-inline">
                  <input type="radio" name="radio1"/> unchecked
                  </label>
                  <label class="checkbox checkbox-inline">
                  <input type="radio" name="radio1" checked="checked"/> checked
                  </label>
               </div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-5">Disabled radio:</div>
               <div class="col-md-7">
                  <label class="checkbox checkbox-inline">
                  <input type="radio" name="radio2" disabled="disabled"/> unchecked
                  </label>
                  <label class="checkbox checkbox-inline">
                  <input type="radio" name="radio2" disabled="disabled" checked="checked"/> checked
                  </label>
               </div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-5">Input file:</div>
               <div class="col-md-7">                                                                
                  <input type="file" name="file"/>
               </div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-5">Switch Checkbox:</div>
               <div class="col-md-7">
                  <label class="switch">
                  <input type="checkbox" class="skip" checked value="0"/>
                  <span></span>
                  </label>
                  <label class="switch">
                  <input type="checkbox" class="skip" value="1"/>
                  <span></span>
                  </label>                                        
                  <label class="switch">
                  <input type="checkbox" class="skip" value="2"/>
                  <span></span>
                  </label>
                  <label class="switch">
                  <input type="checkbox" class="skip" disabled value="2"/>
                  <span></span>
                  </label>
               </div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-5">Switch radio:</div>
               <div class="col-md-7">
                  <label class="switch">
                  <input type="radio" class="skip" name="switch-radio1" checked value="0"/>
                  <span></span>
                  </label>
                  <label class="switch">
                  <input type="radio" class="skip" name="switch-radio1" value="1"/>
                  <span></span>
                  </label>                                        
                  <label class="switch">
                  <input type="radio" class="skip" name="switch-radio1" value="2"/>
                  <span></span>
                  </label>                                        
                  <label class="switch">
                  <input type="radio" class="skip" name="switch-radio1" disabled value="3"/>
                  <span></span>
                  </label>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="dr"><span></span></div>
   <div class="row">
      <div class="col-md-6">
         <div class="head clearfix">
            <div class="isw-cloud"></div>
            <h1>Default multiselect</h1>
         </div>
         <div class="block">
            <select multiple class="multiselect" id="multiselect" name="test[]">
               <option value="fr">France</option>
               <option value="uk">United Kingdom</option>
               <option value="us">United States</option>
               <option value="ch">China</option>
               <option value="au">Australia</option>
               <option value="in">India</option>
               <option value="ar">Argentina</option>
               <option value="br">Brazil</option>
               <option value="tb">Tibet</option>
               <option value="co">Columbia</option>
               <option value="cr">Croatia</option>
               <option value="it">Italia</option>
               <option value="es">Espana</option>
               <option value="id">Indonesia</option>
               <option value="du">Germany</option>
               <option value="no">Norway</option>
            </select>
         </div>
      </div>
      <div class="col-md-6">
         <div class="head clearfix">
            <div class="isw-ok"></div>
            <h1>Multiselect</h1>
         </div>
         <div class="block">
            <select multiple class="multiselect" id="fmultiselect" name="ftest[]">
               <option value="fr">France</option>
               <option value="uk">United Kingdom</option>
               <option value="us">United States</option>
               <option value="ch">China</option>
               <option value="au">Australia</option>
               <option value="in">India</option>
               <option value="ar">Argentina</option>
               <option value="br" selected="selected">Brazil</option>
               <option value="tb">Tibet</option>
               <option value="co">Columbia</option>
               <option value="cr">Croatia</option>
               <option value="it">Italia</option>
               <option value="es">Espana</option>
               <option value="id">Indonesia</option>
               <option value="du">Germany</option>
               <option value="no">Norway</option>
            </select>
            <div class="btn-group">
               <button class="btn btn-default btn-xs" id="multiselect-selectAll" type="button">Select All</button>
               <button class="btn btn-default btn-xs" id="multiselect-deselectAll" type="button">Deselect All</button>
               <button class="btn btn-default btn-xs" id="multiselect-selectIndia" type="button">Select India</button>                                
            </div>
         </div>
      </div>
   </div>
   <div class="dr"><span></span></div>
   <div class="row">
      <div class="col-md-6">
         <div class="head clearfix">
            <div class="isw-cloud"></div>
            <h1>Masked inputs</h1>
         </div>
         <div class="block-fluid">
            <div class="row-form clearfix">
               <div class="col-md-3">Date:</div>
               <div class="col-md-9"><input type="text" id="mask_date"/> <span>Example: 04/10/2012</span></div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-3">Phone number:</div>
               <div class="col-md-9"><input type="text" id="mask_phone"/> <span>Example: 98 (765) 432-10-98</span></div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-3">Credit card number:</div>
               <div class="col-md-9"><input type="text" id="mask_credit"/> <span>Example: 9876-5432-1098-7654</span></div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-3">TIN:</div>
               <div class="col-md-9"><input type="text" id="mask_tin"/> <span>Example: 98-7654321</span></div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-3">SSN:</div>
               <div class="col-md-9"><input type="text" id="mask_ssn"/> <span>Example: 987-65-4321</span></div>
            </div>
            <div class="footer tal">
               <button class="btn btn-default">Submit</button>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="head clearfix">
            <div class="isw-ok"></div>
            <h1>Form validation</h1>
         </div>
         <div class="block-fluid">
            <form id="validation" method="POST" action="http://aqvatarius.com/themes/aquarius/submit.action">
               <div class="row-form clearfix">
                  <div class="col-md-3">Date:</div>
                  <div class="col-md-9"><input value="" class="validate[required,custom[date]]" type="text" name="date" id="date"/> <span>Example: 2010-12-01</span></div>
               </div>
               <div class="row-form clearfix">
                  <div class="col-md-3">E-mail:</div>
                  <div class="col-md-9"><input value="" class="validate[required,custom[email]]" type="text" name="email" id="email" />  <span>Example: someone@nowhere.com</span></div>
               </div>
               <div class="row-form clearfix">
                  <div class="col-md-3">Required:</div>
                  <div class="col-md-9">
                     <select name="sport" id="sport" class="validate[required]" id="sport">
                        <option value="">Choose a sport</option>
                        <option value="option1">Tennis</option>
                        <option value="option2">Football</option>
                        <option value="option3">Golf</option>
                     </select>
                     <span>Required select field</span>
                  </div>
               </div>
               <div class="row-form clearfix">
                  <div class="col-md-3">User name:</div>
                  <div class="col-md-9">        
                     <input value="" class="validate[required,maxSize[5]]" type="text" name="user" id="user"/>
                     <span>Maximum 5 characters</span>
                  </div>
               </div>
               <div class="row-form clearfix">
                  <div class="col-md-3">Passowrd:</div>
                  <div class="col-md-9">        
                     <input value="" class="validate[required,minSize[5]]" type="password" name="password" id="password"/>
                     <span>Minimum 5 characters</span>
                  </div>
               </div>
               <div class="footer tar">
                  <button class="btn btn-default">Submit</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="dr"><span></span></div>
   <div class="row">
      <div class="col-md-12">
         <div class="head clearfix">
            <div class="isw-grid"></div>
            <h1>Fields grid</h1>
         </div>
         <div class="block-fluid">
            <div class="row-form clearfix">
               <div class="col-md-4"><input type="text" value="col-md-4"/></div>
               <div class="col-md-4"><input type="text" value="col-md-4"/></div>
               <div class="col-md-4"><input type="text" value="col-md-4"/></div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-5"><input type="text" value="col-md-5"/></div>
               <div class="col-md-5"><input type="text" value="col-md-5"/></div>
               <div class="col-md-2"><input type="text" value="col-md-2"/></div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-6"><input type="text" value="col-md-6"/></div>
               <div class="col-md-6"><input type="text" value="col-md-6"/></div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-9"><input type="text" value="col-md-9"/></div>
               <div class="col-md-3"><input type="text" value="col-md-3"/></div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-10"><input type="text" value="col-md-10"/></div>
               <div class="col-md-2"><input type="text" value="col-md-2"/></div>
            </div>
            <div class="row-form clearfix">
               <div class="col-md-12"><input type="text" value="col-md-12"/></div>
            </div>
         </div>
      </div>
   </div>
   <div class="dr"><span></span></div>
</div>
</div>   
</div>    
</body>
</html>