         
<div class="container">

  
       
           <div class="num-1">
          
           <a href="employee/add/">إضافة موظف جديد</a>
 
           <h3 class="titel-1">عرض بيانات الموظف</h3>  


           <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">الاسم</th>
                        <th scope="col">العمر</th>
                        <th scope="col">العنوان</th>
                        <th scope="col">الراتب</th>
                        <th scope="col">التحكم</th>

                        
                        </tr>
                    </thead>
                    <tbody>
                       <?php 
                      
                            if(false !== $employeess) {
                                foreach ($employeess as $employee) {
                        ?>
                        
                               <tr>
                               <td><?= $employee->Name;?></td>
                                <td><?= $employee->PhoneNumber; ?></td>
                                <td><?= $employee->Email; ?></td>
                                <td><?= $employee->Address ;?></td>
                                <td>
                                    <a href="/employee/edit/<?=$employee->ClientId?>" class="btn btn-success">
                                    <i class="fa fa-edit"></i>Edit</a>
                                    <a href="/employee/delete/<?=$employee->ClientId?>" class="btn btn-danger confirm" >
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
    