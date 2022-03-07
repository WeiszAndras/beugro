pswd = Math.random().toString(36).slice(2);
let pText = $("p.card-text");
pText.text(pswd);

// random change background color of the card and random change password
pText.click(function() {
    pswd = Math.random().toString(36).slice(2);
    pText.text(pswd);
    let red = Math.random() * 255;
    let green = Math.random() * 255;
    let blue = Math.random() * 255;
    let rgb = 'rgb('+red+','+green+','+blue+',0.3)';
    $(".card-body").css('background-color',rgb);

});

// click the button to change the password to hide character (*)
var flag = 0;
$(".btn").click(function() {
    if (flag === 0){
        let star = '*';
        for (let i = 1; i < pswd.length; i++) {
            star += '*';
        }
        pText.html(star);
        flag = 1;
    }
    else{
        pText.html(pswd);
        flag = 0;
    }
});
