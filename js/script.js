const itemsliderbar = document.querySelectorAll(".cartegory-left-li")
itemsliderbar.forEach(function(menu, index){
    menu.addEventListener("click",function(){
        menu.classList.toggle("block")
    })
})
//-------//

const bigImg = document.querySelector(".product-content-left-big-img img")
const smallImg = document.querySelectorAll(".product-content-left-small-img img")
smallImg.forEach(function(imgItem, X){
    imgItem.addEventListener("click", function(){
        bigImg.src = imgItem.src
    })
})

const cachdung = document.querySelector(".cachdung");
const thanhphan = document.querySelector(".thanhphan");

if (cachdung) {
    cachdung.addEventListener("click", function () {
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none";
        document.querySelector(".product-content-right-bottom-content-cachdung").style.display = "block";
    });
}

if (thanhphan) {
    thanhphan.addEventListener("click", function () {
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block";
        document.querySelector(".product-content-right-bottom-content-cachdung").style.display = "none";
    });
}

const butTon = document.querySelector(".product-content-right-bottom-top");

if (butTon) {
    butTon.addEventListener("click", function () {
        document.querySelector(".product-content-right-bottom-content-big").classList.toggle("acctiveB");
    });
}
