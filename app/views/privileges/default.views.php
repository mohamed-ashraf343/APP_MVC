<h1>مرحبا بكم في الصلاحيات </h1>    
         
<div class="container">  
           <div class="num-1">        
           <h3 class="titel-1">عرض جدول الصلاحيات </h3>
           <a class="btn-l" href="privileges/create">إضافةصلاحية مستخدم</a>

           <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">الصلاحية </th>

                        <th scope="col">  التحكم</th>                        
                        </tr>
                    </thead>
                    <tbody>
                       <?php                 
                            if(false !== $privileg) {
                                foreach ($privileg as $privile) {
                        ?>                      
                               <tr>
                               <td><?= $privile->Privilege;?></td>

                                <td>
                                    <a href="/privileges/edit/<?=$privile->PrivilegeId?>" class="btn btn-success">
                                    <i class="fa fa-edit"></i>Edit</a>
                                    <a href="/privileges/delete/<?=$privile->PrivilegeId?>" class="btn btn-danger confirm" >
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
    