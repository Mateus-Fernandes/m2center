


          import SVGInjector from 'svg-injector';
          var mySVGsToInject = document.querySelectorAll('.injetar');
          SVGInjector(mySVGsToInject);                    



window.onload=function(){ 
  AOS.init();
  document.addEventListener('aos:in:super-duper', () => {
    //console.log(this.className);
  });
  
// Animação dos botões principais 
    var buttonEl = document.querySelectorAll('.botaoNovo');
    function animateButton(width, duracao) {
        anime.remove('rect');
        anime({
        targets: 'rect',
        width: width,
        easing: 'easeInOutSine',
        endDelay: 1000,
        duration: duracao,
      }).finished;
    }
    function enterButton() { animateButton(300,2000) };
    function leaveButton() { animateButton(3,50) };
    for (var i = 0; i < buttonEl.length; i++) { 
        buttonEl[i].addEventListener('mouseenter', enterButton, false);
        buttonEl[i].addEventListener('mouseleave', leaveButton, false);
    }
// Animação no formulario do site
    let current = null;
    const nome = document.querySelector('#nome'),
  email = document.querySelector('#email'),
  telefone = document.querySelector('#telefone');
nome.addEventListener('focus', (e) => { 
    if (current) current.pause();
    current = anime({
            targets: '#form',
            strokeDashoffset: [anime.setDashoffset, 0],
            easing: 'easeInOutSine',
            duration: 1500,
            direction: 'alternate',
            loop: false
      });
 });
email.addEventListener('focus', (e) => { 
    if (current) current.pause();
    current = anime({
            targets: '#form2',
            strokeDashoffset: [anime.setDashoffset, 0],
            easing: 'easeInOutSine',
            duration: 1500,
            direction: 'alternate',
            loop: false
      });
 });
telefone.addEventListener('focus', (e) => { 
    if (current) current.pause();
    current = anime({
            targets: '#form3',
            strokeDashoffset: [anime.setDashoffset, 0],
            easing: 'easeInOutSine',
            duration: 1500,
            direction: 'alternate',
            loop: false
      });
});

  // Animação do box
anime({
    targets: '.caixas',
    backgroundSize: '100%',
    easing: 'easeInOutSine',
    duration: 10000,
    direction: 'alternate',
    loop: true
  }).finished;
}
