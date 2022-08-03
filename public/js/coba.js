function btnKlick(btn) {
  hideVideo();
  btn.nextElementSibling.classList.remove('hidden')
  // console.log(btn.nextElementSibling);
}

function hideVideo() {
  let hideVideo = document.querySelectorAll('#video-training')
  hideVideo.forEach(hide => {
    hide.classList.add('hidden');
  });
}
