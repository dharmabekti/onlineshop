<!DOCTYPE html>
<html>
<head>
  <style>
  .table1 {
    font-family: sans-serif;
    color: #232323;
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #f2f5f7;
  }

  .table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
  }

  .table1, th, td {
    border: 1px solid #999;
    padding: 8px 20px;
    /*text-align: center;*/
  }

  .table1 tr:hover {
    background-color: #f5f5f5;
  }

  .table1 tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  #ratatengah {
    text-align: center;
  }


</style>
</head>
<body>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Terima kasih telah melakukan pemesanan.</h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <table width="100%">
            <tr>
              <td width="20%">Kode Pemesanan/Invoice</td>
              <td><?= $invoices[0]->id; ?></td>
            </tr>
            <tr>
              <td width="20%">Nama Pembeli</td>
              <td><?= $invoices[0]->nama; ?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><?= $invoices[0]->email; ?></td>
            </tr>
            <tr>
              <td>No. Handphone</td>
              <td><?= $invoices[0]->nope; ?></td>
            </tr>
            <tr>
              <td>Alamat Lengkap Pembeli</td>
              <td><?= $invoices[0]->alamat; ?></td>
            </tr>
            <tr>
              <td>Kurir</td>
              <td><?= $invoices[0]->kurir; ?></td>
            </tr>
          </table>
          <br>
        </div>

        <div class="panel-heading">
          <h5>Produk yang Dipesan</h5>
        </div>

        <div>
          <table class="table1" border="1">
            <thead>
              <tr>
                <th>Produk ID</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Subtotal</th>
              </tr>
            </thead>
            <tbody>
             <?php 
             $total = 0;
             foreach ($invoices as $invoices): 
              $subtotal = $invoices->qty * $invoices->price;
              $total += $subtotal;
              ?>
              <tr>
                <td><?php echo $invoices->product_id;?></td>
                <td><?php echo $invoices->product_name;?></td>
                <td><?php echo $invoices->qty;?></td>
                <td><?php echo number_format($invoices->price,0,',','.');?></td>
                <td><?php echo number_format($subtotal,0,',','.');?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
          <tfoot>
            <tr>
             <td colspan="4" align="right">Total Belanja</td>
             <td><h5><?php echo number_format($total,0,',','.');?></h5></td>
           </tr>
           <tr>
            <td colspan="4" align="right">Ongkos Kirim</td>
            <td><h5><?php echo number_format($invoices->total_bayar-$total,0,',','.');?></h5></td>
          </tr>
          <tr>
           <td colspan="4" align="right">Total yg Harus Dibayar</td>
           <td><h3><?php echo number_format($invoices->total_bayar,0,',','.');?></h3></td>
         </tr>
       </tfoot>
     </table>
   </div>
   <div class="panel-heading">
    <h5>Pembayaran dapat dilakukan melalui:</h5>
    <ul>
      <?php foreach ($rekening as $data): ?>
        <li><?= $data->nama_bank ?> no. rekening <?= $data->no_rekening ?> a.n. <?= $data->atasnama ?></li>
      <?php endforeach;?>
    </ul>
    <br>
    <h4>Harap melakukan konfirmasi jika telah melakukan pembayaran melalui menu <a href="<?php echo base_url('welcome/konfirmasi');?>">Konfirmasi Pembayaran</a>.</h4>
  </div>
</div>
</div>
</div>
</body>
</html>