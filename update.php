<?php
include "config.php";

$id=$_GET["edit"];
// var_dump($id);
// die;
$query = "SELECT * FROM tb_tagihan WHERE id_tagihan='$id' ";
$sql=mysqli_query($koneksi,$query);
$result=mysqli_fetch_assoc($sql);
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
          <h1 class="font-bold text-2xl">Edit Data :)</h1>
          <form class="flex flex-col bg-gray-500 rounded shadow-lg p-12 mt-12" action="insertdata.php" method="post">

            <label class="font-semibold text-xs"  for="hari">hari</label>

            <input class="flex items-center h-12 px-4 w-64 bg-gray-300 mt-2 rounded focus:outline-none focus:ring-2"
            id="hari"  type="text" name="hari" value="<?php echo $result['hari_tagihan']  ?>" required />


            <label class="font-semibold text-xs mt-3"  for="tagihan">tagihan</label>

            <input class="flex items-center h-12 px-4 w-64 bg-gray-300 mt-2 rounded focus:outline-none focus:ring-2"
         id="tagihan" name="tagihan"    type="text" value="<?php echo $result['tagihan_tagihan']  ?>" required />

              <label class="font-semibold text-xs mt-3" for="deadline">deadline</label>

       <input class="flex items-center h-12 px-4 w-64 bg-gray-300 mt-2 rounded focus:outline-none focus:ring-2"
 id="deadline" name="deadline"    type="text" value="<?php echo $result['deadline_tagihan']  ?>" required />

 <input type="hidden" name="id" value="<?php echo $result['id_tagihan'] ?>">

            <button type="submit" class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Edit</button>
             </form>
          <!-- Component End  -->




          <script src="https://cdn.tailwindcss.com"></script>
        </body>



        </html>