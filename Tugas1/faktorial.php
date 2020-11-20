<html>
<body>
	<form method="GET" action="">
        <label for="angka">Masukan Angka: </label>
        <input type="text" name="angka"><br>
		<input type="submit" name="submit" value="Faktorial">
	</form>

    <?php
        if (isset($_GET['submit']))
        {
            
        $n=$_GET['angka'];
        
        function faktorial($a){
            $faktorial = 1;
            for($i=$a ; $i>=1 ; $i--){
                $faktorial = $faktorial * $i;
            }
            return $faktorial;
        }
        
        echo "Faktorial dari $n = ".faktorial($n);

        }
    ?>
        

</body>
</html>