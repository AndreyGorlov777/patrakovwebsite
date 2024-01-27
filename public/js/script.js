var purchaseBtn = $("#purchaseBtn");

function animateButton() {
    purchaseBtn.animate({ opacity: 0 }, 3000, function () {
        purchaseBtn.animate({ opacity: 1 }, 3000);
    });
}

setInterval(animateButton, 9000);

var purchaseBtn2 = $("#purchaseBtn2");

function animateButton2() {
    purchaseBtn2.animate({ opacity: 0 }, 3000, function () {
        purchaseBtn2.animate({ opacity: 1 }, 3000);
    });
}

setInterval(animateButton2, 9000);
