window.addEventListener("load", function(event) {

    var app = document.getElementById('Anim');
    var typewriter = new Typewriter(app, {
        loop: true
    });

    typewriter.typeString('Je suis Tanguy CHEVALIER,')
        .pauseFor(2500)
        .deleteChars(17)
        .typeString('en MMI,')
        .pauseFor(2500)
        .deleteChars(7)
        .deleteAll()
        .start();

});