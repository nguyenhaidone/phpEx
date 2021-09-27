<!-- <?php echo "Bai 2" ?> -->
<div class="container">
    <h3 class="display-3">Bài 2:</h3>
    <p class='lead'>
        Tổng các số nguyên tố là: 
    <?php 
        $prime=array();
        for ($x = 2; $x <= 100; $x++) {
            for($y = 2;$y <= 50;$y++){
                if($x>$y && $x%$y!==0){
                    array_push($prime,$x);
                    break;
                }
                else break;
            }
        };
        $total = 0;
        for ($i=0; $i < count($prime); $i++) { 
            $total+=$i;
        }
        echo $total;
    ?>
    </p>

</div>