<!-- <?php echo "Bai 1" ?> -->
<div class="container">
    <h3 class="display-3">Bài 1:</h3>
    <?php 
        $even=array();
        $odd=array();
        for ($x = 0; $x <= 50; $x++) {
            $x%2===0?array_push($even,$x):array_push($odd,$x);
        }
        echo "
        <p class='lead'>
            Số lẻ từ 1 đến 50: 
        </p>
        ";
        foreach($even as $elem){
            echo "$elem - ";
        }
        echo "
        <p class='lead'>
            Số chẵn từ 1 đến 50: 
        </p>
        ";
        foreach($odd as $elem){
            echo "$elem - ";
        }
    ?>
</div>