

<!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>
		
		<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
<!-- font-awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
		<!-- Optional JavaScript -->
    <script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
		<script src="https://js.pusher.com/4.4/pusher.min.js"></script>
		
    <style>
		
	/*pesan*/

.fixed-positioning {
  position: fixed;
  bottom: 0;
  right: 0;
  z-index: 1;
}

.chat-box {
  width: 320px;
/*   border-radius: 3px; */
  box-shadow: -5px 10px 50px -10px rgba(0,0,0,0.4);
  background: #fff;
  overflow: hidden;
}

.chat-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  color: #fff;
  background: #00a1ff;
}

.chat-header button {
  color:#fff;
  background: transparent;
  padding: 3px;
  border: 1px solid #fff;
  border-radius: 3px;
  cursor:pointer;
}

.chat-content {
  padding: 0 15px;
  max-height: 0;
  overflow: hidden;
  transition: 1s ease-in-out;
}

.chat-content.active {
  padding: 15px 15px;
}

.chat-title {
  margin-bottom: 15px;
  text-align: center;
}

.chat-form {
  padding: 15px;
}

.chat-box input,
.chat-box textarea,
.chat-box label,
.chat-box button[type=submit] {
  display: block;
  width: 100%
}

.chat-box input,
.chat-box textarea {
  padding: 10px 15px;
  border-radius: 3px;
  border: 1px solid #b7b5b5;
  margin-bottom: 15px;
}

.chat-box textarea {
  min-height: 50px;
}

.chat-box label {
  color: #928f8f;
  font-size: 13px;
  margin-bottom: 2px;
}

.chat-box label span {
  color: #f00;
}

.chat-box button[type=submit] {
  -webkit-appearance: none;
  border-radius: 2px;
  background-clip: padding-box;
  background-color: #007bff!important;
  box-shadow: 0 2px 0 rgba(0,0,0,.1), inset 0 -3px 0 rgba(129,163,48,.3);
  font-size: 14px;
  color: #fff;
  padding: 9px 6px 11px;
  width: 100%;
  border: 0;
  cursor: pointer;
}
		</style>
	</head>
	<!--Coded With Love By Mutiullah Samim-->
	<body>
		




 <!-- pesan -->
    <!-- <div class="chat-box fixed-positioning">
      <div class="chat-header">
        <span class="ml-5"><i class="fa fa-comment" style="padding-right: 10px;"></i>Call Center</span>
        <button><i class="fa fa-phone"></i></button>
      </div>
      <div class="chat-content">
        <div class="container">
		<div class="row">
			<div class="col-md-12 m-auto">
			 <label class="font-weight-bold" style="font-size: 15px;">Jika Aplikasi ini di buka di website</label>
				<a href="https://web.whatsapp.com/send?phone=6285235149501"><div class="bg-primary p-1 text-center" style="border-radius: 10px;"><i class="fab fa-whatsapp mr-2" style="color: white; font-size: 30px;"></i><span class="text-white" style="font-size: 25px; font-family: verdana;">Rega</span> </div></a>
        <br>
        <label class="font-weight-bold" style="font-size: 15px;">Jika Aplikasi ini di buka di android</label>
        <a href="https://wa.me/6285235149501"><div class="bg-primary p-1 text-center" style="border-radius: 10px;"><i class="fab fa-whatsapp mr-2" style="color: white; font-size: 30px;"></i><span class="text-white" style="font-size: 25px; font-family: verdana;">Rega</span> </div></a>
			</div>	
		</div>
	</div>
      </div>
    </div>   -->
   <!-- akhir pesan  -->


   <div class="chat-box fixed-positioning">
    <div class="chat-header">
      <span class="ml-5"><i class="fa fa-comment" style="padding-right: 10px;"></i>Call Center</span>
      <button><i class="fa fa-phone"></i></button>
    </div>
    <div class="chat-content">
      <div class="container">
        <div class="row">
          <div class="col-md-12 m-auto">
           <form action="<?= base_url(); ?>home" method="post">
             <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
               <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="pesan">Pesan</label>
              <textarea class="form-control" name="pesan" id="pesan" rows="3" placeholder="Masukkan Pesan"></textarea>
               <?= form_error('pesan', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <?php if ( isset ($this->session->userdata['masuk_in']) ) : ?>
            <button class="btn btn-block btn-primary" type="submit">Kirim<i class="far fa-paper-plane pl-2"></i></button>
            <?php else : ?>
              <a href="<?= base_url(); ?>daftar/login"><button class="btn btn-block btn-primary" type="button">Kirim<i class="far fa-paper-plane pl-2"></i></button></a>
             <?php endif; ?> 
          </form>
        </div>  
      </div>
    </div>
  </div>
</div>  


   <script>
let chatBox = document.querySelector(".chat-box");
let toggleButton = document.querySelector(".chat-header button")
let chatContent = document.querySelector(".chat-content");

toggleButton.addEventListener('click', () => {
  if (chatContent.style.maxHeight){
    chatContent.style.maxHeight = null;
    chatContent.classList.remove('active');
    toggleButton.innerText = "Show"
  } else {
    chatContent.style.maxHeight = (chatContent.scrollHeight + 30) + "px";
    chatContent.classList.add('active');
    toggleButton.innerText = "Hide"
  } 
})

// Outside click
window.addEventListener('click', function(e){   
  if (!chatBox.contains(e.target)){
    chatContent.style.maxHeight = null;
    chatContent.classList.remove('active');
    toggleButton.innerText = "Show"
  }
});

(() => {
  chatContent.style.maxHeight = (chatContent.scrollHeight + 30) + "px";
  chatContent.classList.add('active');
  toggleButton.innerText = "Hide"
})()
   </script>

   	<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('c0c540bee9077515786a', {
    	cluster: 'ap1',
    	forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
    	alert(JSON.stringify(data));
    	addData(data);
    });

    function addData(data) {
    	var str = '';
    	for (var z in data) {
    		str += '<p><span>'+ data[ z ].name +'</span><span>'+ data[ z ].message +'</span></p>';
    	}

    	$('#pesan').html(str);
    }
</script>

	<script>
		function store(){
			var value = {
				name: $('#nama').val(),
				message: $('#message').val()
			}

			$.ajax({
				url: '<?= base_url(); ?>/chat1/store',
				type: 'POST',
				data: value,
				dataType: 'JSON'
			});
		}
	</script>
	</body>
</html>
