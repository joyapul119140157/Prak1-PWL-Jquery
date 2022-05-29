$(document).ready(function () {

    var produk = [
      "Jet Tempur",
      "Nuklir Hiroshima",
      "Infinity Stone",
      "Burj Khalifa",
      "Rudal Hipersonik",
    ];
    
    var Jumlah_Produk = [
      {
        nama_produk: "Jet Tempur",
        jumlah: 20,
      },
      {
        nama_produk: "Nuklir Hiroshima",
        jumlah: 5,
      },
      {
        nama_produk: "Infinity Stone",
        jumlah: 10,
      },
      {
        nama_produk: "Burj Khalifa",
        jumlah: 15,
      },
      {
        nama_produk: "Rudal Hipersonik",
        jumlah: 7,
      },
    ];
    var n = 1;
    $("#tambah-barang").hide();
    $("#barang-" + n).change(function () {
        $("#tambah-barang").show();
    });
    
    //show product when pesan produk clicked
    let Pesanan_Show = "";
    $("#pesan").click(function () {
      for (let i = 1; i <= n; i++) {
        let jumlah_idx = Jumlah_Produk.findIndex(
          (data) => data.nama_produk === $("#barang-" + i).val()
        );
        if ($("#jumlah-" + i).val() <= Jumlah_Produk[jumlah_idx].jumlah) {
          //Pengurangan jumlah stok barang
          Jumlah_Produk[jumlah_idx].jumlah -= $("#jumlah-" + i).val();
          //output message
          Pesanan_Show += "<ol> <h3>Barang Pesanan</h4>"
          Pesanan_Show +=
            "<li>" +
            $("#barang-" + i).val() +
            " (" +
            $("#jumlah-" + i).val() +
            ")</li>";
          Pesanan_Show += "</ol>"
          $("#list-data").html(`${Pesanan_Show}`);
        } else {
          alert(
            `Produk ${Jumlah_Produk[jumlah_idx].nama_produk}. Jumlah Stok ${Jumlah_Produk[jumlah_idx].jumlah}`
          );
        }
      }
      let nama = $("#nama").html(`${$("#pemesan").val()}`);
      $("#nama").show() = "<h4>Nama Pemesan :</h4>" + nama ;
    });
    
    $("#tambah-barang").click(function () {
      let jumlah_idx = Jumlah_Produk.findIndex(
        (data) => data.nama_produk === $("#barang-" + n).val()
      );
      n += 1;
      let pesanan = `<div class="form-barang"><div class="left" id="id-${n}"><label for="produk-${n}">Produk</label><br><select id="barang-${n}" required><option value="" hidden selected>Pilih produk</option>`;
      produk.map((data) => {
        pesanan += `<option value="${data}">${data}</option>`;
      });
      pesanan += `</select><br></div><div class="left cont-3"><label for="jumlah-${n}" style="padding-left: 5px;">Jumlah</label><br><input type="number" id="jumlah-${n}" class="jumlah" required><br></div>`;
      pesanan += `<div id='button-delete' class="left pd-top"><button id="hapus-${n}" class="btn btn-danger"><div>Hapus</div></button></div><br>`;
      $(this).before(pesanan);
    
      $("#hapus-" + n).click(function () {
        $("#id-" + n).nextAll();
        $(this).parent().parent().remove();
        $("#id-" + n).closest("div");
        $(this).parent().parent().remove();
      });
    
      if(n>=5){
        $("#tambah-barang").hide();
      }
    });
    });   