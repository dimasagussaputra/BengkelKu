<?php
date_default_timezone_set("Asia/Jakarta");

function buatKode($tabel, $inisial){
	global $conn;
	$struktur	= mysqli_query($conn, "SELECT * FROM $tabel LIMIT 1");
	$field		= mysqli_fetch_field_direct($struktur,0)->name;

	$panjang	= mysqli_fetch_field_direct($struktur,0)->length;

	$qry	= mysqli_query($conn, "SELECT MAX(".$field.") FROM ".$tabel);
	$row	= mysqli_fetch_array($qry); 
	if ($row[0]=="") {
		$angka=0;
	}
	else {
		$angka		= substr($row[0], strlen($inisial));
	}
	
	$angka++;
	$angka	=strval($angka); 
	$tmp	="";
	for($i=1; $i<=($panjang-strlen($inisial)-strlen($angka)); $i++) {
		$tmp=$tmp."0";	
	}
	return $inisial.$tmp.$angka;
}

function InggrisTgl($tanggal){
	$tgl=substr($tanggal,0,2);
	$bln=substr($tanggal,3,2);
	$thn=substr($tanggal,6,4);
	$tanggal="$thn-$bln-$tgl";
	return $tanggal;
}

function IndonesiaTgl($tanggal){
	$tgl=substr($tanggal,8,2);
	$bln=substr($tanggal,5,2);
	$thn=substr($tanggal,0,4);
	$tanggal="$tgl-$bln-$thn";
	return $tanggal;
}

function Indonesia2Tgl($tanggal){
	$namaBln = array("01" => "Januari", "02" => "Februari", "03" => "Maret", "04" => "April", "05" => "Mei", "06" => "Juni", "07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
	$tgl=substr($tanggal,8,2);
	$bln=substr($tanggal,5,2);
	$thn=substr($tanggal,0,4);
	$tanggal ="$tgl ".$namaBln[$bln]." $thn";
	return $tanggal;
}

function hitungHari($myDate1, $myDate2){
        $myDate1 = strtotime($myDate1);
        $myDate2 = strtotime($myDate2);
        return ($myDate2 - $myDate1)/ (24 *3600);
}

function format_angka($angka) {
	$hasil =  number_format($angka,0, ",",".");
	return $hasil;
}

function form_tanggal($nama,$value=''){
	echo" <input type='text' name='$nama' id='$nama' size='11' maxlength='20' value='$value'/>&nbsp;
	<img src='images/calendar-add-icon.png' align='top' style='cursor:pointer; margin-top:7px;' alt='kalender'onclick=\"displayCalendar(document.getElementById('$nama'),'dd-mm-yyyy',this)\"/>			
	";
}

function angkaTerbilang($x){
	$abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
	if ($x < 12)
		return " " . $abil[$x];
	elseif ($x < 20)
		return angkaTerbilang($x - 10) . " belas";
	elseif ($x < 100)
		return angkaTerbilang($x / 10) . " puluh" . angkaTerbilang($x % 10);
	elseif ($x < 200)
		return " seratus" . angkaTerbilang($x - 100);
	elseif ($x < 1000)
		return angkaTerbilang($x / 100) . " ratus" . angkaTerbilang($x % 100);
	elseif ($x < 2000)
		return " seribu" . angkaTerbilang($x - 1000);
	elseif ($x < 1000000)
		return angkaTerbilang($x / 1000) . " ribu" . angkaTerbilang($x % 1000);
	elseif ($x < 1000000000)
		return angkaTerbilang($x / 1000000) . " juta" . angkaTerbilang($x % 1000000);
}
?>