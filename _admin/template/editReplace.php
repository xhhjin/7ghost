<?php include tpl('header');?>
<?php include tpl('menu');?>
	<div class="main">
			<form action="" method="POST">
				<h2 class="section-header">添加内容替换</h2>
				<input type="hidden" name='key' value='<?php _e($key)?>'></input>
				<?php
					w('text')->set('name','名称')
							->set('key','name')
							->set('value',$item['name'])
							->set('tipe','仅方便记忆')
							->e();
			
					w('textarea')->set('name','查找内容')
							->set('key','seach')
							->set('value',$item['seach'])
							->set('tipe','查找需要替换的内容,为正则匹配')
							->e();
					
					w('textarea')->set('name','替换为')
							->set('key','replace')
							->set('value',$item['replace'])
							->set('tipe','将查找到的内容替换为')
							->e();
				?>
				<input type="submit" class="m-button" value="提交" id="submit">
			</form>
	</div>
<?php include tpl('footer');?>