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
        <?php 
            //the_archive_title('<h1 class="page-title">', '</h1>');
            // 현재 페이지의 글 ID 가져오기
            $post_id = get_the_ID();

            // 글 ID를 사용하여 글의 슬러그 가져오기
            $post_slug = get_post_field('post_name', $post_id);

            // 슬러그 출력
            echo $post_slug;
        ?>
    </div>
</div>

<h1>category.php</h1>

<section>
    <div class="container">
        <div class="categoryMenu">
            <ul class="middleMenu">
                <li id="overview" class="btnCon">
                    <input type="radio" checked name="tabMenu" id="overviewCheck" />
                    <label for="overviewCheck">Overview</label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div>
                            <!-- overview 지만 일단 ranks랑 같은 내용 -->
                            <?php
                                global $post;
                                $post_slug = $post->post_name;
                                // get_section_contents('ranks', 'ranks_categories', strtolower(get_the_title()));
                                get_section_contents('ranks', 'ranks_categories', $post_slug);
                            ?>
                        </div>
                    </div>
                </li>
                <li id="choice" class="btnCon">
                    <input type="radio" name="tabMenu" id="choiceCheck" />
                    <label for="choiceCheck">Choice</label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div>
                        </div>
                    </div>
                </li>
                <li id="ranks" class="btnCon">
                    <input type="radio" name="tabMenu" id="ranksCheck" />
                    <label for="ranksCheck"><?php echo '<a href="'. home_url() .'/ranks' . '/' . strtolower(get_the_archive_title()) .'">Ranks</a>' ?></label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div>
                            
                        </div>
                    </div>
                </li>
                <li id="guide" class="btnCon">
                    <input type="radio" name="tabMenu" id="guideCheck" />
                    <label for="guideCheck"><?php echo '<a href="'. home_url() .'/guide' . '/' . strtolower(get_the_archive_title()) .'">Guide</a>' ?></label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                    </div>
                </li>
                <li id="homepedia" class="btnCon">
                    <input type="radio" name="tabMenu" id="homepediaCheck" />
                    <label for="homepediaCheck"><?php echo '<a href="'. home_url() .'/homepedia' . '/' . strtolower(get_the_archive_title()) .'">Homepedia</a>' ?></label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>