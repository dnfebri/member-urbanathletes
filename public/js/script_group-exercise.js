// Scrip ini sudah tidak dipakai
let items = document.querySelectorAll('#items');
let space = document.querySelectorAll('#space');
items.forEach(function (item) {
  item.addEventListener('click', (e) => {
    console.log(e.path);
    let classes = e.path[2].querySelector('#detail').classList;
    let notHidden = false;
    classes.forEach(el => {
      // console.log(el);
      if (el === "detail-aktive") {
        notHidden = true;
        return notHidden
      }
    })
    // console.log(notHidden);
    if (notHidden === true) {
      hiddenAll()
    } else {
      hiddenAll()
      item.querySelector('#detail').classList.remove('opacity-hidden');
      item.querySelector('#detail').classList.toggle('detail-aktive');
      item.querySelector('#space').classList.toggle('space-detail'); // Ukuran layar saat tampil detail sama dengan function hiddenAll
    }
  })
})

function hiddenAll() {
  space.forEach((el) => {
    el.classList.remove('space-detail');
    el.querySelector('#detail').classList.remove('detail-aktive');
    el.querySelector('#detail').classList.add('opacity-hidden');
  })
}