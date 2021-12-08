<div>
	<a href="adminpanel.php?action=add">Добавить статью</a>
	<table class="admin-table">
		<tr>
		<th>Дата</th>
		<th>Заголовок</th>
		<th></th>
		<th></th>
		</tr>
		<?php foreach($articles as $a): ?>
			<tr>
				<td><?=$a['date']?></td>
				<td><?=$a['title']?></td>
				<td>
					<a href="adminpanel.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
				</td>
				<td>
					<a href="adminpanel.php?action=delete&id=<?=$a['id']?>">Удалить</a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</div>
			
