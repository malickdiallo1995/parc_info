<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>
                <table >
                        <tr>
                            <th >ID</th>
                            <th>Nom</th>
                            <th>Action</th>
                                               
                        </tr>
                        <?php
                           foreach ($datas['eleves'] as $eleve) 
                          {
                        ?>                            
                                <tr>
                                    <td><?php echo $eleve['id'] ?></td>
                                    <td><?php echo $eleve['nom'] ?></td>
                                    
                                    <td><a href="delete/<?php echo $eleve['id'] ?>" >Delete</a></td>	
                                    <!-- Lien de Suppression -->	
                                    <td><a href=''>Edit</a></td>
                                </tr>
                        <?php        
                          } 
                        ?>                                                   
                    </table>	
