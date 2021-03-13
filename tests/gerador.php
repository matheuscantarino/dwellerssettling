<?php
    include('connection.php');
    $chunk = 1;

    $sql = "SELECT * FROM chunk";
    $result = mysqli_query($conn,$sql) or die("Error returning data");
    while ($register = mysqli_fetch_array($result)){
      $chunksit = $register['chunksit'];

      if($chunksit == 'ative'){


      ///GERA O TILE A.A
      $tileaa = mt_rand(1, 100);
      if ($tileaa <= 50){
          $tileaa = 1;
      }
      if(($tileaa > 50) && ($tileaa <= 75)){
          $tileaa = 2;
      }
      if(($tileaa > 75) && ($tileaa <= 90)){
          $tileaa = 3;
      }
      if(($tileaa > 90) && ($tileaa <= 100)){
          $tileaa = 4;
      }

      ///GERA O TILE A.B
      $tileab = mt_rand(1, 100);
      if ($tileab <= 50){
        $tileab = $tileaa;
      }
      if(($tileab > 50) && ($tileab <= 75)){
        $tileab = 2;
      }
      if(($tileab > 75) && ($tileab <= 90)){
        $tileab = 3;
      }
      if(($tileab > 90) && ($tileab <= 100)){
        $tileab = 4;
      }

      ///GERA O TILE A.C
      $tileac = mt_rand(1, 100);
      if ($tileac <= 50){
        $tileac = $tileab;
      }
      if(($tileac > 50) && ($tileac <= 75)){
        $tileac = 2;
      }
      if(($tileac > 75) && ($tileac <= 90)){
        $tileac = 3;
      }
      if(($tileac > 90) && ($tileac <= 100)){
        $tileac = 4;
      }

      ///GERA O TILE A.D
      $tilead = mt_rand(1, 100);
      if ($tilead <= 50){
        $tilead = $tileac;
      }
      if(($tilead > 50) && ($tilead <= 75)){
        $tilead = 2;
      }
      if(($tilead > 75) && ($tilead <= 90)){
        $tilead = 3;
      }
      if(($tilead > 90) && ($tilead <= 100)){
        $tilead = 4;
      }

       ///GERA O TILE A.E
      $tileae = mt_rand(1, 100);
      if ($tileae <= 50){
          $tileae = $tilead;
      }
      if(($tileae > 50) && ($tileae <= 75)){
          $tileae = 2;
      }
      if(($tileae > 75) && ($tileae <= 90)){
        $tileae = 3;
      }
      if(($tileae > 90) && ($tileae <= 100)){
        $tileae = 4;
      }

      //GERA O TILE A.F
      $tileaf = mt_rand(1, 100);
      if ($tileaf <= 50){
          $tileaf = $tileae;
      }
      if(($tileaf > 50) && ($tileaf <= 75)){
          $tileaf = 2;
      }
      if(($tileaf > 75) && ($tileaf <= 90)){
        $tileaf = 3;
      }
      if(($tileaf > 90) && ($tileaf <= 100)){
        $tileaf = 4;
      }

      //GERA O TILE A.G
      $tileag = mt_rand(1, 100);
      if ($tileag <= 50){
          $tileag = $tileaf;
      }
      if(($tileag > 50) && ($tileag <= 75)){
          $tileag = 2;
      }
      if(($tileag > 75) && ($tileag <= 90)){
        $tileag = 3;
      }
      if(($tileag > 90) && ($tileag <= 100)){
        $tileag = 4;
      }

      ///GERA O TILE B.A
      $tileba = mt_rand(1, 100);
      if ($tileba <= 50){
          $tileba = 1;
      }
      if(($tileba > 50) && ($tileba <= 75)){
          $tileba = 2;
      }
      if(($tileba > 75) && ($tileba <= 90)){
          $tileba = 3;
      }
      if(($tileba > 90) && ($tileba <= 100)){
          $tileba = 4;
      }

      ///GERA O TILE B.B
      $tilebb = mt_rand(1, 100);
      if ($tilebb <= 50){
        $tilebb = $tileba;
      }
      if(($tilebb > 50) && ($tilebb <= 75)){
        $tilebb = 2;
      }
      if(($tilebb > 75) && ($tilebb <= 90)){
        $tilebb = 3;
      }
      if(($tilebb > 90) && ($tilebb <= 100)){
        $tilebb = 4;
      }

      ///GERA O TILE B.C
      $tilebc = mt_rand(1, 100);
      if ($tilebc <= 50){
        $tilebc = $tilebb;
      }
      if(($tilebc > 50) && ($tilebc <= 75)){
        $tilebc = 2;
      }
      if(($tilebc > 75) && ($tilebc <= 90)){
        $tilebc = 3;
      }
      if(($tilebc > 90) && ($tilebc <= 100)){
        $tilebc = 4;
      }

      ///GERA O TILE B.D
      $tilebd = mt_rand(1, 100);
      if ($tilebd <= 50){
        $tilebd = $tilebc;
      }
      if(($tilebd > 50) && ($tilebd <= 75)){
        $tilebd = 2;
      }
      if(($tilebd > 75) && ($tilebd <= 90)){
        $tilebd = 3;
      }
      if(($tilebd > 90) && ($tilebd <= 100)){
        $tilebd = 4;
      }

       ///GERA O TILE B.E
      $tilebe = mt_rand(1, 100);
      if ($tilebe <= 50){
          $tilebe = $tilebd;
      }
      if(($tilebe > 50) && ($tilebe <= 75)){
          $tilebe = 2;
      }
      if(($tilebe > 75) && ($tilebe <= 90)){
        $tilebe = 3;
      }
      if(($tilebe > 90) && ($tilebe <= 100)){
        $tilebe = 4;
      }

      //GERA O TILE B.F
      $tilebf = mt_rand(1, 100);
      if ($tilebf <= 50){
          $tilebf = $tilebe;
      }
      if(($tilebf > 50) && ($tilebf <= 75)){
          $tilebf = 2;
      }
      if(($tilebf > 75) && ($tilebf <= 90)){
        $tilebf = 3;
      }
      if(($tilebf > 90) && ($tilebf <= 100)){
        $tilebf = 4;
      }

            ///GERA O TILE B.A
      $tileba = mt_rand(1, 100);
      if ($tileba <= 50){
          $tileba = 1;
      }
      if(($tileba > 50) && ($tileba <= 75)){
          $tileba = 2;
      }
      if(($tileba > 75) && ($tileba <= 90)){
          $tileba = 3;
      }
      if(($tileba > 90) && ($tileba <= 100)){
          $tileba = 4;
      }

      ///GERA O TILE B.B
      $tilebb = mt_rand(1, 100);
      if ($tilebb <= 50){
        $tilebb = $tileba;
      }
      if(($tilebb > 50) && ($tilebb <= 75)){
        $tilebb = 2;
      }
      if(($tilebb > 75) && ($tilebb <= 90)){
        $tilebb = 3;
      }
      if(($tilebb > 90) && ($tilebb <= 100)){
        $tilebb = 4;
      }

      ///GERA O TILE B.C
      $tilebc = mt_rand(1, 100);
      if ($tilebc <= 50){
        $tilebc = $tilebb;
      }
      if(($tilebc > 50) && ($tilebc <= 75)){
        $tilebc = 2;
      }
      if(($tilebc > 75) && ($tilebc <= 90)){
        $tilebc = 3;
      }
      if(($tilebc > 90) && ($tilebc <= 100)){
        $tilebc = 4;
      }

      ///GERA O TILE B.D
      $tilebd = mt_rand(1, 100);
      if ($tilebd <= 50){
        $tilebd = $tilebc;
      }
      if(($tilebd > 50) && ($tilebd <= 75)){
        $tilebd = 2;
      }
      if(($tilebd > 75) && ($tilebd <= 90)){
        $tilebd = 3;
      }
      if(($tilebd > 90) && ($tilebd <= 100)){
        $tilebd = 4;
      }

       ///GERA O TILE B.E
      $tilebe = mt_rand(1, 100);
      if ($tilebe <= 50){
          $tilebe = $tilebd;
      }
      if(($tilebe > 50) && ($tilebe <= 75)){
          $tilebe = 2;
      }
      if(($tilebe > 75) && ($tilebe <= 90)){
        $tilebe = 3;
      }
      if(($tilebe > 90) && ($tilebe <= 100)){
        $tilebe = 4;
      }

      //GERA O TILE B.F
      $tilebf = mt_rand(1, 100);
      if ($tilebf <= 50){
          $tilebf = $tilebe;
      }
      if(($tilebf > 50) && ($tilebf <= 75)){
          $tilebf = 2;
      }
      if(($tilebf > 75) && ($tilebf <= 90)){
        $tilebf = 3;
      }
      if(($tilebf > 90) && ($tilebf <= 100)){
        $tilebf = 4;
      }
            ///GERA O TILE B.A
      $tileba = mt_rand(1, 100);
      if ($tileba <= 50){
          $tileba = 1;
      }
      if(($tileba > 50) && ($tileba <= 75)){
          $tileba = 2;
      }
      if(($tileba > 75) && ($tileba <= 90)){
          $tileba = 3;
      }
      if(($tileba > 90) && ($tileba <= 100)){
          $tileba = 4;
      }

      ///GERA O TILE B.B
      $tilebb = mt_rand(1, 100);
      if ($tilebb <= 50){
        $tilebb = $tileba;
      }
      if(($tilebb > 50) && ($tilebb <= 75)){
        $tilebb = 2;
      }
      if(($tilebb > 75) && ($tilebb <= 90)){
        $tilebb = 3;
      }
      if(($tilebb > 90) && ($tilebb <= 100)){
        $tilebb = 4;
      }

      ///GERA O TILE B.C
      $tilebc = mt_rand(1, 100);
      if ($tilebc <= 50){
        $tilebc = $tilebb;
      }
      if(($tilebc > 50) && ($tilebc <= 75)){
        $tilebc = 2;
      }
      if(($tilebc > 75) && ($tilebc <= 90)){
        $tilebc = 3;
      }
      if(($tilebc > 90) && ($tilebc <= 100)){
        $tilebc = 4;
      }

      ///GERA O TILE B.D
      $tilebd = mt_rand(1, 100);
      if ($tilebd <= 50){
        $tilebd = $tilebc;
      }
      if(($tilebd > 50) && ($tilebd <= 75)){
        $tilebd = 2;
      }
      if(($tilebd > 75) && ($tilebd <= 90)){
        $tilebd = 3;
      }
      if(($tilebd > 90) && ($tilebd <= 100)){
        $tilebd = 4;
      }

       ///GERA O TILE B.E
      $tilebe = mt_rand(1, 100);
      if ($tilebe <= 50){
          $tilebe = $tilebd;
      }
      if(($tilebe > 50) && ($tilebe <= 75)){
          $tilebe = 2;
      }
      if(($tilebe > 75) && ($tilebe <= 90)){
        $tilebe = 3;
      }
      if(($tilebe > 90) && ($tilebe <= 100)){
        $tilebe = 4;
      }

      //GERA O TILE B.F
      $tilebf = mt_rand(1, 100);
      if ($tilebf <= 50){
          $tilebf = $tilebe;
      }
      if(($tilebf > 50) && ($tilebf <= 75)){
          $tilebf = 2;
      }
      if(($tilebf > 75) && ($tilebf <= 90)){
        $tilebf = 3;
      }
      if(($tilebf > 90) && ($tilebf <= 100)){
        $tilebf = 4;
      }
          ///GERA O TILE B.A
      $tileba = mt_rand(1, 100);
      if ($tileba <= 50){
          $tileba = 1;
      }
      if(($tileba > 50) && ($tileba <= 75)){
          $tileba = 2;
      }
      if(($tileba > 75) && ($tileba <= 90)){
          $tileba = 3;
      }
      if(($tileba > 90) && ($tileba <= 100)){
          $tileba = 4;
      }

      ///GERA O TILE B.B
      $tilebb = mt_rand(1, 100);
      if ($tilebb <= 30){
        $tilebb = $tileba;
      }
      if(($tilebb > 30) && ($tilebb <= 60)){
        $tilebb = $tileab;
      }
      if(($tilebb > 60) && ($tilebb <= 80)){
        $tilebb = 1;
      }
      if(($tilebb > 80) && ($tilebb <= 90)){
        $tilebb = 2;
      }
      if(($tilebb > 90) && ($tilebb <= 95)){
        $tilebb = 3;
      }
      if(($tilebb > 90) && ($tilebb <= 95)){
        $tilebb = 3;
      }

      ///GERA O TILE B.C
      $tilebc = mt_rand(1, 100);
      if ($tilebc <= 50){
        $tilebc = $tilebb;
      }
      if(($tilebc > 50) && ($tilebc <= 75)){
        $tilebc = 2;
      }
      if(($tilebc > 75) && ($tilebc <= 90)){
        $tilebc = 3;
      }
      if(($tilebc > 90) && ($tilebc <= 100)){
        $tilebc = 4;
      }

      ///GERA O TILE B.D
      $tilebd = mt_rand(1, 100);
      if ($tilebd <= 50){
        $tilebd = $tilebc;
      }
      if(($tilebd > 50) && ($tilebd <= 75)){
        $tilebd = 2;
      }
      if(($tilebd > 75) && ($tilebd <= 90)){
        $tilebd = 3;
      }
      if(($tilebd > 90) && ($tilebd <= 100)){
        $tilebd = 4;
      }

       ///GERA O TILE B.E
      $tilebe = mt_rand(1, 100);
      if ($tilebe <= 50){
          $tilebe = $tilebd;
      }
      if(($tilebe > 50) && ($tilebe <= 75)){
          $tilebe = 2;
      }
      if(($tilebe > 75) && ($tilebe <= 90)){
        $tilebe = 3;
      }
      if(($tilebe > 90) && ($tilebe <= 100)){
        $tilebe = 4;
      }

      //GERA O TILE B.F
      $tilebf = mt_rand(1, 100);
      if ($tilebf <= 50){
          $tilebf = $tilebe;
      }
      if(($tilebf > 50) && ($tilebf <= 75)){
          $tilebf = 2;
      }
      if(($tilebf > 75) && ($tilebf <= 90)){
        $tilebf = 3;
      }
      if(($tilebf > 90) && ($tilebf <= 100)){
        $tilebf = 4;
      }

      ///GERA O TILE C.A
      $tileca = mt_rand(1, 100);
      if ($tileca <= 50){
          $tileca = 1;
      }
      if(($tileca > 50) && ($tileca <= 75)){
          $tileca = 2;
      }
      if(($tileca > 75) && ($tileca <= 90)){
          $tileca = 3;
      }
      if(($tileca > 90) && ($tileca <= 100)){
          $tileca = 4;
      }

      ///GERA O TILE C.B
      $tilecb = mt_rand(1, 100);
      if ($tilecb <= 50){
        $tilecb = $tileca;
      }
      if(($tilecb > 50) && ($tilecb <= 75)){
        $tilecb = 2;
      }
      if(($tilecb > 75) && ($tilecb <= 90)){
        $tilecb = 3;
      }
      if(($tilecb > 90) && ($tilecb <= 100)){
        $tilecb = 4;
      }

      ///GERA O TILE C.C
      $tilecc = mt_rand(1, 100);
      if ($tilecc <= 50){
        $tilecc = $tilecb;
      }
      if(($tilecc > 50) && ($tilecc <= 75)){
        $tilecc = 2;
      }
      if(($tilecc > 75) && ($tilecc <= 90)){
        $tilecc = 3;
      }
      if(($tilecc > 90) && ($tilecc <= 100)){
        $tilecc = 4;
      }

      ///GERA O TILE B.D
      $tilecd = mt_rand(1, 100);
      if ($tilecd <= 50){
        $tilecd = $tilecc;
      }
      if(($tilecd > 50) && ($tilecd <= 75)){
        $tilecd = 2;
      }
      if(($tilecd > 75) && ($tilecd <= 90)){
        $tilecd = 3;
      }
      if(($tilecd > 90) && ($tilecd <= 100)){
        $tilecd = 4;
      }

       ///GERA O TILE B.E
      $tilebe = mt_rand(1, 100);
      if ($tilebe <= 50){
          $tilebe = $tilebd;
      }
      if(($tilebe > 50) && ($tilebe <= 75)){
          $tilebe = 2;
      }
      if(($tilebe > 75) && ($tilebe <= 90)){
        $tilebe = 3;
      }
      if(($tilebe > 90) && ($tilebe <= 100)){
        $tilebe = 4;
      }

      //GERA O TILE B.F
      $tilebf = mt_rand(1, 100);
      if ($tilebf <= 50){
          $tilebf = $tilebe;
      }
      if(($tilebf > 50) && ($tilebf <= 75)){
          $tilebf = 2;
      }
      if(($tilebf > 75) && ($tilebf <= 90)){
        $tilebf = 3;
      }
      if(($tilebf > 90) && ($tilebf <= 100)){
        $tilebf = 4;
      }


      ///ENVIA OS TILES PARA O DATABASE
      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tileaa')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tileab')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tileac')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tilead')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tileae')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tileaf')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tileba')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tilebb')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tilebc')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tilebd')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tilebe')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tilebf')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tileag')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      

        $chunksitnew = 'ative';

        $sql = "UPDATE chunk SET chunksit = '{$chunksitnew}'";
     }
    }
?>