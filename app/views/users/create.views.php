<div class="content-wrapper" style="min-height: 455px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           بيانات المستخدم
          </h1>
        </section>
        <!-- Main content -->
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
                        <label class="col-sm-2 control-label">إسم المستخدم</label>
                        <div class="col-sm-10">
                          <input type="text" name="username" class="form-control" placeholder="Enter Username" autocomplete="off" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">كلمة المرور</label>
                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" placeholder="Enter Password" autocomplete="new-password" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">تأكيد كلمة المرور</label>
                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" placeholder="Enter Password" autocomplete="new-password" required="required">
                        </div>
                      </div>
              
                      <div class="form-group">
                        <label class="col-sm-2 control-label">البريد الالكتروني</label>
                        <div class="col-sm-10">
                          <input type="email" name="email" class="form-control" placeholder="Enter Email" autocomplete="off" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">تاكدي البريد الالكتروني </label>
                        <div class="col-sm-10">
                          <input type="email" name="email" class="form-control" placeholder="Enter Email" autocomplete="off" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">رقم الهاتف</label>
                        <div class="col-sm-10">
                          <input type="text" name="PhoneNumber" class="form-control" placeholder="Enter PhoneNumber" autocomplete="off" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">مجموعة المستخدمين</label>
                        <div class="col-sm-4">
                          <select name="user_type" class="form-control" id="user_type" required="">
                            <option value="">Choose Group User Type</option>
                            <option value="superadmin">Admin</option>
                            <option value="admin">User</option>
                          </select>
                        </div>
                      </div>


                      
                    
                    </div><!-- /.box-body -->


                    <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-info pull-center"> حفظ <i class="fa fa-plus fo"></i></button>
                    </div><!-- /.box-footer -->
                  </form>
               </div><!-- /.box -->
               

              
            </div><!--/.col-->
          </div><!-- /.row -->
          
         
        </section><!-- /.content -->
      </div>