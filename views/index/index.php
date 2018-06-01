<h1>HomePage</h1>

<h4>
Welcome here you can see all the notes and dashboard messages!
</h4>

<br>

<?php if (Session::get('loggedIn') == true):?>
<p>
Great job! You are logged in!
</p>
<?php else: ?>
<p>
But first lets get you logged in! The button is on the right top!
</p>
<?php endif; ?>
