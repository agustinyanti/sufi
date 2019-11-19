<?php
  session_start();
  $nama = $_SESSION["nama"];
  $id_user = $_SESSION["id_user"];

include 'PHPExcel/phpexcel.php';


  $obj = new PHPExcel();

  $obj->setActiveSheetIndex(0);

  $obj->getActiveSheet()
      ->setCellValue('A1', 'Laporan Hasil Uji Formalin');
  $obj->getActiveSheet()->mergeCells('A1:H1');
  $obj->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
  $obj->getActiveSheet()->getStyle('A1')->getFont()->setSize(18); 
  $obj->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


    $numrow = 4;

  $obj->getActiveSheet()->setCellValue('A3', 'NO');
  $obj->getActiveSheet()->setCellValue('B3', 'ID UJI');
  $obj->getActiveSheet()->setCellValue('C3', 'NAMA IKAN');
  $obj->getActiveSheet()->setCellValue('D3', 'NILAI R');
  $obj->getActiveSheet()->setCellValue('E3', 'NILAI G');
  $obj->getActiveSheet()->setCellValue('F3', 'NILAI B');
  $obj->getActiveSheet()->setCellValue('G3', 'KONSENTRASI');
  $obj->getActiveSheet()->setCellValue('H3', 'STATUS');

  
    include 'aksi_koneksi.php';
    $q = "SELECT * FROM pengujian  WHERE `id_user`= $id_user";
    $result = mysqli_query($koneksi,$q);
    $no =1;
    while($row = mysqli_fetch_array($result)){
      $obj->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $obj->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $row[0]);
      $obj->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $row[3]);
      $obj->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $row[4]);
      $obj->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $row[5]);
      $obj->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $row[6]);
      $obj->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $row[7]);
      $obj->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $row[8]);
      $numrow++;
      $no++;
    }

$obj->getActiveSheet()->getColumnDimension('A')->setWidth(4);
$obj->getActiveSheet()->getColumnDimension('B')->setWidth(15); 
$obj->getActiveSheet()->getColumnDimension('C')->setWidth(15); 
$obj->getActiveSheet()->getColumnDimension('D')->setWidth(15);
$obj->getActiveSheet()->getColumnDimension('E')->setWidth(25); 
$obj->getActiveSheet()->getColumnDimension('F')->setWidth(15); 
$obj->getActiveSheet()->getColumnDimension('G')->setWidth(15); 
$obj->getActiveSheet()->getColumnDimension('H')->setWidth(25); 
$obj->getActiveSheet()->getColumnDimension('I')->setWidth(28); 

    $obj->getActiveSheet()->setTitle('Laporan Uji'); 
  $file = 'Laporan Uji Formalin';

  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment;filename="'.$file.'.xlsx"');

  $output = PHPExcel_IOFactory::createWriter($obj, 'Excel2007');
  $output -> save('php://output');
?>