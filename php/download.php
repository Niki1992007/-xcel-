<?php

include_once("connect.php");
require_once("functions.php");
require_once("../Classes/PHPExcel.php"); // Подключение библиотеки, точнее класса бибблиотеки

$show_data = get_data(); // вызов функции с занесением значений в переменную

$objPHPExcel = new PHPEXcel(); // создание своего объекта с наследованием возможностей класса библиотеки 

$objPHPExcel->setActiveSheetIndex(0); // Инициализация автивного листа в Excel
$active_sheet = $objPHPExcel->getActiveSheet();// Получаем доступ к активному листу

//$active_sheet = $objPHPExcel->createSheet(); Здесь создаём новый лист

$active_sheet->getPageSetup()
             ->setPaperSize(PHPEXcel_Worksheet_PageSetup::PAPERSIZE_A4); //Размер документа пр печати - альбомный лист

$active_sheet->SetTitle("Лист_1"); //Задаём название активному листу

//$active_sheet->GetHeaderFooter()->setOddHeader("Выводимые значения");  Хедер документа

//указываем семейство и размер шрифта выводимых данных
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
$objPHPExcel->getDefaultStyle()->getFont()->setSize(8);

//Задаём рамер ячеек
$active_sheet->GetColumnDimension('A')->setWidth(25);
$active_sheet->GetColumnDimension('B')->setWidth(25);
$active_sheet->GetColumnDimension('C')->setWidth(10);
$active_sheet->GetColumnDimension('E')->setWidth(20);
$active_sheet->GetColumnDimension('F')->setWidth(20);
$active_sheet->GetColumnDimension('G')->setWidth(20);
$active_sheet->GetColumnDimension('J')->setWidth(25);
$active_sheet->GetColumnDimension('I')->setWidth(25);

$active_sheet->mergeCells('A1:J1');
$active_sheet->mergeCells('A3:J3');
$active_sheet->mergeCells('A2:H2'); //объеденить ячейки
$active_sheet->getRowDimension()->setRowHeight(30); //указываем высоту строк

$active_sheet->setCellValue('A1','Полученные значения из формы');
$active_sheet->setCellValue('I2','Дата вывода значений');
$active_sheet->setCellValue('A4','Фамилия');
$active_sheet->setCellValue('B4','Имя');
$active_sheet->setCellValue('C4','Отчество');
$active_sheet->setCellValue('D4','Пол');
$active_sheet->setCellValue('E4','День рождения');
$active_sheet->setCellValue('F4','Месяц рождения');
$active_sheet->setCellValue('G4','Год рождения');
$active_sheet->setCellValue('H4','Вес, кг');
$active_sheet->setCellValue('I4','Рост, см');
$active_sheet->setCellValue('J4','Регистрационный номер');

$row_start = 5;
$i = 0;
foreach ($show_data as $item) {
	$row_next = $row_start + $i;

	$active_sheet->setCellValue('A'.$row_next,$item['surname']);
	$active_sheet->setCellValue('B'.$row_next,$item['name']);
	$active_sheet->setCellValue('C'.$row_next,$item['second_name']);
	$active_sheet->setCellValue('D'.$row_next,$item['sex']);
	$active_sheet->setCellValue('E'.$row_next,$item['day_birthday']);
	$active_sheet->setCellValue('F'.$row_next,$item['month_birthday']);
	$active_sheet->setCellValue('G'.$row_next,$item['year_birthday']);
	$active_sheet->setCellValue('H'.$row_next,$item['weight']);
	$active_sheet->setCellValue('I'.$row_next,$item['height']);
	$active_sheet->setCellValue('J'.$row_next,$item['user_id']);
	$i++;
}
$active_sheet->getStyle()->appleFromArray($style_wrap);

$date = date('d-m-Y'); //Переменная для текщей даты
$active_sheet->setCellValue('J2', $date);
$active_sheet->getStyle('J2')
             ->getNumberFormat()
             ->setFormatCode
             (PHPEXcel_Style_NumberFormat::FORMAT_DATE_XLSX14);



// Информация заголовков для браузера
header("Content-Type:application/vnd.ms-excel");
header("Content-Disposition:attachment;filename='Книга Excel.xls'");

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); //Команда на генерацию документа/задаём ему версию
$objWriter->save('php://output'); //команда на сохранение документа

exit();
?>