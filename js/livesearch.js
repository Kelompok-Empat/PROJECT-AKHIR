$(document).ready(function() {
  var linkElement = $("<link rel='stylesheet' href='../css/beranda-justify.css'>"); // Membuat elemen <link>

  $("#search-input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("table tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });

    if (value.length === 0) {
      // Menghilangkan elemen <link> jika nilai pencarian tidak ada
      linkElement.remove();
    } else {
      // Menambahkan elemen <link> jika nilai pencarian ada
      if (linkElement.length === 0) {
        $("head").append(linkElement);
      }
    }
  });
});
