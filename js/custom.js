(function ($) {
  console.log("Your message or variable here");
  // Variables

  $(document).ready(function () {
    const html = $("html");
    let body = $("body");
    const menuBtn = $(".menu-btn");
    const menuContainer = $(".menu-container");
    const overlay = $(".overlay");
    let scrollTopBtn = body.find(".scroll-top");
    // const modalTitle = $(".ct-modal-box-title");
    // const modalContent = $(".ct-modal-box-content");
    // const siteHeader = body.find(".site-header");
    const subMenuName = $(".subMenuName");

    // 서브메뉴 드롭다운
    // var subMenu = $(".sub-menu");
    // if (!$(".menu-item-has-children").hasClass("show")) {
    //   $(".current-menu-parent").addClass("show");
    // }
    // // 모바일
    // if ($(".more-navigation").find("menu-item-has-children")) {
    //   $(".menu-item-has-children").prepend('<div class="toggle-btn"></div>');
    //   $(".menu-item-has-children .toggle-btn").click(function () {
    //     $(this).toggleClass("show");
    //     $(this).parent(".menu-item-has-children").toggleClass("show");
    //   });
    // }

    // Header - More navigation
    menuBtn.click(function () {
      $(this).toggleClass("active");

      // active 상태
      if ($(this).hasClass("active")) {
        $("html, body").css({
          overflow: "hidden",
        });
        menuContainer.addClass("active");
        overlay.addClass("active");
      } else {
        $("html, body").css({
          overflow: "",
        });
        menuContainer.removeClass("active");
        overlay.removeClass("active");
      }
    });

    // 클릭시 닫힘
    overlay.click(function () {
      // $searchContainer.removeClass("active");
      // $searchBtn.removeClass("active");
      menuContainer.removeClass("active");
      menuBtn.removeClass("active");
      $(this).removeClass("active");
      $("html, body").css({
        overflow: "",
      });
    });

    // project subMenu 이동
    subMenuName.click(function () {
      // subMenuName.removeClass("active");
      var postType = $(this).val();
      window.location.href = "?option=" + postType;
    });

    // Scroll Top 버튼
    scrollTopBtn.click(function () {
      $("html").animate(
        {
          scrollTop: 0,
        },
        400
      );
      return false;
    });

    // modal mobile toggle
    // 화면 너비가 768px 이하일 때만 작동
    if ($(window).width() <= 768) {
      $(".modal").addClass("mobile");

      $(".ct-modal-box-title").click(function () {
        // 현재 클릭한 .ct-modal-box 안에 있는 .ct-modal-box-content를 찾음
        var content = $(this).siblings(".ct-modal-box-content");

        // 모든 .ct-modal-box-content를 숨김
        $(".ct-modal-box-content").hide();

        // 현재 클릭한 .ct-modal-box 안에 있는 .ct-modal-box-content를 보여줌
        content.show();
      });
    }
  });
})(jQuery);
