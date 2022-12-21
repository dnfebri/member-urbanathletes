let btnTransition = document.querySelector('#btn-transition');
// console.log(btnTransition);
let angka0 = 0
let angka1 = 1
let acak = ["red", "yellow"];
const setIn = setInterval(()=>{
  btnTransition.style.backgroundColor =  'linear-gradient(120deg, #f6d365 0%, #fda085 100%)'
  console.log(acak[angka0], acak[angka1]);
  angka1 ++
  angka0 ++
  if (angka0 > 1) {
    angka0 = 0
  }
  if (angka1 > 1) {
    angka1 = 0
  }
},1000)

function stopInterval() {
  clearInterval(setIn)
}