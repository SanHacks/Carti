  <div class="toolbar toolbar-bottom" style="background-color:#8ec630" >
    <div class="toolbar-inner"><a href="index.php" class="link"><i class="icon f7-icons">home_fill</i>
	<span class="tabbar-label">Home</span>
	</a>
	<a href="sale.php" class="link"><i class="icon f7-icons">tags_fill</i>
	 <span class="tabbar-label">Sales</span>
	</a>
	
	<a href="lists.php" class="link"><i class="icon f7-icons">book_fill</i>
	 <span class="tabbar-label">Lists</span>
	</a>
	<?php if($kind==shop){
	echo"<a href='submit.php' class='link'><i class='icon f7-icons'>paper_plane</i>
	 <span class='tabbar-label'>Submit</span>
	</a>";
	}
	?>
</div>
  </div>