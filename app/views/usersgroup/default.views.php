<h1>مرحبا بكم في مجموعة المستخدمين </h1>    
         
<div class="container">     
           <div class="num-1">        
           <h3 class="titel-1">عرض بيانات المجموعة</h3>
           <a class="btn-l" href="usersgroup/create">إضافة مجموعة جديد</a>

           <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">إٍسم المجموعة</th>

                        <th scope="col">  التحكم</th>                        
                        </tr>
                    </thead>
                    <tbody>
                       <?php                 
                            if(false !== $groups) {
                                foreach ($groups as $group) {
                        ?>                      
                               <tr>
                               <td><?= $group->GroupName;?></td>

                                <td>
                                    <a href="/usersgroup/edit/<?=$group->GroupId?>" class="btn btn-success">
                                    <i class="fa fa-edit"></i>Edit</a>
                                    <a href="/usersgroup/delete/<?=$group->GroupId?>" class="btn btn-danger confirm" >
                                    <i class="fa fa-close">Delete</i>
                                </a>
                                </td>
                               </tr>                             
                                <?php                               
                                }
                            }else {
                                ?>
                                <td colspan="5"><p>لا يوجد بيانات مجموعة لعرضها</p></td>
                                <?php
                            }
                       ?>
                    </tbody>
            </table>
           </div>
        </div>
        </div>
    