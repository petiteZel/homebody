<?php

/**
 * @package WordPress
 * @subpackage Homebody
 * @since Homebody 1.0
 */

/*
 * 컴포넌트 - 푸터
 */
?>

</main><!-- #main -->
<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="site-info">
            <!-- 푸터 위젯 있는지 확인 -->
            <?php if (is_active_sidebar('footer-widget')) : ?>
                <div class="footer-widget">
                    <?php dynamic_sidebar('footer-widget'); ?>
                </div>
            <?php endif; ?>
            <div class="copyright">© 2022 csykik</a> All Rights Reserved.</div>

        </div>

    </div>
    <div class="scroll-top">
        <div class="scroll-top-icon"></div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>