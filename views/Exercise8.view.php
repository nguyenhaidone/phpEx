<!-- <?php echo "Bai 6" ?> -->

<div class="container">
   <h3 class="display-3">Bài 8:</h3>
    <form method="post">
        <div class="form-group">
            <h4 for="nInput">Số nguyên dương:</h4>
            <?php
                $arr = array(1,5,2,5,-3,-5,3,-5,-7,-1,8);
                for($x=0;$x<count($arr);$x++){
                    if($arr[$x]>0){
                        echo "$arr[$x] ";
                    }
                };
            ?>
            <br>
            <h4 for="nInput">Số nguyên âm:</h4>
            <?php
                $arr = array(1,5,2,5,-3,-5,3,-5,-7,-1,8);
                for($x=0;$x<count($arr);$x++){
                    if($arr[$x]<0){
                        echo "$arr[$x] ";
                    }
                };
            ?>
        </div>
    </form>
</div>