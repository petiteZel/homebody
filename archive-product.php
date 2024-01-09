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
        <h1 class="page-title">Product</h1>
    </div>
</div>

<!-- <h1>archive-product.php</h1> -->

<section>
    <div class="container">
        <div class="categoryMenu">
            <ul class="middleMenu">
                <li id="homeDeco" class="btnCon">
                    <input type="radio" checked name="tabMenu" id="homeDecoCheck" />
                    <label for="homeDecoCheck">Home Decoration</label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div>
                            <?php
                            $cat_title = 'Home Decoration';
                            $cat_slug = str_replace(' ', '-', strtolower($cat_title));

                            get_submenu_categories($cat_title,'product');
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
                            $cat_title = 'Home Office';
                            $cat_slug = str_replace(' ', '-', strtolower($cat_title));

                            get_submenu_categories($cat_title,'product');
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
                                $cat_title = 'Self-Care';
                                $cat_slug = str_replace(' ', '-', strtolower($cat_title));

                                get_submenu_categories($cat_title,'product');
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
                            $cat_title = 'Hobbies';
                            $cat_slug = str_replace(' ', '-', strtolower($cat_title));

                            get_submenu_categories($cat_title,'product');
                            ?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

