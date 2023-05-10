// Ambil elemen select dan tabel
const select = document.getElementById('sorting');
const table = document.getElementById('reservasiTable');

// Tambahkan event listener untuk perubahan pada select
select.addEventListener('change', function() {
  sortTableByColumn(select.value);
});

// Fungsi untuk menyortir tabel berdasarkan kolom yang dipilih
function sortTableByColumn(column) {
  let rows, switching, i, x, y, shouldSwitch;
  switching = true;
  while (switching) {
    switching = false;
    rows = table.rows;
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("td")[column].textContent.toLowerCase();
      y = rows[i + 1].getElementsByTagName("td")[column].textContent.toLowerCase();
      if (x > y) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}