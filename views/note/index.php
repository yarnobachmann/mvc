<h1>Note</h1>

<form method="post" action="<?php echo URL;?>note/create">
    <label for="title">title</label><input class="col-5 form-control" type="text" name="title" /><br />
    <label for="content">content</label><textarea class="col-5 form-control" name="content"></textarea><br />
    <label>&nbsp;</label><input class="form-control col-3" type="submit" />
</form>

<hr />

<table>
<?php
    foreach($this->noteList as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['title'] . '</td>';
        echo '<td>' . $value['date_added'] . '</td>';
        echo '<td><a href="'. URL . 'note/edit/' . $value['noteid'].'">Edit</a></td>';
        echo '<td><a class="delete" href="'. URL . 'note/delete/' . $value['noteid'].'">Delete</a></td>';
        echo '</tr>';
    }
?>
</table>

<script>
$(function() {

    $('.delete').click(function(e) {
        var c = confirm("Are you sure you want to delete?");
        if (c == false) return false;

    });

});
</script>
