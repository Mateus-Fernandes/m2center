


            
window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}
window.onload=function(){
  AOS.init();
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
mensagem.addEventListener('focus', (e) => { 
  if (current) current.pause();
  current = anime({
          targets: '#form4',
          strokeDashoffset: [anime.setDashoffset, 0],
          easing: 'easeInOutSine',
          duration: 1500,
          direction: 'alternate',
          loop: false
    });
});

}
