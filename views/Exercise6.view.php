<!-- <?php echo "Bai 6" ?> -->

<div class="container">
   <h3 class="display-3">Bài 6:</h3>
    <form method="post">
        <div class="form-group">
            <label for="nInput">Điền số n để kiểm tra xem có phải là số hoàn hảo không?</label>
            <input type="number" class="form-control" id="nInput" value="" name='nameInput' placeholder="Nhập n ...">
        </div>
    </form>
    <button class="btn-primary btn" onclick="getSubmit()">Xem kết quả</button>
    <h3 class="display-3" id="result"></h3>
</div>
<script>
    function getSubmit(){
        const a = document.getElementById('nInput').value;
        let tong = 0;
        console.log(a);
        for(let i=1;i<a;i++){
            if(a%i === 0){
                tong+=i;
                console.log(tong);
            }
        }
        document.getElementById('result').innerText = tong==a?"Đây là số hoàn hảo":"Đây không phải là số hoàn hảo";
    }
</script>