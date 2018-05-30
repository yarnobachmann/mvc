<h1>Note: Edit</h1>

<form method="post" action="<?php echo URL;?>note/editSave/<?php echo $this->note[0]['noteid']; ?>">
    <label for="title">Title</label><input class="col-5 form-control" type="text" name="title" value="<?php echo $this->note[0]['title']; ?>" /><br />
    <label for="content">Content</label><textarea class="col-5 form-control" name="content"><?php echo $this->note[0]['content'];?></textarea><br />
    <label>&nbsp;</label><input class="col-3 form-control" type="submit" />
</form>
