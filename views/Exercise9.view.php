<!-- <?php echo "Bai 6" ?> -->

<div class="container">
   <h3 class="display-3">Bài 9:</h3>
    <form method="post">
        <div class="form-group">
            <label for="nInput">Điền số giây để chuyển định dạng:</label>
            <input type="number" class="form-control" id="nInput" value="" name='nameInput' placeholder="Nhập n ...">
        </div>
    </form>
    <button class="btn-primary btn" onclick="getSubmit()">Chuyển đổi</button>
    <h3 class="display-3" id="result"></h3>
</div>
<script>
    function getSubmit(){
        const a = document.getElementById('nInput').value;
        let date = new Date(null);
        date.setSeconds(a);
        let result = date.toISOString().substr(11,8);
        document.getElementById('result').innerText = result;
    }
</script>