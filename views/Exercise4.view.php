<!-- <?php echo "Bai 4" ?> -->

<div class="container">
   <h3 class="display-3">Bài 4:</h3>
    <form method="get">
        <div class="form-group">
            <label for="nInput">Điền số n:</label>
            <input type="number" onkeypress="handleKeyPress(event)" class="form-control" id="nInput" name='nameInput' placeholder="Nhập n ...">
        </div>
    </form>
</div>
<script>
    function handleKeyPress(event) {
        if(event.keyCode==48){
            alert("DỪNG");
        };
    }
</script>