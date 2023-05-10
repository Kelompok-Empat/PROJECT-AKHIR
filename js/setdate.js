 // Mendapatkan elemen input tanggal check-in dan check-out
 var checkinInput = document.getElementById('checkin');
 var checkoutInput = document.getElementById('checkout');

 // Menambahkan event listener untuk perubahan nilai pada input check-in
 checkinInput.addEventListener('change', function() {
   // Mendapatkan tanggal check-in yang dipilih
   var checkinDate = new Date(this.value);

   // Menambahkan 1 hari ke tanggal check-in
   var checkoutDate = new Date(checkinDate);
   checkoutDate.setDate(checkinDate.getDate() + 1);

   // Mengatur nilai dan atribut min pada input check-out
   checkoutInput.value = formatDate(checkoutDate);
   checkoutInput.min = formatDate(checkoutDate);
 });

 // Fungsi untuk mengubah objek Date menjadi string tanggal dalam format YYYY-MM-DD
 function formatDate(date) {
   var year = date.getFullYear();
   var month = ('0' + (date.getMonth() + 1)).slice(-2);
   var day = ('0' + date.getDate()).slice(-2);
   return year + '-' + month + '-' + day;
 }