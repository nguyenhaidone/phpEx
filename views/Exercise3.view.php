<!-- <?php echo "Bai 3" ?> -->
<div class="container">
    <h3 class="display-3">Bài 3:</h3>
    <form method="get">
        <div class="form-group">
            <label for="nInput">Điền số n:</label>
            <input type="number" class="form-control" id="nInput" name='nameInput' placeholder="Nhập n ...">
        </div>
        <div class="form-group">
            <label for="xInput">Điền số x:</label>
            <input type="number" class="form-control" id="xInput" placeholder="Nhập x ...">
        </div>
    </form>
    <button class="btn btn-primary" id="SubmitBtn" onclick="getSubmit()">Submit</button>
    <h3 class="display-3" id="result"></h3>
    <script>
        function getSubmit(){
            const n = document.getElementById('nInput').value;
            const x = document.getElementById('xInput').value;
            let total = 0
            for (let index = 1; index <= n; index++) {
                let factorials = 1;
                for (let i = 1; i <= index; i++) {
                    factorials*=i;                
                }
                total+=Math.pow(x,index)/factorials;
            }
            document.getElementById('result').innerText = `Kết quả là ${total}`;
        }
    </script>
</div>