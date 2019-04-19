<form class="search form-inline my-3 my-<?php echo esc_attr(get_theme_mod("navbar-expand", "md")); ?>-0 d-<?php echo esc_attr(get_theme_mod("navbar-expand", "md")); ?>-none" role="search" method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
    <div class="d-flex w-100">
        <input class="form-control mr-2 flex-grow-1" type="search" placeholder="<?php echo esc_attr(__("Buscar", "marmota")); ?>" value="<?php echo esc_attr(get_search_query()) ?>" name="s" aria-label="<?php echo esc_attr(__("Buscar", "marmota")); ?>">
        <button class="btn btn-primary btn-sm" type="submit"><?php echo __("Buscar", "marmota"); ?></button>
    </div>
</form>
