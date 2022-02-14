<?php
include "mhs.php";

$mhs1 = new Mahasiswa();
$mhs1->setNIM(1234567);
$mhs1->setNama("Naeunda");
$mhs1->setJk("P");
$mhs1->setProdi("Matematika");
$mhs1->setSem(6);

$mhs2 = new Mahasiswa(1231234, "Karna", "L", "Teknik Mesin", 7);
$mhs3 = new Mahasiswa(1919191, "Lia", "P", "Satra Arab", 4);

echo "========================="."<br>";
echo "Daftar Mahasiswa"."<br>";
echo "========================="."<br>";
echo "1"."<br>";
echo "NIM : ". $mhs1->getNIM()."<br>";
echo "Nama : ". $mhs1->getNama()."<br>";
echo "Jenis Kelamin : ". $mhs1->getJk()."<br>";
echo "Program Studi : ". $mhs1->getProdi()."<br>";
echo "Semester : ". $mhs1->getSem()."<br>";
echo "========================="."<br>";
echo "2"."<br>";
echo "NIM : ". $mhs2->getNIM()."<br>";
echo "Nama : ". $mhs2->getNama()."<br>";
echo "Jenis Kelamin : ". $mhs2->getJk()."<br>";
echo "Program Studi : ". $mhs2->getProdi()."<br>";
echo "Semester : ". $mhs2->getSem()."<br>";
echo "========================="."<br>";
echo "3"."<br>";
echo "NIM : ". $mhs3->getNIM()."<br>";
echo "Nama : ". $mhs3->getNama()."<br>";
echo "Jenis Kelamin : ". $mhs3->getJk()."<br>";
echo "Program Studi : ". $mhs3->getProdi()."<br>";
echo "Semester : ". $mhs3->getSem()."<br>";
echo "========================="."<br>";

?>
