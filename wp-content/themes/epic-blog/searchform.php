<?php

/**
 * Template for displaying search forms in Epic Blog
 *
 * @package Epic Blog
 */
?>
<form role="search" method="get" class="search-form d-flex" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="input-group">
        <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x('Search', 'placeholder', 'epic-blog'); ?>" value="<?php echo get_search_query(); ?>" name="s" required />
        <span class="input-group-text"><button type="submit" class="search-submit"><span class="screen-reader-text"></span></button></span>
    </div>
</form>