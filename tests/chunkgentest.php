<?php
     include('connection.php');

     $tile_aa = mt_rand(1, 100);{
          if ($tile_aa <= 50){
               $tile_aa = 1;
     }
          if(($tile_aa > 50) && ($tile_aa <= 75)){
               $tile_aa = 2;
     }
          if(($tile_aa > 75) && ($tile_aa <= 90)){
               $tile_aa = 3;
     }
          if(($tile_aa > 90) && ($tile_aa <= 100)){
               $tile_aa = 4;
     }
     }

     $tile_ab = mt_rand(1, 100);{
          if ($tile_ab <= 50){
               $tile_ab = $tile_aa;
     }
          if(($tile_ab > 50) && ($tile_ab <= 75)){
               $tile_ab = 1;
     }
          if(($tile_ab > 75) && ($tile_ab <= 90)){
               $tile_ab = 2;
     }
          if(($tile_ab > 90) && ($tile_ab <= 95)){
               $tile_ab = 3;
     }
          if(($tile_ab > 95) && ($tile_ab <= 100)){
          $tile_ab = 4;
     }
     }

     $tile_ac = mt_rand(1, 100);{
          if ($tile_ac <= 50){
               $tile_ac = $tile_ab;
     }
          if(($tile_ac > 50) && ($tile_ac <= 75)){
               $tile_ac = 1;
     }
          if(($tile_ac > 75) && ($tile_ac <= 90)){
               $tile_ac = 2;
     }
          if(($tile_ac > 90) && ($tile_ac <= 95)){
               $tile_ac = 3;
     }
          if(($tile_ac > 95) && ($tile_ac <= 100)){
          $tile_ac = 4;
     }
     }

     $tile_ad = mt_rand(1, 100);{
          if ($tile_ad <= 50){
               $tile_ad = $tile_ac;
     }
          if(($tile_ad > 50) && ($tile_ad <= 75)){
               $tile_ad = 1;
     }
          if(($tile_ad > 75) && ($tile_ad <= 90)){
               $tile_ad = 2;
     }
          if(($tile_ad > 90) && ($tile_ad <= 95)){
               $tile_ad = 3;
     }
          if(($tile_ad > 95) && ($tile_ad <= 100)){
          $tile_ad = 4;
     }
     }

     $tile_ae = mt_rand(1, 100);{
          if ($tile_ae <= 50){
               $tile_ae = $tile_ad;
     }
          if(($tile_ae > 50) && ($tile_ae <= 75)){
               $tile_ae = 1;
     }
          if(($tile_ae > 75) && ($tile_ae <= 90)){
               $tile_ae = 2;
     }
          if(($tile_ae > 90) && ($tile_ae <= 95)){
               $tile_ae = 3;
     }
          if(($tile_ae > 95) && ($tile_ae <= 100)){
          $tile_ae = 4;
     }
     }

     $tile_af = mt_rand(1, 100);{
          if ($tile_af <= 50){
               $tile_af = $tile_ae;
     }
          if(($tile_af > 50) && ($tile_af <= 75)){
               $tile_af = 1;
     }
          if(($tile_af > 75) && ($tile_af <= 90)){
               $tile_af = 2;
     }
          if(($tile_af > 90) && ($tile_af <= 95)){
               $tile_af = 3;
     }
          if(($tile_af > 95) && ($tile_af <= 100)){
          $tile_af = 4;
     }
     }

     //B-

     $tile_ba = mt_rand(1, 100);{
          if ($tile_ba <= 50){
               $tile_ba = $tile_aa;
     }
          if(($tile_ba > 50) && ($tile_ba <= 75)){
               $tile_ba = 1;
     }
          if(($tile_ba > 75) && ($tile_ba <= 90)){
               $tile_ba = 2;
     }
          if(($tile_ba > 90) && ($tile_ba <= 95)){
               $tile_ba = 3;
     }
          if(($tile_ba > 95) && ($tile_ba <= 100)){
          $tile_ba = 4;
     }
     }

     $tile_bb = mt_rand(1, 100);{
          if ($tile_bb <= 30){
               $tile_bb = $tile_ba;
     }
          if(($tile_bb > 30) && ($tile_ac <= 60)){
               $tile_bb = $tile_ab;
     }
          if(($tile_bb > 60) && ($tile_bb <= 80)){
               $tile_bb = 1;
     }
          if(($tile_bb > 80) && ($tile_bb <= 90)){
               $tile_bb = 2;
     }
          if(($tile_bb > 90) && ($tile_bb <= 95)){
               $tile_bb = 3;
     }
          if(($tile_bb > 95) && ($tile_bb <= 100)){
          $tile_bb = 4;
     }
     }

     $tile_bc = mt_rand(1, 100);{
          if ($tile_bc <= 30){
               $tile_bc = $tile_bb;
     }
          if(($tile_bc > 30) && ($tile_ac <= 60)){
               $tile_bc = $tile_ac;
     }
          if(($tile_bc > 60) && ($tile_bc <= 80)){
               $tile_bc = 1;
     }
          if(($tile_bc > 80) && ($tile_bc <= 90)){
               $tile_bc = 2;
     }
          if(($tile_bc > 90) && ($tile_bc <= 95)){
               $tile_bc = 3;
     }
          if(($tile_bc > 95) && ($tile_bc <= 100)){
          $tile_bc = 4;
     }
     }

     $tile_bd = mt_rand(1, 100);{
          if ($tile_bd <= 30){
               $tile_bd = $tile_bc;
     }
          if(($tile_bd > 30) && ($tile_bd <= 60)){
               $tile_bd = $tile_ad;
     }
          if(($tile_bd > 60) && ($tile_bd <= 80)){
               $tile_bd = 1;
     }
          if(($tile_bd > 80) && ($tile_bd <= 90)){
               $tile_bd = 2;
     }
          if(($tile_bd > 90) && ($tile_bd <= 95)){
               $tile_bd = 3;
     }
          if(($tile_bd > 95) && ($tile_bd <= 100)){
          $tile_bd = 4;
     }
     }

     $tile_be = mt_rand(1, 100);{
          if ($tile_be <= 30){
               $tile_be = $tile_bd;
     }
          if(($tile_be > 30) && ($tile_ac <= 60)){
               $tile_be = $tile_ae;
     }
          if(($tile_be > 60) && ($tile_be <= 80)){
               $tile_be = 1;
     }
          if(($tile_be > 80) && ($tile_be <= 90)){
               $tile_be = 2;
     }
          if(($tile_be > 90) && ($tile_be <= 95)){
               $tile_be = 3;
     }
          if(($tile_be > 95) && ($tile_be <= 100)){
          $tile_be = 4;
     }
     }

     $tile_bf = mt_rand(1, 100);{
          if ($tile_bf <= 30){
               $tile_bf = $tile_be;
     }
          if(($tile_bf > 30) && ($tile_ac <= 60)){
               $tile_bf = $tile_af;
     }
          if(($tile_bf > 60) && ($tile_bf <= 80)){
               $tile_bf = 1;
     }
          if(($tile_bf > 80) && ($tile_bf <= 90)){
               $tile_bf = 2;
     }
          if(($tile_bf > 90) && ($tile_bf <= 95)){
               $tile_bf = 3;
     }
          if(($tile_bf > 95) && ($tile_bf <= 100)){
          $tile_bf = 4;
     }
     }

     //C - 

     $tile_ca = mt_rand(1, 100);{
          if ($tile_ca <= 50){
               $tile_ca = 1;
     }
          if(($tile_ca > 50) && ($tile_ca <= 75)){
               $tile_ca = 2;
     }
          if(($tile_ca > 75) && ($tile_ca <= 90)){
               $tile_ca = 3;
     }
          if(($tile_ca > 90) && ($tile_ca <= 100)){
               $tile_ca = 4;
     }
     }

     $tile_cb = mt_rand(1, 100);{
          if ($tile_cb <= 30){
               $tile_cb = $tile_ca;
     }
          if(($tile_cb > 30) && ($tile_ac <= 60)){
               $tile_cb = $tile_bb;
     }
          if(($tile_cb > 60) && ($tile_cb <= 80)){
               $tile_cb = 1;
     }
          if(($tile_cb > 80) && ($tile_cb <= 90)){
               $tile_cb = 2;
     }
          if(($tile_cb > 90) && ($tile_cb <= 95)){
               $tile_cb = 3;
     }
          if(($tile_cb > 95) && ($tile_cb <= 100)){
          $tile_cb = 4;
     }
     }
     
     $tile_cc = mt_rand(1, 100);{
          if ($tile_cc <= 30){
               $tile_cc = $tile_cb;
     }
          if(($tile_cc > 30) && ($tile_ac <= 60)){
               $tile_cc = $tile_bc;
     }
          if(($tile_cc > 60) && ($tile_cc <= 80)){
               $tile_cc = 1;
     }
          if(($tile_cc > 80) && ($tile_cc <= 90)){
               $tile_cc = 2;
     }
          if(($tile_cc > 90) && ($tile_cc <= 95)){
               $tile_cc = 3;
     }
          if(($tile_cc > 95) && ($tile_cc <= 100)){
          $tile_cc = 4;
     }
     }
     
     $tile_cd = mt_rand(1, 100);{
          if ($tile_cd <= 30){
               $tile_cd = $tile_cc;
     }
          if(($tile_cd > 30) && ($tile_cd <= 60)){
               $tile_cd = $tile_bd;
     }
          if(($tile_cd > 60) && ($tile_cd <= 80)){
               $tile_cd = 1;
     }
          if(($tile_cd > 80) && ($tile_cd <= 90)){
               $tile_cd = 2;
     }
          if(($tile_cd > 90) && ($tile_cd <= 95)){
               $tile_cd = 3;
     }
          if(($tile_cd > 95) && ($tile_cd <= 100)){
          $tile_cd = 4;
     }
     }
     
     $tile_ce = mt_rand(1, 100);{
          if ($tile_ce <= 30){
               $tile_ce = $tile_cd;
     }
          if(($tile_ce > 30) && ($tile_ac <= 60)){
               $tile_ce = $tile_be;
     }
          if(($tile_ce > 60) && ($tile_ce <= 80)){
               $tile_ce = 1;
     }
          if(($tile_ce > 80) && ($tile_ce <= 90)){
               $tile_ce = 2;
     }
          if(($tile_ce > 90) && ($tile_ce <= 95)){
               $tile_ce = 3;
     }
          if(($tile_ce > 95) && ($tile_ce <= 100)){
          $tile_ce = 4;
     }
     }
     
     $tile_cf = mt_rand(1, 100);{
          if ($tile_cf <= 30){
               $tile_cf = $tile_ce;
     }
          if(($tile_cf > 30) && ($tile_ac <= 60)){
               $tile_cf = $tile_bf;
     }
          if(($tile_cf > 60) && ($tile_cf <= 80)){
               $tile_cf = 1;
     }
          if(($tile_cf > 80) && ($tile_cf <= 90)){
               $tile_cf = 2;
     }
          if(($tile_cf > 90) && ($tile_cf <= 95)){
               $tile_cf = 3;
     }
          if(($tile_cf > 95) && ($tile_cf <= 100)){
          $tile_cf = 4;
     }
     }

     //D - 

     $tile_da = mt_rand(1, 100);{
          if ($tile_da <= 50){
               $tile_da = 1;
     }
          if(($tile_da > 50) && ($tile_da <= 75)){
               $tile_da = 1;
     }
          if(($tile_da > 75) && ($tile_da <= 90)){
               $tile_da = 2;
     }
          if(($tile_da > 90) && ($tile_da <= 95)){
               $tile_da = 3;
     }
          if(($tile_da > 95) && ($tile_da <= 100)){
               $tile_da = 4;
     }
     }

     $tile_db = mt_rand(1, 100);{
          if ($tile_db <= 30){
               $tile_db = $tile_da;
     }
          if(($tile_db > 30) && ($tile_ac <= 60)){
               $tile_db = $tile_cb;
     }
          if(($tile_db > 60) && ($tile_db <= 80)){
               $tile_db = 1;
     }
          if(($tile_db > 80) && ($tile_db <= 90)){
               $tile_db = 2;
     }
          if(($tile_db > 90) && ($tile_db <= 95)){
               $tile_db = 3;
     }
          if(($tile_db > 95) && ($tile_db <= 100)){
          $tile_db = 4;
     }
     }
     
     $tile_dc = mt_rand(1, 100);{
          if ($tile_dc <= 30){
               $tile_dc = $tile_db;
     }
          if(($tile_dc > 30) && ($tile_ac <= 60)){
               $tile_dc = $tile_cc;
     }
          if(($tile_dc > 60) && ($tile_dc <= 80)){
               $tile_dc = 1;
     }
          if(($tile_dc > 80) && ($tile_dc <= 90)){
               $tile_dc = 2;
     }
          if(($tile_dc > 90) && ($tile_dc <= 95)){
               $tile_dc = 3;
     }
          if(($tile_dc > 95) && ($tile_dc <= 100)){
          $tile_dc = 4;
     }
     }
     
     $tile_dd = mt_rand(1, 100);{
          if ($tile_dd <= 30){
               $tile_dd = $tile_dc;
     }
          if(($tile_dd > 30) && ($tile_dd <= 60)){
               $tile_dd = $tile_cd;
     }
          if(($tile_dd > 60) && ($tile_dd <= 80)){
               $tile_dd = 1;
     }
          if(($tile_dd > 80) && ($tile_dd <= 90)){
               $tile_dd = 2;
     }
          if(($tile_dd > 90) && ($tile_dd <= 95)){
               $tile_dd = 3;
     }
          if(($tile_dd > 95) && ($tile_dd <= 100)){
          $tile_dd = 4;
     }
     }
     
     $tile_de = mt_rand(1, 100);{
          if ($tile_de <= 30){
               $tile_de = $tile_dd;
     }
          if(($tile_de > 30) && ($tile_ac <= 60)){
               $tile_de = $tile_ce;
     }
          if(($tile_de > 60) && ($tile_de <= 80)){
               $tile_de = 1;
     }
          if(($tile_de > 80) && ($tile_de <= 90)){
               $tile_de = 2;
     }
          if(($tile_de > 90) && ($tile_de <= 95)){
               $tile_de = 3;
     }
          if(($tile_de > 95) && ($tile_de <= 100)){
          $tile_de = 4;
     }
     }
     
     $tile_df = mt_rand(1, 100);{
          if ($tile_df <= 30){
               $tile_df = $tile_de;
     }
          if(($tile_df > 30) && ($tile_ac <= 60)){
               $tile_df = $tile_cf;
     }
          if(($tile_df > 60) && ($tile_df <= 80)){
               $tile_df = 1;
     }
          if(($tile_df > 80) && ($tile_df <= 90)){
               $tile_df = 2;
     }
          if(($tile_df > 90) && ($tile_df <= 95)){
               $tile_df = 3;
     }
          if(($tile_df > 95) && ($tile_df <= 100)){
          $tile_df = 4;
     }
     }

     //E - 

     $tile_ea = mt_rand(1, 100);{
          if ($tile_ea <= 50){
               $tile_ea = 1;
     }
          if(($tile_ea > 50) && ($tile_ea <= 75)){
               $tile_ea = 1;
     }
          if(($tile_ea > 75) && ($tile_ea <= 90)){
               $tile_ea = 2;
     }
          if(($tile_ea > 90) && ($tile_ea <= 95)){
               $tile_ea = 3;
     }
          if(($tile_ea > 95) && ($tile_ea <= 100)){
               $tile_ea = 4;
     }
     }

     $tile_eb = mt_rand(1, 100);{
          if ($tile_eb <= 30){
               $tile_eb = $tile_ea;
     }
          if(($tile_eb > 30) && ($tile_ac <= 60)){
               $tile_eb = $tile_db;
     }
          if(($tile_eb > 60) && ($tile_eb <= 80)){
               $tile_eb = 1;
     }
          if(($tile_eb > 80) && ($tile_eb <= 90)){
               $tile_eb = 2;
     }
          if(($tile_eb > 90) && ($tile_eb <= 95)){
               $tile_eb = 3;
     }
          if(($tile_eb > 95) && ($tile_eb <= 100)){
          $tile_eb = 4;
     }
     }
     
     $tile_ec = mt_rand(1, 100);{
          if ($tile_ec <= 30){
               $tile_ec = $tile_eb;
     }
          if(($tile_ec > 30) && ($tile_ac <= 60)){
               $tile_ec = $tile_dc;
     }
          if(($tile_ec > 60) && ($tile_ec <= 80)){
               $tile_ec = 1;
     }
          if(($tile_ec > 80) && ($tile_ec <= 90)){
               $tile_ec = 2;
     }
          if(($tile_ec > 90) && ($tile_ec <= 95)){
               $tile_ec = 3;
     }
          if(($tile_ec > 95) && ($tile_ec <= 100)){
          $tile_ec = 4;
     }
     }
     
     $tile_ed = mt_rand(1, 100);{
          if ($tile_ed <= 30){
               $tile_ed = $tile_ec;
     }
          if(($tile_ed > 30) && ($tile_ed <= 60)){
               $tile_ed = $tile_dd;
     }
          if(($tile_ed > 60) && ($tile_ed <= 80)){
               $tile_ed = 1;
     }
          if(($tile_ed > 80) && ($tile_ed <= 90)){
               $tile_ed = 2;
     }
          if(($tile_ed > 90) && ($tile_ed <= 95)){
               $tile_ed = 3;
     }
          if(($tile_ed > 95) && ($tile_ed <= 100)){
          $tile_ed = 4;
     }
     }
     
     $tile_ee = mt_rand(1, 100);{
          if ($tile_ee <= 30){
               $tile_ee = $tile_ed;
     }
          if(($tile_ee > 30) && ($tile_ac <= 60)){
               $tile_ee = $tile_de;
     }
          if(($tile_ee > 60) && ($tile_ee <= 80)){
               $tile_ee = 1;
     }
          if(($tile_ee > 80) && ($tile_ee <= 90)){
               $tile_ee = 2;
     }
          if(($tile_ee > 90) && ($tile_ee <= 95)){
               $tile_ee = 3;
     }
          if(($tile_ee > 95) && ($tile_ee <= 100)){
          $tile_ee = 4;
     }
     }
     
     $tile_ef = mt_rand(1, 100);{
          if ($tile_ef <= 30){
               $tile_ef = $tile_ee;
     }
          if(($tile_ef > 30) && ($tile_ac <= 60)){
               $tile_ef = $tile_df;
     }
          if(($tile_ef > 60) && ($tile_ef <= 80)){
               $tile_ef = 1;
     }
          if(($tile_ef > 80) && ($tile_ef <= 90)){
               $tile_ef = 2;
     }
          if(($tile_ef > 90) && ($tile_ef <= 95)){
               $tile_ef = 3;
     }
          if(($tile_ef > 95) && ($tile_ef <= 100)){
          $tile_ef = 4;
     }
     }

     // F - 

     $tile_fa = mt_rand(1, 100);{
          if ($tile_fa <= 50){
               $tile_fa = 1;
     }
          if(($tile_fa > 50) && ($tile_fa <= 75)){
               $tile_fa = 1;
     }
          if(($tile_fa > 75) && ($tile_fa <= 90)){
               $tile_fa = 2;
     }
          if(($tile_fa > 90) && ($tile_fa <= 95)){
               $tile_fa = 3;
     }
          if(($tile_fa > 95) && ($tile_fa <= 100)){
               $tile_fa = 4;
     }
     }

     $tile_fb = mt_rand(1, 100);{
          if ($tile_fb <= 30){
               $tile_fb = $tile_ea;
     }
          if(($tile_fb > 30) && ($tile_ac <= 60)){
               $tile_fb = $tile_db;
     }
          if(($tile_fb > 60) && ($tile_fb <= 80)){
               $tile_fb = 1;
     }
          if(($tile_fb > 80) && ($tile_fb <= 90)){
               $tile_fb = 2;
     }
          if(($tile_fb > 90) && ($tile_fb <= 95)){
               $tile_fb = 3;
     }
          if(($tile_fb > 95) && ($tile_fb <= 100)){
          $tile_fb = 4;
     }
     }
     
     $tile_fc = mt_rand(1, 100);{
          if ($tile_fc <= 30){
               $tile_fc = $tile_fb;
     }
          if(($tile_fc > 30) && ($tile_ac <= 60)){
               $tile_fc = $tile_dc;
     }
          if(($tile_fc > 60) && ($tile_fc <= 80)){
               $tile_fc = 1;
     }
          if(($tile_fc > 80) && ($tile_fc <= 90)){
               $tile_fc = 2;
     }
          if(($tile_fc > 90) && ($tile_fc <= 95)){
               $tile_fc = 3;
     }
          if(($tile_fc > 95) && ($tile_fc <= 100)){
          $tile_fc = 4;
     }
     }
     
     $tile_fd = mt_rand(1, 100);{
          if ($tile_fd <= 30){
               $tile_fd = $tile_fc;
     }
          if(($tile_fd > 30) && ($tile_fd <= 60)){
               $tile_fd = $tile_dd;
     }
          if(($tile_fd > 60) && ($tile_fd <= 80)){
               $tile_fd = 1;
     }
          if(($tile_fd > 80) && ($tile_fd <= 90)){
               $tile_fd = 2;
     }
          if(($tile_fd > 90) && ($tile_fd <= 95)){
               $tile_fd = 3;
     }
          if(($tile_fd > 95) && ($tile_fd <= 100)){
          $tile_fd = 4;
     }
     }
     
     $tile_fe = mt_rand(1, 100);{
          if ($tile_fe <= 30){
               $tile_fe = $tile_fd;
     }
          if(($tile_fe > 30) && ($tile_ac <= 60)){
               $tile_fe = $tile_de;
     }
          if(($tile_fe > 60) && ($tile_fe <= 80)){
               $tile_fe = 1;
     }
          if(($tile_fe > 80) && ($tile_fe <= 90)){
               $tile_fe = 2;
     }
          if(($tile_fe > 90) && ($tile_fe <= 95)){
               $tile_fe = 3;
     }
          if(($tile_fe > 95) && ($tile_fe <= 100)){
          $tile_fe = 4;
     }
     }
     
     $tile_ff = mt_rand(1, 100);{
          if ($tile_ff <= 30){
               $tile_ff = $tile_fe;
     }
          if(($tile_ff > 30) && ($tile_ac <= 60)){
               $tile_ff = $tile_df;
     }
          if(($tile_ff > 60) && ($tile_ff <= 80)){
               $tile_ff = 1;
     }
          if(($tile_ff > 80) && ($tile_ff <= 90)){
               $tile_ff = 2;
     }
          if(($tile_ff > 90) && ($tile_ff <= 95)){
               $tile_ff = 3;
     }
          if(($tile_ff > 95) && ($tile_ff <= 100)){
          $tile_ff = 4;
     }
     }

     //MANDA PRO DB

     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_aa', 1)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_ab', 2)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_ac', 3)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_ad', 4)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_ae', 5)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_af', 6)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_ba', 7)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_bb', 8)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_bc', 9)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_bd', 10)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_be', 11)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_bf', 12)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_ca', 13)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_cb', 14)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_cc', 15)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_cd', 16)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_ce', 17)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_cf', 18)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_da', 19)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_db', 20)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_dc', 21)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_dd', 22)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_de', 23)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_df', 24)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_ea', 25)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_eb', 26)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_ec', 27)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_ed', 28)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_ee', 29)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_ef', 30)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_fa', 31)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_fb', 32)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_fc', 33)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_fd', 34)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_fe', 35)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $sql = "INSERT INTO tile (tilenum, tileid)
     VALUES ('$tile_ff', 36)";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
          header('Location: chunk.php');
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }


     //ATENÇÃO, JEGUE! É PRA SUBSTITUIR TODOS OS B's POR C QUE VAI MAIS RÁPIDO!
?>