<!-- list of all answers -->


<h1>
    Hello Admin
</h1>
<hr/>
<h3><?=$title?>.<?=$quest_title?></h3>
<br/>

<a class="btn btn-primary" href="/admin/answer/add">Add New Answer</a><br/><br/>

<table class="table">
    <tr>
        <th style="text-align: center"> Answers </th>
        <th style="text-align: center">Question ID</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>

    </tr>

    <?php foreach ($answers as $answer){?>
    <tr>
        <td><?=$answer->title?></td>
        <td style="text-align: center"><?=$answer->quest_id?></td>
        <td><a href="/admin/answer/edit?id=<?=$answer->id?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></td>
        <td><a onclick="return confirm('Are you sure you want to delete?');" href="/admin/answer/delete?id=<?=$answer->id?>"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
    </tr>

<?php }?>

