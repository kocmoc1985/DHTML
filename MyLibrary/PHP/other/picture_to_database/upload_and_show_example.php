
<h2>Upload img to db</h2>

<form action="submit.php" method="POST" enctype="multipart/form-data">
    <label>File: </label><input type="file" name="image" />
    <input type="hidden" name="pic_upload" value="true">
    <input type="submit" />
</form>

<h2>Get & show img</h2>
<img src="submit.php?image_from_db_id=1" width="175" height="200" />



