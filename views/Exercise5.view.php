<!-- <?php echo "Bai 4" ?> -->

<div class="container">
   <h3 class="display-3">Bài 5:</h3>
    <form method="post">
        <div class="form-group">
            <label for="nInput">Điền số n để tính n giai thừa</label>
            <input type="number" class="form-control" id="nInput" value="" name='nameInput' placeholder="Nhập n ...">
        </div>
    </form>
    <button class="btn-primary btn" onclick="getSubmit()">Xem kết quả</button>
    <h3 class="display-3" id="result"></h3>
</div>
<script>
    function getSubmit(){
        const a = document.getElementById('nInput').value;
        let giaithua = 1;
        for(let i=1;i<=a;i++){
            giaithua*=i;
        }
        document.getElementById('result').innerText = giaithua;
    }
</script>