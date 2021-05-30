 <?php
 if (isset($_POST['submit'])) {
	 echo "<script>alert('you had upload file')</script>";
	 $upload_file = $_FILES['upload_file'];
	 print_r($upload_file['name']);
	 echo '<br>';
	 echo 'http://example.com/wp-content/uploads/2021/05/filename';
 }
 
 
 
 ?>
 
 <form action="" method="post" enctype="multipart/form-data">
 <input type="file" name="upload_file[]"><br>
 <button type="submit" name="submit">Upload !!</button>
  <center><h6 style="color: red;font-size: 10px;  ">©copyright by Killer007</h6></center>
 
 
 </form>
 
