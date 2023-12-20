<aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="/style/dist/img/avatar5.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>mohamed Ashraf</p>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header"> مدير التطبيق</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li ><a  href="../"><i class="fa fa-bar-chart"></i> <span>الاحصائيات العامة</span></a></li>
                    <li class="<?= $this->matchUrl('/') === true ? 'active' : '' ?>" class="treeview courses">
                        <a href="../"><i class="fa fa-users"></i> <span>المستخدمين </span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="../users"><i class="fa fa-circle-o"></i>قائمة المستخدمين</a></li>
                            <li><a href="/usersgroup"><i class="fa fa-users"></i>مجموعة المستخدمين</a></li>
                            <li><a href="../privileges"><i class="fa fa-circle-o"></i>صلاحيات المستخدمين</a></li>


                        </ul>
                     </li>

                     <li class="treeview courses">
                        <a href="../store"><i class="fa fa-university"></i> <span>المخزن </span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="../products"><i class="fa fa-circle-o"></i>أصناف المنتجات  </a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i>المنتجات  </a></li>
                        </ul>
                     </li>

                     <li class="treeview courses">
                        <a href="../clients"><i class="fa fa-user"></i> <span>العملاء </span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i>الموردين</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i>المنتجات  </a></li>
                        </ul>
                     </li>
                     <li class="treeview courses">
                        <a href="../suppliers"><i class="fa fa-user-secret"></i> <span>الموردين </span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i>الموردين</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i>المنتجات  </a></li>
                        </ul>
                     </li>
                     
                     <li class="treeview courses">
                        <a href="#"><i class="fa fa-money"></i> <span>المعاملات </span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i>الموردين</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i>المنتجات  </a></li>
                        </ul>
                     </li>
                     <li class="treeview courses">
                        <a href="#"><i class="fa fa-book"></i> <span>التقارير </span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i>الموردين</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i>المنتجات  </a></li>
                        </ul>
                     </li>
                     <li class="treeview courses">
                        <a href="#"><i class="fa fa-bell"></i> <span>التنبيهات </span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i>الموردين</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i>المنتجات  </a></li>
                        </ul>
                     </li>

                    <li><a href=""><i class="fa fa-sign-out"></i> <span>تسجيل الخروج</span></a></li>



                    <!-- <li class="treeview courses">
                        <a href="#"><i class="fa fa-book"></i> <span>ورش العمل</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="courses.html"><i class="fa fa-circle-o"></i>ورش العمل </a></li>
                            <li><a href="add-course.html"><i class="fa fa-circle-o"></i>اضافة ورشة عمل</a></li>
                        </ul>
                    </li> -->

                </ul>
                <!-- /.sidebar-menu -->




                
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        
        <div class="action_view <?= (isset($_COOKIE['menu_opened']) && $_COOKIE['menu_opened'] == 'true') ? 'collapsed no_animation' : '' ?>">
<?php $messages = $this->messenger->getMessages(); if(!empty($messages)): foreach ($messages as $message): ?>
<p  id="success" class="message t<?= $message[1] ?>"><?= $message[0] ?><a href="" class="closeBtn"><i class="fa fa-times"></i></a>   <script>
                        $(document).ready(function(){
                          $(success).fadeIn(1000).delay(9000).fadeOut(1000) ;
                        });
                    </script></p>
<?php endforeach;endif; ?>


