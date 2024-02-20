<?php
include "config.php";
$query = "SELECT * FROM tb_tagihan";
$sql=mysqli_query($koneksi,$query);
$result=mysqli_fetch_assoc($sql);
  // var_dump($result);
  $no = 0;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body>

<!-- navbar start -->
<div class="navbar bg-base-100">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a href="https://www.instagram.com/mhmmdhjri__/">instagram</a></li>
        <li><a href="https://www.linkedin.com/in/muhammad-hijri-70539a287/">Linkedin</a></li>
        <li><a href="https://portofoliomuhi.vercel.app/">Portfolio</a></li>
       
      </ul>
    </div>
  </div>
  <div class="navbar-center">
    <a class="btn btn-ghost text-xl">Buku Tagihan</a>
  </div>
  <div class="navbar-end">
  
  </div>
</div>
<!-- navbar end -->
<div class="p-5">
<button class="btn  btn-success"><a href="insert.php">Add</a></button>
</div>

<div class="overflow-x-auto mt-4">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>Hari</th>
        <th>Tagihan</th>
        <th>Deadline</th>
        <th>Button</th>
      </tr>
    </thead>
    <tbody>
     <?php 
    while($result = mysqli_fetch_assoc($sql)){
       ?>
      <tr class="hover">
      <th><?php echo ++$no ?></th>
        <td><?php echo $result['hari_tagihan'] ?></td>
        <td><?php echo $result['tagihan_tagihan'] ?></td>
        <td><?php echo $result['deadline_tagihan'] ?></td>
        <td>
                <button class="btn btn-info"><a href="update.php?edit=<?php echo $result['id_tagihan'] ?>">Edit</a></button>
                <button class="btn  btn-error"> <a href="delete.php?delete=<?php echo $result['id_tagihan'] ?>">Delete</a></button>
                
      </form>
    </div>
  </div>
</dialog>
            </td>
      </tr>
    <?php  } ?>
    </tbody>
  </table>
</div>






<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>