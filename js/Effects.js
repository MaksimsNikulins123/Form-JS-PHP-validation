
//For facebook
function changeColorFacebook() {
    document.getElementById("facebook").src="img/icons/footer/ic facebook.svg"
}
function changeColorFacebookHover() {
    document.getElementById("facebook").src="img/icons/footer/ic facebookHover.svg"
}
//For instagram
function changeColorInstagram() {
    document.getElementById("instagram").src="img/icons/footer/ic instagram.svg"
}
function changeColorInstagramHover() {
    document.getElementById("instagram").src="img/icons/footer/ic instagramHover.svg"
}
//For twitter
function changeColorTwitter() {
    document.getElementById("twitter").src="img/icons/footer/ic twitter.svg"
}
function changeColorTwitterHover() {
    document.getElementById("twitter").src="img/icons/footer/ic twitterHover.svg"
}
//For youtube
function changeColorYoutube() {
    document.getElementById("youtube").src="img/icons/footer/ic youtube.svg"
}
function changeColorYoutubeHover() {
    document.getElementById("youtube").src="img/icons/footer/ic youtubeHover.svg"
}

//For press faecbook
$(".social-media-link__facebook").on("click", function () {
    $(this).toggleClass("active");
});
//For press instagram
$(".social-media-link__instagram").on("click", function () {
    $(this).toggleClass("active");
});
//For press twitter
$(".social-media-link__twitter").on("click", function () {
    $(this).toggleClass("active");
});
//For press youtube
$(".social-media-link__youtube").on("click", function () {
    $(this).toggleClass("active");
});
// For press link
$(".link").on("click", function () {
    $(this).toggleClass("active");
});
//For input arrow when hover
function changeColorInputArrow() {
    document.getElementById("inputArrow").src="img/icons/page-content/ic arrow.svg"
}
function changeColorInputArrowHover() {
    document.getElementById("inputArrow").src="img/icons/page-content/ic arrowHover.svg"
}
//For form successful validation
// function formSucceess() {
    
// }
// $(".content-form__validation").on("click", function () {
//     $(this).toggleClass("active");
// });

