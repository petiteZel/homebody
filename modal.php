<?php

/**
 * @package WordPress
 * @subpackage Homebody
 * @since Homebody 1.0
 */

/*
 * 컴포넌트 - 모달
 */


?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Full Categories</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                    <?php
                    $cat_title_list = array('Home Decoration','Home Office','Self Care','Hobbies');

                    foreach($cat_title_list as $cat_title) {
                        $cat_slug = str_replace(' ', '-', strtolower($cat_title));

                        echo '<div class="ct-modal-box">
                        <div class="ct-modal-box-title">'.$cat_title.' <i class="fa-solid fa-caret-down"></i></div>
                        <div class="ct-modal-box-content">';
                        get_submenu_categories($cat_title, 'product', false);
                        echo '</div>
                        </div>';
                    }
                    
                    ?>
            </div>
                
                

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


