<h1>
    Hello Admin
</h1>
<hr/>
<h3><?=$title?></h3>
<br/>

<table class="list">
    <tr>
        <th style="text-align: center"> Test </th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>

<?php foreach($tests as $test){ ?>
        <tr>
            <td><?=$test->title?></td>
            <td><a href="/admin/test/Edit?test_id=<?=$test->id?>">Edit</a></td>
            <td><a href="/admin/test/Insert?test_id=<?=$test->id?>">Insert</a></td>
            <td><a onclick="return confirm('Are you sure you want to delete?');" href="/admin/test/delete?test_id=<?=$test->id?>">Delete</a></td>
        </tr>
<?php } ?>
</table>





<!--
    we need a table with the delete and edite button for every test, for delete,
    we make a new page to delete tests from the database !
-->

