var current;
var option = {
  section: ".js-section",
  easing: "swing",
  scrollSpeed: 600,
  scrollbars: true,
  before: function (i, box) {
    current = i;
    $(".pagenation .active").removeClass("active");
    $(".pagenation").find("a").eq(i).addClass("active");
  },
  afterRender: function () {
    var pagenation = '<ul class="pagenation">';
    $(".section").each(function (i) {
      pagenation += "<li><a></a></li>";
    });
    pagenation += "</ul>";
    $("body").append(pagenation);
    $(".pagenation a").each(function (i) {
      $(this).on("click", function () {
        $.scrollify.move(i);
      });
    });
    $(".pagenation li:first-child").find("a").addClass("active");
  },
};

$(function () {
  // scrollifyの実行
  $.scrollify(option);

  // split_section btnにマウスオーバー時の挙動 jqを使わなくてもスマートに行けそうゴリ押し
  $("#greeting_link1").hover(
    function () {
      $("#split_section_bg2").addClass("split_image2_mouseover_btn");
    },
    function () {
      $("#split_section_bg2").removeClass("split_image2_mouseover_btn");
    }
  );
  $("#greeting_link2").hover(
    function () {
      $("#section3").addClass("split_image1_mouseover_btn");
    },
    function () {
      $("#section3").removeClass("split_image1_mouseover_btn");
    }
  );

  $("#business_link2").hover(
    function () {
      $("#split_section2_bg2").addClass("split_image4_mouseover_btn");
    },
    function () {
      $("#split_section2_bg2").removeClass("split_image4_mouseover_btn");
    }
  );
  $("#business_link1").hover(
    function () {
      $("#section5").addClass("split_image3_mouseover_btn");
    },
    function () {
      $("#section5").removeClass("split_image3_mouseover_btn");
    }
  );
});

$(window).on("resize", function () {
  if (current) {
    var currentScrl = $(".section").eq(current).offset().top;
    $(window).scrollTop(currentScrl);
  }
});

window.addEventListener("popstate", function (e) {
  document.location.reload();
});
