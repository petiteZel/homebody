<?php

get_header();
global $wp_query;
?>

<h1>taxonomy-guide_categories.php</h1>

<!-- <section>
<div class="container">
        <div class="categoryMenu">
            <ul class="middleMenu">
                <li id="total" class="btnCon">
                    <input type="radio" checked name="tabMenu" id="totalCheck" />
                    <label for="totalCheck">Total</label>
                    <div class="subMenu">

                    </div>
                </li>
                <li id="homeDeco" class="btnCon">
                    <input type="radio" checked name="tabMenu" id="homeDecoCheck" />
                    <label for="homeDecoCheck">Home Decoration</label>
                    <div class="subMenu">


                    </div>
                </li>
                <li id="homeOffice" class="btnCon">
                    <input type="radio" name="tabMenu" id="homeOfficeCheck" />
                    <label for="homeOfficeCheck">Home Office</label>
                    <div class="subMenu">


                    </div>
                </li>
                <li id="selfCare" class="btnCon">
                    <input type="radio" name="tabMenu" id="selfCareCheck" />
                    <label for="selfCareCheck">Self-Care</label>
                    <div class="subMenu">


                    </div>
                </li>
                <li id="hobbies" class="btnCon">
                    <input type="radio" name="tabMenu" id="hobbiesCheck" />
                    <label for="hobbiesCheck">Hobbies</label>
                    <div class="subMenu">


                    </div>
                </li>
            </ul>
        </div>
    </div>
</section> -->

<section>
	<div class="container">
		<div class="row">
			<!-- 있을때 -->
			<?php if (have_posts()) : ?>
				<!-- 콘텐츠 loop -->
				<?php while (have_posts()) : the_post(); ?>
					<div class="col-4">
						<?php get_template_part('content-work'); ?>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<!-- 없을때 -->
				<?php get_template_part('template-parts/content-none'); ?>
			<?php endif; ?>
		</div>
		<?php the_posts_pagination(array('prev_text' => '', 'next_text' => '')); ?>
	</div>
</section>




<!-- 잠시 single.php 코드 맡아두기 -->
<li id="overview" class="btnCon">
                    <input type="radio" <?php echo (isset($_GET['option']) && $_GET['option'] === 'overview') || !isset($_GET['option']) ? 'checked' : ''; ?> onclick="window.location.href='?option=overview'" name="tabMenu" id="overviewCheck" value="Overview" />
                    <label for="overviewCheck">
                        Overview
                    </label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div class="overviewSubMenu">
                            <?php
                            get_section_contents('ranks', 'category', $post_slug);
                            ?>
                        </div>
                    </div>
                </li>
                <li id="choice" class="btnCon">
                    <input type="radio" <?php echo (isset($_GET['option']) && $_GET['option'] === 'choice') ? 'checked' : ''; ?> onclick="window.location.href='?option=choice'" name="tabMenu" id="choiceCheck" value="Choice" />
                    <label for="choiceCheck">
                        Choice
                    </label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div class="choiceSubMenu">
                            <?php
                            get_section_contents('choice', 'category', $post_slug);
                            ?>
                        </div>
                    </div>
                </li>
                <li id="ranks" class="btnCon">
                    <input type="radio" <?php echo (isset($_GET['option']) && $_GET['option'] === 'ranks') ? 'checked' : ''; ?> onclick="window.location.href='?option=ranks'" name="tabMenu" id="ranksCheck" value="Ranks" />
                    <label for="ranksCheck">
                        Ranks
                    </label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div class="ranksSubMenu">
                            <?php
                            get_section_contents('ranks', 'category', $post_slug);
                            ?>
                        </div>
                    </div>
                </li>
                <li id="guide" class="btnCon">
                    <input type="radio" <?php echo (isset($_GET['option']) && $_GET['option'] === 'guide') ? 'checked' : ''; ?> onclick="window.location.href='?option=guide'" name="tabMenu" id="guideCheck" value="Guide" />
                    <label for="guideCheck">
                        Guide
                    </label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div class="guideSubMenu">
                            <?php
                            get_section_contents('guide', 'category', $post_slug);
                            ?>
                        </div>
                    </div>
                </li>
                <li id="homepedia" class="btnCon">
                    <input type="radio" <?php echo (isset($_GET['option']) && $_GET['option'] === 'homepedia') ? 'checked' : ''; ?> onclick="window.location.href='?option=homepedia'" name="tabMenu" id="homepediaCheck" value="Homepedia" />
                    <label for="homepediaCheck">
                        Homepedia
                    </label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div class="homepediaSubMenu" style="display:none;">
                            <?php
                            get_section_contents('homepedia', 'category', $post_slug);
                            ?>
                        </div>
                    </div>
                </li>
