<h1>مرحبا بكم في صفحة المستخدمين</h1>    
         
<div class="container">     
           <div class="num-1">        
           <a href="users/create">إضافة مستخدم جديد<i class="fa fa-plus fo"></i></a>
           <h3 class="titel-1">عرض بيانات الموظف</h3>
           <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">إٍسم المستخدم</th>
                        <th scope="col">البريد الالكتروني</th>
                        <th scope="col">رقم الهاتف </th>
                        <th scope="col">وقت التسجيل</th>
                        <th scope="col">اخر وقت الدخول</th>
                        <th scope="col"> المجموعة التابع لها</th>
                        <th scope="col">  التحكم</th>                        
                        </tr>
                    </thead>
                    <tbody>
                       <?php                 
                            if(false !== $users) {
                                foreach ($users as $user) {
                        ?>                      
                               <tr>
                               <td><?= $user->Username;?></td>
                               <td><?= $user->Email; ?></td>
                                <td><?= $user->PhoneNumber; ?></td>
                                <td><?= $user->SubscriptionDate ;?></td>
                                <td><?= $user->LastLogin ;?></td>
                                <td><?= $user->GroupId ;?></td>
                                <td>
                                    <a href="/employee/edit/<?=$user->UserId?>" class="btn btn-success">
                                    <i class="fa fa-edit"></i>Edit</a>
                                    <a href="/employee/delete/<?=$user->UserId?>" class="btn btn-danger confirm" >
                                    <i class="fa fa-close">Delete</i>
                                </a>
                                </td>
                               </tr>                             
                                <?php                               
                                }
                            }else {
                                ?>
                                <td colspan="5"><p>Sorry No Employees to list</p></td>
                                <?php
                            }
                       ?>
                    </tbody>
            </table>
           </div>
        </div>
    