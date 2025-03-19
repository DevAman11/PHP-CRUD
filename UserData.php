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

<!-- component -->
<div class="flex flex-col mt-15">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden ">
        <table class="min-w-full text-center">
          <thead class="border-b">
            <tr class=" bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-lg">
              <th scope="col" class="text-sm font-medium text-white-900 px-6 py-4">
                ID
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                NAME
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                USERNAME
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                EMAIL
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                PASSWORD
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            
            while($RowData = mysqli_fetch_assoc($result)){
             echo "<tr class='border-b'>
              <td class='text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap'>
               $RowData[ID]
              </td>
              <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>
                $RowData[Name]
              </td>
              <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>
                $RowData[Username]
              </td>
              <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>
              $RowData[Email]
              </td>
              <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>
               $RowData[Password]
              </td>
            </tr>";
          }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>