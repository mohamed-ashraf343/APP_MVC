<section class="content-header">
<h1>
   تعديل بيانات المجموعة
</h1>
</section>

<section class="content">
          <div class="row">
          <div class="col-md-2"></div>

             <div class="col-md-8">
              <!-- Start Alerts Messages -->
            
              <div class="alert alert-success " id="success" style="display:none">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-check "></i>
                User Added Successfully
                  
              </div>
              <!-- End Alerts Messages -->

            </div>   
            <div class="clearfix "></div>
               
             <div class="col-md-2"></div>

             <div class="col-md-8">
               <div class="box box-info">
                 
                  <!-- form start -->
                  <form class="form-horizontal" id="addForm" method="post" action="">
                 

                      <div class="box-body">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">اسم المجموعة</label>
                            <div class="col-sm-10">
                              <input type="text" name="GroupName" class="form-control" placeholder="Enter GroupName" autocomplete="off" required="required" data-text="Enter GroupName" value="<?= $group->GroupName?>">
                            </div>
                          </div>   
                      
                
                      <div class="form-group col-md-4">
                      <div class="form-group">

                      </div>
                            <?php if($privileg !== false) : foreach($privileg as $privile) : ?>
                                  <div class="checkbox">
                                    <label>
                                        
                                      <input  type="checkbox" name="Privilege[]" <?= in_array($privile->PrivilegeId, $groupPrivileg)? 'checked' : '' ?>    value="<?= $privile->PrivilegeId?>">  
                                    </label>
                                    <span><?= $privile->Privilege?></span>
                                  </div>
                              <?php endforeach; endif; ?>
                        </div>
                      

                     

                      
                    
                    </div><!-- /.box-body -->


                    <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-info pull-right"><i class="fa fa-plus"></i> اضــافة</button>
                    </div><!-- /.box-footer -->
                  </form>
               </div><!-- /.box -->
               

              
            </div><!--/.col-->
          </div><!-- /.row -->
          
         
        </section>