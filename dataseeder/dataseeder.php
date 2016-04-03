<?php
include('../db.php');
include('../vars.php');

global $mysqli;

// sql to create table
$sql = "DROP TABLE STOCK";
$result = $mysqli->query($sql);

$sql = "CREATE TABLE STOCK (ID BIGINT NOT NULL, DESCRIPTION VARCHAR(255), IMGSRC VARCHAR(255), PRICE INTEGER, QUAN INTEGER, TITLE VARCHAR(255), PRIMARY KEY (ID))";

$result = $mysqli->query($sql);

if ($result) {
    echo "Table STOCK created successfully. ";
} else {
    echo "Error creating table! ";
}

// Populate the table
$prints = array(
    array(1, "The Nike Air Zoom Odyssey Men's Running Shoe features soft, responsive cushioning and enhanced stability to help propel your run while giving you the support you need.",
     'item11.jpg', 650, 6, 'Nike Air Zoom Odyssey'),

    array(2, "The Nike HyperLive Men's Basketball Shoe offers a low-to-the-court feel, while its responsive midsole and cage combine to wrap the forefoot for locked-in stability. The lightweight upper and hexagonal outsole pattern deliver natural flexibility and superior traction during play.",
     'item12.jpg', 850, 10, 'Nike HyperLive'),
	 
    array(3, "With side ankle supports and innovative molded mesh, the Air Jordan 4 Retro (3.5y-7y) Girls' Shoe is sturdy and breathable, delivering enhanced comfort in timeless hoops style.",
     'item13.jpg', 1250, 1, 'Air Jordan 4 Retro')
     
    array(4, "Made to help you start, stop and change direction, the Nike Magista Orden Men’s Firm-Ground Soccer Boot is designed for a natural ball touch to deliver creative plays on the field.",
     'item14.jpg', 700, 1, 'Nike Magista Orden FG'),

    array(5, "The Nike Metcon 2 Men's Training Shoe features a flat, stable platform and dual-density foam for stability and cushioning during intense workouts. Firm and sticky rubbers create durable traction and extra support.",
     'item15.jpg', 800, 1, 'Nike Metcon 2'),
	 
    array(6, "From the Flymesh upper to the triple-density foam midsole, the Nike Air Zoom Structure 19 Men's Running Shoe offers plenty of support and the response you need for a smooth, stable ride that feels ultra fast.",
     'item16.jpg', 1100, 1, 'Nike Air Zoom Structure 19')
     
     array(7, "The NikeCourt Zoom Vapor 9.5 Tour Men's Tennis Shoe molds to your foot for a locked-down fit, and it features super-responsive cushioning to meet the demands of your quickest turns and sprints.",
     'item17.jpg', 1450, 1, 'NikeCourt Zoom Vapor 9.5 Tour'),

    array(8, "The Nike Air Vapor Ace Men's Tennis Shoe is made with a leather upper, perforations and ventilated panels for support and breathability. A notched-bootie construction cradles the foot for locked-down comfort, while an encapsulated Air-Sole unit delivers superb cushioning.",
     'item18.jpg', 1250, 1, 'NIKE AIR VAPOR ACE'),
	 
    array(9, "The Nike Dunk High Premium SB Unisex Shoe (Men's Sizing) is made with a comfortable yet tough combination upper for durability, while a full-length foam midsole and Nike Zoom unit offer lightweight, low-profile cushioning.",
     'item19.jpg', 1550, 0, 'Nike Dunk High Premium SB')
);

foreach ($prints as $print) {
	$desc = str_replace("'","''",$print[1]);
	$rc = $mysqli->query("INSERT INTO stock (id,  description, imgsrc, price, quan, title) VALUES ( {$print[0]}, '${desc}' , '{$print[2]}', {$print[3]}, {$print[4]}, '{$print[5]}' )");
    if ($rc) {
        print "Insert succeded. ";
    }
	else print "Insert failed! ";
}

$mysqli->close();
?>
