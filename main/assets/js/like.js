$(function () {
  var $likeBtn = $(".icon.heart");
  likeNum = Number(likeNum);

  $likeBtn.click(function () {
    $likeBtn.toggleClass("active");

    if ($likeBtn.hasClass("active")) {
      likeNum++;
      $(this).find("img").attr({
        src: "https://cdn-icons-png.flaticon.com/512/803/803087.png",
        alt: "찜하기 완료",
      });
    } else {
      likeNum--;
      $(this).find("i").removeClass("fas").addClass("far");
      $(this).find("img").attr({
        src: "https://cdn-icons-png.flaticon.com/512/812/812327.png",
        alt: "찜하기",
      });
    }
  });
});
