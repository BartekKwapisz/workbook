<?php include 'header.php' ?>
 

 <!-- ***** Main Banner Area Start ***** -->
 
        <div id="topbanner">
               
        </div>
        <div id="maindiv" class="flex">
        <section class="section coming-soon" data-section="section3">
        
                        <form id="contact" action="" method="POST" name="search">
                              <div class="row">
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="search" type="text" class="form-control" id="name" placeholder="Search" required="">
                                  </fieldset>
                                </div>
                                 
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="button" name="submit-search">Search</button>
                                  </fieldset>
                                </div>
                              </div>
                        </form>

                        <table id="customers">
                          <tr>
                            <th>Job title</th>
                            <th>Country</th>
                            <th>Salary</th>
                          </tr>
                              <?php  
                                        $_SESSION['searchClicked'] = false;

                                        if(isset($_POST["submit-search"])){ 
                                          $_SESSION['searchClicked'] = true;   
                                          $search = mysqli_real_escape_string($conn, $_POST['search']);
                                          $sql = "SELECT * FROM workers WHERE title LIKE '%$search%' OR salary LIKE '%$search%' OR country LIKE '%$search%'";
                                          $result = mysqli_query($conn, $sql);
                                          $queryResults = mysqli_num_rows($result);
                                          if($queryResults > 0) {
                                              while($row = mysqli_fetch_assoc($result)) {
                                                  echo "<tr>
                                                  <td>".$row['title']."</td>
                                                  <td>".$row['country']."</td>
                                                  <td>".$row['salary']."</td>
                                                  </tr>";
                                              }
                                          } else {
                                              echo "<tr><td>there are no </td><td>results matching </td><td>your search criteria</td></tr>";
                                          } 
                                        }
                              
                                        if(!$_SESSION['searchClicked']) {
                                                  include_once 'php/dbh.inc.php';
                                                  $sql="SELECT * FROM workers;";
                                                  $result = mysqli_query($conn, $sql);
                                                  $queryResults = mysqli_num_rows($result);
                                                  if ($queryResults > 0){
                                                    while ($row=mysqli_fetch_assoc($result)){
                                                      echo "<tr>
                                                              <td>".$row['title']."</td>
                                                              <td>".$row['country']."</td>
                                                              <td>".$row['salary']."</td>
                                                      </tr>";
                                                    }
                                                  }
                                        };
                                         
                                       
                              ?>
                        </table>
                        <div class="flex reloadbtn">
                              <form action=" " method="POST" >
                                  <button type="submit" name="submit" id="refresh">reload</button>
                              </form> 
                              <form action="php/deleteWorkers.php" method="POST" >
                                  <button type="submit" name="submit" id="delete">delete</button>
                              </form> 
                        </div>                      
                        <?php
                          if(isset($_POST["submit-search"])){ 
                            $_SESSION['searchClicked'] = false;
                          }
                         ?>
                    
        </section>
        </div> 
        
  <!-- ***** Main Banner Area End ***** -->
<?php include 'footer.php' ?>
