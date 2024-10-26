
    $(document).ready(function(){
        $('#personForm').on('submit', function(e){
            e.preventDefault();
        })

        let dem = 0;
        if (dem === 0) {
            loadtable(1);
            total(1);
            pagination();
            dem++;
        }
    })
    
    // load dữ liệu từ database vào bảng
    function loadtable(pagenumber){
        $.ajax({
            url:'data.php',
            method:'GET',
            data:{'page':pagenumber},
            success:function(response){
                $("#content").html(response);
                // Loại bỏ action tất cả các thẻ a trong class page-item
                $(".page-item a").removeClass('bg-blue-100 opacity-90 text-gray font-bold');
                // Thêm action cho trang hiện tại
                $(".page-item[data-page='" 
                    + pagenumber + 
                    "'] a").addClass('bg-blue-100 opacity-90 text-gray font-bold');
            }
        })
    }

    // Hiển thị tổng số bản ghi
    function total(totalnumber){
        $.ajax({
            url:'total.php',
            method: 'GET',
            data:{'page':totalnumber},
            success:function(response){
                $('#total').html(response);
            }
        })
    }
    
    // Phân trang
    function pagination(){
        $.ajax({
            url:'pagination.php',
            method: 'GET',
            success:function(response){
                $('#pagi').html(response);
                // Mặc định trang 1 khi mở ứng dụng
                $(".page-item[data-page='1'] a").addClass('bg-blue-100 opacity-90 text-gray font-bold');
            }
        })
    }

    // Thêm dữ liệu từ form vào database
    function addmember(){
        const ckEmail = check_valid();
        const ckName = check_name();

        if(ckEmail || ckName){
            // xử lý
        }else{
            $.ajax({
                url:'addmember.php',
                method: 'POST',
                data: $('#personForm').serialize(),
                success:function(response){
                    $('#success').html(response);
    
                    // reset sau khi submit thành công 
                    $('#personForm')[0].reset();
                }
            })
        }
    }
        

    //reset form
    function huyForm(){
        document.getElementById('err-name').innerText = '';
        document.getElementById('err-birth').innerText = '';
        document.getElementById('err-sex').innerText = '';
        document.getElementById('err-email').innerText = '';
    }
    
    function keychange(){
        const nameInput = document.getElementById('ipname');
        const emailInput = document.getElementById('ipemail');
        const birthInput = document.getElementById('ipbirth');
        const sexRadio = document.getElementsByName('sex');

            // Kiểm tra input text
        if (nameInput.value.trim() !== "" || emailInput.value.trim() !== "" || birthInput.value !== "") {
            if(nameInput.value.trim() !== ""){
                document.getElementById('err-name').innerText = '';
            }
            if(emailInput.value.trim() !== ""){
                document.getElementById('err-email').innerText = '';
            }
            if(birthInput.value.trim() !== ""){
                document.getElementById('err-birth').innerText = '';
            }
            // errorMessage.style.display = 'none'; // Ẩn span nếu input không rỗng
            // } else {
            // errorMessage.style.display = 'block'; // Hiện span nếu input vẫn rỗng
        }

        // Kiểm tra radio buttons
        let radioCheck = false;
        for (let i = 0; i < sexRadio.length; i++) {
            if (sexRadio[i].checked) {
                radioCheck = true; // Nếu có radio được chọn
                break;
            }
        }

        if (radioCheck) {
            document.getElementById('err-sex').innerText = '';
        }
    }

    // check email có @ và bị khoảng trắng không.
    function check_valid(){
        let ipEmail = document.getElementById('ipemail').value.trim();
        let check = false;
        let check1 = false;
        const space = /\s/;

        if(ipEmail != ""){
            for(let i=0; i < ipEmail.length; i++){
                if(ipEmail[i] == "@"){
                    check = true;
                    break;
                }
            }
            if(!space.test(ipEmail)){
                check1 = true
            }
            if(!check || !check1){
                document.getElementById('err-email').innerText = 'Không hợp lệ';
                return true;
            }
        }
        return false;
    }

    // check name
    function check_name(){
        let ipName = document.getElementById('ipname').value.trim();
        let check1 = false;
        let check2 = false;
        const kyTuDB = /[!@#$%^&*(),.?":{}|<>]/;
        const number = /\d/;

        if(ipName != ""){
            if(!kyTuDB.test(ipName)){
                check1 = true;
            }
            if(!number.test(ipName)){
                check2 = true;
            }
            if(!check1 || !check2){
                document.getElementById('err-name').innerText = 'Không hợp lệ';
                return true;
            }
        }
        return false;
    }

