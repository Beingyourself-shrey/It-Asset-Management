<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
      <title>
         IT Asset Management
      </title>
      <link rel="stylesheet" type="text/css" href="itassetother2.css">
   <body>
      <?php
         $host="localhost";
         $user="id765132_crazymeshrey";
         $db="id765132_shrey";
         $pass="mydatabase";
         $conn=new mysqli($host,$user,$pass,$db);
         if($conn->connect_error)
         die($conn->connect_error);
         $userErr="";
         $depaErr="";
         $workspaceErr="";
         $hostnameErr="";
         $floorErr="";
         $deviceErr="";
         $typeErr="";
         $modelErr="";
         $serErr="";
         $cpuErr="";
         $speedErr="";
         $hddErr="";
         $ramErr="";
         $cdromErr="";
         $cdwriterErr="";
         $makeErr="";
         $srErr="";
         $softwareErr="";
         $dateErr="";
         $validErr="";
         $insErr="";
         $poErr="";
         $gateErr="";
         if($_SERVER['REQUEST_METHOD']=="POST")
         {
         
         $error=0;
           if(empty($_POST['username']))
           {
                $userErr="Please Enter Username";
                 $error=1;
            }
         if(empty($_POST['department']))
           {
                $depaErr="Please Enter Department";
                 $error=1;
            }
         if(empty($_POST['hostname']))
           {
                $hostnameErr="Please Enter Hostname";
                 $error=1;
            }
         elseif(isset($_POST['add'])){
         $data=test($_POST['hostname']);
         $sql1="SELECT `host name` FROM `itm` WHERE `host name`='$data' ";
         $result=$conn->query($sql1);
         if($conn->error)
         die($conn->error);
          if($result->num_rows>0)
          {
           $error=1;
           $hostnameErr="Hostname Already Exist";
         
          }
         }
         elseif(isset($_POST['update'])){
         $data=test($_POST['hostname']);
                $sql1="SELECT `host name` FROM `itm` WHERE `host name`='$data' ";
                   $result=$conn->query($sql1);
                   if($conn->error)
                  die($conn->error);
                  if($result->num_rows==0)
                      {
                    $error=1;
                    $hostnameErr="Hostname Not Exist";
         
                  }
         
         }
         if(empty($_POST['userworkshop']))
           {
                $workspaceErr="Please Enter User WorkPlace";
                 $error=1;
            }
         if(empty($_POST['type']))
           {
                $typeErr="Please Enter Type";
                 $error=1;
            }
         if(empty($_POST['model']))
           {
                $modelErr="Please Enter Model Name";
                 $error=1;
            }
         if(empty($_POST['serial']))
           {
                $serErr="Please Enter Serial Number";
                 $error=1;
            }
         if(empty($_POST['cpu']))
           {
                $cpuErr="Please Enter CPU Type";
                 $error=1;
            }
         if(empty($_POST['speed']))
           {
                $speedErr="Please Enter Speed";
                 $error=1;
            }
         if(empty($_POST['hdd']))
           {
                $hddErr="Please Enter Harddisk Capacity";
                 $error=1;
            }
         if(empty($_POST['ram']))
           {
                $ramErr="Please Enter Ram Amount";
                 $error=1;
            }
         if($_POST['cdrom']=="Cd Rom")
           {
                $cdromErr="Please Enter Cd Rom";
                 $error=1;
            }
         if($_POST['cdwriter']=="Cd Writer")
           {
                $cdwriterErr="Please Enter Cd Writer";
                 $error=1;
            }
         if(empty($_POST['make']))
           {
                $makeErr="Please Enter Make";
                 $error=1;
            }
         if(empty($_POST['sr']))
           {
                $srErr="Please Enter SR No.";
                 $error=1;
            }
         if(empty($_POST['softwareloaded']))
           {
                $softwareErr="Please Enter Software Loaded";
                 $error=1;
            }
         if(empty($_POST['dateofinstall']))
           {
                $dateErr="Please Enter Date Of Installation";
                 $error=1;
            }
         if($_POST['validated']=="Validated")
           {
                $validErr="Please Enter Validated Or anot";
                 $error=1;
            }
         if(empty($_POST['instrumentconnected']))
           {
                $insErr="Please Enter Instrument Connected Or Not";
                 $error=1;
            }
         if(empty($_POST['po']))
           {
                $poErr="Please Enter PO#";
                 $error=1;
            }
         if(empty($_POST['gatepass']))
           {
                $gateErr="Please Enter Gatepass Taken Or Not";
                 $error=1;
            }
           if($error!=1&&isset($_POST['add']))
          {
         $sql="INSERT INTO itm(`user's workplace`, `department`, `floor`, `user name`, `host name`, `desktop`, `type`, `model`, `serial no`, `cpu`, `cpu speed`, `hdd`, `ram`, `cd rom`,`cdwriter`, `make`, `sr.no`, `software's loaded`, `installation date`, `validated`, `instrument connected`, `po#`, `gatepass`) VALUES ('{$_POST['userworkshop']}','{$_POST['department']}','{$_POST['floor']}','{$_POST['username']}','{$_POST['hostname']}','{$_POST['device']}','{$_POST['type']}','{$_POST['model']}','{$_POST['serial']}','{$_POST['cpu']}','{$_POST['speed']}','{$_POST['hdd']}','{$_POST['ram']}','{$_POST['cdrom']}','{$_POST['cdwriter']}','{$_POST['make']}','{$_POST['sr']}','{$_POST['softwareloaded']}','{$_POST['dateofinstall']}','{$_POST['validated']}','{$_POST['instrumentconnected']}','{$_POST['po']}','{$_POST['gatepass']}')";
         $conn->query($sql);
         if($conn->error)
         die($conn->error);
         echo "<script>  alert('Data Added SuccessFully')   </script>";
          }
          if($error!=1&&isset($_POST['update']))
         {
         $sql="UPDATE itm SET `user's workplace`='{$_POST['userworkshop']}', `department`='{$_POST['department']}', `floor`='{$_POST['floor']}', `user name`='{$_POST['username']}', `host name`='{$_POST['hostname']}', `desktop`='{$_POST['device']}', `type`='{$_POST['type']}', `model`='{$_POST['model']}', `serial no`='{$_POST['serial']}', `cpu`='{$_POST['cpu']}', `cpu speed`='{$_POST['speed']}', `hdd`='{$_POST['hdd']}', `ram`='{$_POST['ram']}', `cd rom`='{$_POST['cdrom']}',`cdwriter`='{$_POST['cdwriter']}', `make`='{$_POST['make']}', `sr.no`='{$_POST['sr']}', `software's loaded`='{$_POST['softwareloaded']}', `installation date`='{$_POST['dateofinstall']}', `validated`='{$_POST['validated']}', `instrument connected`='{$_POST['instrumentconnected']}', `po#`='{$_POST['po']}', `gatepass`='{$_POST['gatepass']}' WHERE `host name`='{$_POST['hostname']}'";
         $conn->query($sql);
         if($conn->error)
         die($conn->error);
          echo "<script>  alert('Data Updated SuccessFully')   </script>";
         }
         
         }
         function test($data)
         {
         trim($data);
         stripslashes($data);
         htmlspecialchars($data);
         return $data;
         }
         ?>
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
         <div class="box ">
            <div class="text1">IT ASSET MANAGEMENT</div>
            <div class="row">
               <div class="col">
                  <input type="text" class="username textbox" name="username" placeholder=" Username"><span class="red" >*</span>
                  <div class="red1"><?php echo $userErr; ?></div>
               </div>
               <div class="col">
                  <input type="text" class="username textbox" name="department" placeholder=" Department"><span class="red" >*</span>
                  <div class="red1"><?php echo $depaErr; ?></div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <input type="text" class="username textbox" name="hostname" placeholder=" Hostname"><span class="red" >*</span>
                  <div class="red1"><?php echo $hostnameErr; ?></div>
               </div>
               <div class="col">
                  <input type="text" class="username textbox" name="userworkshop" placeholder=" User's Workshop"><span class="red" >*</span>
                  <div class="red1"><?php echo $workspaceErr; ?></div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <select class="choice textbox" name="floor">
                     <option>
                        Ground Floor
                     </option>
                     <option>
                        First Floor
                     </option>
                     <option>
                        Second Floor
                     </option>
                  </select>
                  <span class="red" >*</span>
                  <div class="red1"><?php echo $floorErr; ?></div>
               </div>
               <div class="col">
                  <select class="choice textbox" name="device">
                     <option>
                        LAPTOP
                     </option>
                     <option>
                        DESKTOP
                     </option>
                  </select>
                  <span class="red" >*</span>
                  <div class="red1"><?php echo $deviceErr; ?></div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <input type="text" class="username textbox" name="type" placeholder=" Type"><span class="red" >*</span>
                  <div class="red1"><?php echo $typeErr; ?></div>
               </div>
               <div class="col">
                  <input type="text" class="username textbox" name="model" placeholder=" Model"><span class="red" >*</span>
                  <div class="red1"><?php echo $modelErr; ?></div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <input type="text" class="username textbox" name="serial" placeholder=" Serial Number"><span class="red" >*</span>
                  <div class="red1"><?php echo $serErr; ?></div>
               </div>
               <div class="col">
                  <input type="text" class="username textbox" name="cpu" placeholder="Processsor Name"><span class="red" >*</span>
                  <div class="red1"><?php echo $cpuErr; ?></div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <input type="text" class="username textbox" name="speed" placeholder="Processor Speed"><span class="red" >*</span>
                  <div class="red1"><?php echo $speedErr; ?></div>
               </div>
               <div class="col">
                  <input type="text" class="username textbox" name="hdd" placeholder=" Hardisk Amount"><span class="red" >*</span>
                  <div class="red1"><?php echo $hddErr; ?></div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <input type="text" class="username textbox" name="ram" placeholder="Ram Amount"><span class="red" >*</span>
                  <div class="red1"><?php echo $ramErr; ?></div>
               </div>
               <div class="col">
                  <select class="choice textbox" name="cdrom">
                     <option>
                        Cd Rom
                     </option>
                     <option>
                        Yes
                     </option>
                     <option>
                        No
                     </option>
                  </select>
                  <span class="red" >*</span>
                  <div class="red1"><?php echo $cdromErr; ?></div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <select class="choice textbox" name="cdwriter">
                     <option>
                        Cd Writer
                     </option>
                     <option>
                        Yes
                     </option>
                     <option>
                        No
                     </option>
                  </select>
                  <span class="red" >*</span>
                  <div class="red1"><?php echo $cdwriterErr; ?></div>
               </div>
               <div class="col">
                  <input type="text" class="username textbox" name="make" placeholder=" Make"><span class="red" >*</span>
                  <div class="red1"><?php echo $makeErr; ?></div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <input type="text" class="username textbox" name="sr" placeholder=" SR No."><span class="red" >*</span>
                  <div class="red1"><?php echo $srErr; ?></div>
               </div>
               <div class="col">
                  <input type="text" class="username textbox" name="softwareloaded" placeholder="Software's Loaded"><span class="red" >*</span>
                  <div class="red1"><?php echo $softwareErr; ?></div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <input type="date" class="username textbox" name="dateofinstall" placeholder="Installation/Issuance Date"><span class="red" >*</span>
                  <div class="red1"><?php echo $dateErr; ?></div>
               </div>
               <div class="col">
                  <select class="choice textbox" name="validated">
                     <option>
                        Validated
                     </option>
                     <option>
                        Yes
                     </option>
                     <option>
                        No
                     </option>
                  </select>
                  <span class="red" >*</span>
                  <div class="red1"><?php echo $validErr; ?></div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <input type="text" class="username textbox" name="instrumentconnected" placeholder="Instrument Connected">
                  <span class="red" >*</span>
                  <div class="red1"><?php echo $insErr; ?></div>
               </div>
               <div class="col">
                  <input type="text" class="username textbox" name="po" placeholder="PO#"><span class="red" >*</span>
                  <div class="red1"><?php echo $poErr; ?></div>
               </div>
            </div>
            <div class="col">
               <input type="text" class="username textbox" name="gatepass" placeholder="Gatepass"><span class="red" >*</span>
               <div class="red1"><?php echo $gateErr; ?></div>
            </div>
            <input type="submit" class="butt " value="ADD" name="add">
            <br>
            <input type="submit" class="butt" style="margin-top:14px;" value="UPDATE" name="update">
            <br><br>
         </div>
      </form>
      <br>
      <br><br>
      <br>
   </body>
</html>