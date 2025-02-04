<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

</head>
<body>
<?php
include "Navbar.php";
include "Dbconnection.php";

$SqlData = "Select * from myData";
$result = mysqli_query($Connection,$SqlData)
?>
<div class="bg-gray-50 min-h-screen">


  <div>
    <div class="p-4">
      <div class="bg-white p-4 rounded-md">
        <div>
          <h2 class="mb-4 text-xl font-bold text-gray-700">Admin & User</h2>
          <div>
            <div>
              <div class="flex justify-between bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-md py-2 px-4 text-white font-bold text-md">
                <div>
                  <span>ID</span>
                </div>
                <div>
                  <span>Name</span>
                </div>
                <div>
                  <span>Username</span>
                </div>
                <div>
                  <span>Email</span>
                </div>
                <div>
                  <span>Password</span>
                </div>
              </div>
              <div>

              <?php

              while($RowData = mysqli_fetch_assoc($result)){

               echo  "<div class='flex justify-between border-t text-sm font-normal mt-4 space-x-4'>
                <div class='px-2 flex'>
                  <span>$RowData[ID]</span>
                </div>
                <div>
                  <span>$RowData[Name]</span>
                </div>
                <div class='px-2'>
                  <span>$RowData[Username]</span>
                </div>
                <div class='px-2'>
                  <span>$RowData[Email]</span>
                </div>
                <div class='px-2'>
                  <span>$RowData[Password]</span>
                </div>
              </div>";


              }

               

                ?>
           
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>