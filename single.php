<?php

/**
 * @package WordPress
 * @subpackage Homebody
 * @since Homebody 1.0
 */

/*
 * 싱글 페이지
 */

get_header();
?>

<!-- <h1>single.php</h1> -->

<div class="page-header">
    <div class="container">
        <?php
        // 현재 페이지의 글 ID 가져오기
        $post_id = get_the_ID();

        // 글 ID를 사용하여 글의 슬러그 가져오기
        $post_slug = get_post_field('post_name', $post_id);

        // 슬러그 출력
        echo '<button type="button" id="ct-modal-title-btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <h1 class="page-title">' . ucfirst($post_slug) . ' <i class="fa-solid fa-caret-down"></i></h1></button>';


        ?>

        <!-- Modal -->
        <?php
        get_template_part('modal');
        ?>

    </div>
</div>


<section>
    <div class="container">
        <div class="categoryMenu">
            <ul class="middleMenu">
                <li id="overview" class="btnCon">
                    <input type="button" <?php echo (isset($_GET['option']) && $_GET['option'] === 'overview') ? 'class="subMenuName active"' : 'class="subMenuName"'; ?> id="overviewBtn" value="overview" />
                    <label for="overviewBtn">Overview</label>
                </li>
                <li id="choice" class="btnCon">
                    <input type="button" <?php echo (isset($_GET['option']) && $_GET['option'] === 'choice') ? 'class="subMenuName active"' : 'class="subMenuName"'; ?> id="choiceBtn" value="choice">
                    <label for="choiceBtn">Choice</label>
                </li>
                <li id="ranks" class="btnCon">
                    <input type="button" <?php echo (isset($_GET['option']) && $_GET['option'] === 'ranks') ? 'class="subMenuName active"' : 'class="subMenuName"'; ?> id="ranksBtn" value="ranks">
                    <label for="ranksBtn">Ranks</label>
                </li>
                <li id="guide" class="btnCon">
                    <input type="button" <?php echo (isset($_GET['option']) && $_GET['option'] === 'guide') ? 'class="subMenuName active"' : 'class="subMenuName"'; ?> id="guideBtn" value="guide">
                    <label for="guideBtn">Guide</label>
                </li>
                <li id="homepedia" class="btnCon">
                    <input type="button" <?php echo (isset($_GET['option']) && $_GET['option'] === 'homepedia') ? 'class="subMenuName active"' : 'class="subMenuName"'; ?> id="homepediaBtn" value="homepedia">
                    <label for="homepediaBtn">Homepedia</label>
                    
                </li>
            </ul>
            <div class="subMenuContents">
                <?php
                $optionPara = isset($_GET['option']) ? $_GET['option'] : '';
                if($optionPara === 'overview'){
                    get_section_contents('ranks', 'category', $post_slug);
                }else{
                    get_section_contents($optionPara, 'category', $post_slug);
                }
                ?>

            </div>




        </div>
    </div>
</section>