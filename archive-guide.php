<?php

/**
 * @package WordPress
 * @subpackage Homebody
 * @since Homebody 1.0
 */

/*
 * Product 카테고리 페이지
 */
get_header(); ?>

<div class="page-header">
    <div class="container">
        <?php the_archive_title('<h1 class="page-title">', '</h1>');?>
    </div>
</div>

<!-- <h1>archive-guide.php</h1> -->

<?php
    $current_archive = get_query_var('post_type');

?>

<section>
    <div class="container">
        <div class="categoryMenu">
            <ul class="middleMenu">
                <li id="total" class="btnCon">
                    <input type="radio" checked name="tabMenu" id="totalCheck" />
                    <label for="totalCheck">Total</label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div>
                            <?php
                                get_section_content_list($current_archive, 'category');
                            ?>
                        </div>
                    </div>
                </li>
                <li id="homeDeco" class="btnCon">
                    <input type="radio" name="tabMenu" id="homeDecoCheck" />
                    <label for="homeDecoCheck">Home Decoration</label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div>
                            <?php
                            get_section_content_list($current_archive, 'category','home-decoration')
                            ?>
                        </div>
                    </div>
                </li>
                <li id="homeOffice" class="btnCon">
                    <input type="radio" name="tabMenu" id="homeOfficeCheck" />
                    <label for="homeOfficeCheck">Home Office</label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div>
                            <?php
                            get_section_content_list($current_archive, 'category','home-office')
                            ?>
                        </div>
                    </div>
                </li>
                <li id="selfCare" class="btnCon">
                    <input type="radio" name="tabMenu" id="selfCareCheck" />
                    <label for="selfCareCheck">Self-Care</label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div><?php
                                get_section_content_list($current_archive, 'category','self-care')
                                ?></div>
                    </div>
                </li>
                <li id="hobbies" class="btnCon">
                    <input type="radio" name="tabMenu" id="hobbiesCheck" />
                    <label for="hobbiesCheck">Hobbies</label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div>
                            <?php
                            get_section_content_list($current_archive, 'category','hobbies')
                            ?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>


