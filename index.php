<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Praktikum 1 | Jquery</title>
    <center>
        <h3>Pemesanan Produk</h3>
        <hr />
    </center>
</head>

<body>
 <style>
  body{
    height: 500px;
  }
  
  hr{
    width: 75%;
  }
  
  
  .form-container {
    display: flex;
    justify-content: center;
    height: auto;
  }
  
  .form-data {
    padding: 50px;
    margin-top: 0;
    border-radius: 10px;
    border: 1px solid #ccc;
    width: auto;
    padding-bottom: 50px;
  
  }
  
  select {
    padding: 5px;
    margin-top: 5px;
    margin-bottom: 5px;
    width: 250px;
    border: 1px solid #ccc;
  }
  
  input {
    padding-left: 5px;
    padding-top: 5px;
    padding-bottom: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
  }
  
  button {
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 5px;
    border-width: 0;
    text-align: center;
    width: max-content
  }
  
  
  #pesan {
    background-color: #0C090A;
    width: 100%;
    color: white;
    border-radius: 10px;
  }
  
  #pesan:hover {
    background-color: gray;
  }
  
  .pad-right {
    padding-right: 10px;
  }
  
  .left {
    float: left;
  }
  
  .right {
    float: right;
  }
  
  .form-barang::after {
    content: "";
    clear: both;
    display: table;
  }
  
  .jumlah {
    margin: 5px;
  }
  
  .pd-top {
    margin-top: 18px;
  }
  .cont-3 {
    padding-left: 30px;
  }


  #tambah-barang {
      background-color: #E5E4E2;
      border-radius: 10px;
  }

  #tambah-barang:hover {
    background-color: #616D7E;
}
    </style>


    <div class="container">
        <div id="nama"></div>
        <div id="list-data"></div>
    
        <div class="form-container">
          <div class="form-data">
            <h2>Produk</h2>
            <form onsubmit="return false">
    
              <div class="pad-right">
                <h3>Nama</h3><br>
                <input type="text" id="pemesan" placeholder="Masukkan Nama" style="width: 100%;">
              </div>
    
              <h3>Pilih produk</h3>
    
              <div class="form-barang">
                <div class="left">
                  <label for="barang-1" style="text-align: center;">Produk</label><br>
                  <select id="barang-1" required  >
                    <option value="0" hidden selected>Pilih Produk</option>
                    <option value="Jet Tempur">Jet Tempur</option>
                    <option value="Nuklir Hiroshima">Nuklir Hiroshima</option>
                    <option value="Infinity Stone">Infinity Stone</option>
                    <option value="Burj Khalifa">Burj Khalifa</option>
                    <option value="Rudal Hipersonik">Rudal Hipersonik</option>
                  </select>
                </div>
    
                <div class="left cont-3">
                  <label for="jumlah-1" style="padding-left: 5px, top = 5px;">Jumlah</label><br>
                  <input type="number" placeholder="Jumlah Barang" id="jumlah-1" class="jumlah" required><br>
                </div>
              </div>
              <button id="tambah-barang" class="btn btn-primary">Tambah Produk</button><br>
              <button id="pesan"><b>PESAN PRODUK</b></button>
            </form>
          </div>
        </div>
      </div>

<script src="Script.js">
 </script>
</body>
</html>