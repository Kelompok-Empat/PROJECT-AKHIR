const tipeKamar = document.querySelector('#roomtype');
const noRoom = document.querySelectorAll('#noroom option');

tipeKamar.addEventListener('change', function(e) {

  if (tipeKamar.value === 'standard') {
    noRoom.forEach(function(option) {
      if (option.value <= 200) {
        option.style.display = 'block';
      } else {
        option.style.display = 'none';
      }
    });
  } else if (tipeKamar.value === 'deluxe') {
    noRoom.forEach(function(option) {
      if (option.value > 200 && option.value <= 300) {
        option.style.display = 'block';
      } else {
        option.style.display = 'none';
      }
    });
  } else if (tipeKamar.value === 'suite') {
    noRoom.forEach(function(option) {
      if (option.value > 300 && option.value <= 400) {
        option.style.display = 'block';
      } else {
        option.style.display = 'none';
      }
    });
  } else {
    noRoom.forEach(function(option) {
      option.style.display = 'block';
    });
  }
});
