<?php
  session_start();
  $nama = $_SESSION["nama"];
  $id_user = $_SESSION["id_user"];

  require_once 'tcpdf/tcpdf.php';
  
class cobaPDF extends TCPDF {
  public function Header() {
        $image_sv = "<img src=\"images/logonew.png\" width=\"80\" height=\"50\"/>"; 
    $this->SetY(20);
    $isi_header="<table align=\"left\">
          <tr>
            <td>".$image_sv."</td>
          </tr>
        </table>";
    $this->writeHTML($isi_header, true, false, false, false, '');

       $image_logo = "<img src=\"images/ipb.png\" width=\"50\" height=\"50\"/>";
    $this->SetY(20);
    $isi_header="<table align=\"right\">
          <tr>
            <td>".$image_logo."</td>
          </tr>
        </table>";
    $this->writeHTML($isi_header, true, false, false, false, '');
    }
}
  $pdf = new cobaPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
      
  $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
  $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
      
  $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
  $pdf->AddPage();
      
  $pdf->SetFont('helvetica', '', 10);
  $pdf->SetY(30);
  $isi = "<br><table>
          <tr>
            <td align=\"center\"><h1 style=\"font-size: 18px;\">SUFI</h1><br><h6 style=\"font-size: 10px;\">Sistem Uji Formalin pada Ikan</h6>
            </td>
          </tr>
        </table>
        <br><hr><p></p>
        <h2 style=\"font-size: 12px; text-align: center;\">Laporan Hasil Uji</h2>
        <h2 style=\"font-size: 12px; text-align: center;\">User : ".$nama."</h2>
        <table border=\"1\" align=\"center\">
        <tr>
      <th width=\"20px\">NO</th>
      <th>ID UJI</th>
      <th width=\"80px\">NAMA IKAN</th>
      <th>NILAI R</th>
      <th>NILAI G</th>
      <th>NILAI B</th>
      <th width=\"80px\">KONSENTRASI</th>
      <th>STATUS</th>
    </tr>";


    include 'aksi_koneksi.php';
    $r = "SELECT * FROM pengujian  WHERE `id_user`= $id_user";
    $hsl = mysqli_query($koneksi,$r);

     $no =1;
    while ($b = mysqli_fetch_array($hsl)) {
       $isi .= "<tr>
        <td>$no</td>
        <td>".$b[0]."</td>
        <td>".$b[3]."</td>
        <td>".$b[4]."</td>
        <td>".$b[5]."</td>
        <td>".$b[6]."</td>
        <td>".$b[7]."</td>
        <td>".$b[8]."</td>
        </tr>";
    $no++;
    }
$isi .="
    </table>";
  $pdf->writeHTML($isi, true, false, false, false, '');
          
  $namaPDF = 'Laporan Uji Formalin.pdf';
  $pdf->Output($namaPDF,'I');
?>
