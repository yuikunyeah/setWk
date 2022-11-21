var srh = document.getElementById("subSh");
var srhtxt = document.getElementById("search");
srh.addEventListener("click",function(){
  location.href = "https://online12thwiki.glitch.me/search?q="+srhtxt.value;
});