<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="search">
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" class="search__input" placeholder="Поиск" />
	<input type="submit" id="searchsubmit" value="Найти" class="search__submit" />
</form>