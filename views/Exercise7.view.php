<!-- <?php echo "Bai 6" ?> -->

<div class="container">
   <h3 class="display-3">Bài 7:</h3>
    <form method="post">
        <div class="form-group">
            <label for="nInput">Điền số n để kiểm tra xem tất cả các ước số nguyên dương</label>
            <input type="number" class="form-control" id="nInput" value="" name='nameInput' placeholder="Nhập n ...">
        </div>
    </form>
    <button class="btn-primary btn" onclick="getSubmit()">Xem kết quả</button>
    <h3 class="display-3" id="result"></h3>
</div>
<script>
    function getSubmit(){
        const a = document.getElementById('nInput').value;
        let arr = [];
        console.log(a);
        for(let i=1;i<a;i++){
            if(a%i === 0){
                arr.push(i);
                console.log(arr);
            }
        }
        document.getElementById('result').innerText = arr;
    }
</script>