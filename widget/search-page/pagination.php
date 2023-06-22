<div class="row">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
        <?php
			if($page!=1){
		?>
            <li class="page-item">
                <a class="page-link" href='?xem=<?php echo $pagename;?>&page=<?php echo $page-1;?>'><</a></li>
	            <?php }?>
    <?php
		for($i=1;$i<=$pagenumber;$i++){
			if($i==$page){
				echo "<li class='page-item'><a class='page-link' href='?xem={$pagename}&page={$i}'>".$i."</a></li>";
			}else
				echo "<li class='page-item'><a class='page-link' href='?xem={$pagename}&page={$i}'>".$i."</a></li>";
		}
    	if($page!=$pagenumber){
	?>
			<li class="page-item"><a class='page-link' href='?xem=<?php echo $pagenumber;?>&page=<?php echo $page+1;?>'>></a>
	<?php }?> 
        </ul>
      </nav>
</div>