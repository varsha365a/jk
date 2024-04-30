<?php
include('dbcon.php');
include('header.php');
?>
<div class="container col-lg-6">
    <form enctype="multipart/form-data" method="post" action="upload.php">
        <div class="col-lg-6">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
        </div>
        <div class="col-lg-6">
        <label for="file">Browse file: </label>
        <input type="file" name="image" id="file">
        </div>
        <div class="mt-4"></div>
        <div class="col-lg-6">
        <input type=submit name="submit" value="submit">
        </div>
    </form>
</div>

<?php
include('footer.php');
?>