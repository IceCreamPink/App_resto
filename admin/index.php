<?php 
include"../config/classDB.php";
$id = isset($_GET['id'])?$_GET['id']:"";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../css/styleadmin.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar">
        <a href="">nyaa</a>
    </nav>
    <!-- sidebar -->
    <div id="side-container">
        <div class="sidebar">
            <ul class="sidebar-content">
                <li><a href="?hal=home"><span class="material-symbols-outlined">home</span><span>Home</span></a>
                </li>
                <li><a href="?hal=kategori"><span
                            class="material-symbols-outlined">dashboard</span><span>DashBoard</span></a>
                </li>
                <li><a href="?hal=menu"><span class="material-symbols-outlined">explore</span><span>Explore</span></a>
                </li>
                <li><a href="?hal=analistics"><span
                            class="material-symbols-outlined">analytics</span><span>Analytics</span></a>
                </li>
                <li><a href="?hal=setting"><span
                            class="material-symbols-outlined">settings</span><span>Settings</span></a>
                </li>
                <li><a href="?hal=user"><span class="material-symbols-outlined">person</span><span>Account</span></a>
                </li>
                <li><a href="?hal=report"><span class="material-symbols-outlined">report</span><span>Report</span></a>
                </li>
                <li><a href="?hal=email"><span class="material-symbols-outlined">email</span><span>Contact</span></a>
                </li>
                <li><a href="?hal=logout"><span class="material-symbols-outlined">logout</span><span>Logout</span></a>
                </li>
            </ul>
        </div>
        <div class="rectangle"></div>
        <div class="konten">
            <div class="topbar">
                <h1>Dashboard Admin</h1>
            </div>
            <?php
            $hal = isset($_GET['hal'])?$_GET['hal']:"";
            if($hal){
                include $hal.".php";            
            }
        ?>
        </div>
    </div>



</html>