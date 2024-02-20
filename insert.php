       <?php
include "config.php";

       ?>
       
       <!DOCTYPE html>
        <html lang="en">

        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="src/output.css">
          <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
          <title>Add Your Data</title>
        </head>

        <body class="flex flex-col items-center justify-center w-screen h-screen bg-gray-900 text-white">
         
          <!-- Component Start -->
          <h1 class="font-bold text-2xl">Tambahkan Data :)</h1>
          <form class="flex flex-col bg-gray-500 rounded shadow-lg p-12 mt-12" action="insertdata.php" method="post">

            <label class="font-semibold text-xs"  for="hari">hari</label>

            <input class="flex items-center h-12 px-4 w-64 bg-gray-300 mt-2 rounded focus:outline-none focus:ring-2"
            id="hari"  type="text" name="hari">


            <label class="font-semibold text-xs mt-3"  for="tagihan">tagihan</label>

            <input class="flex items-center h-12 px-4 w-64 bg-gray-300 mt-2 rounded focus:outline-none focus:ring-2"
         id="tagihan" name="tagihan"    type="text">

              <label class="font-semibold text-xs mt-3" for="deadline">deadline</label>

       <input class="flex items-center h-12 px-4 w-64 bg-gray-300 mt-2 rounded focus:outline-none focus:ring-2"
 id="deadline" name="deadline"    type="text">

            <button type="submit" class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">ADD</button>
          
             </form>
          <!-- Component End  -->




          <script src="https://cdn.tailwindcss.com"></script>
        </body>



        </html>