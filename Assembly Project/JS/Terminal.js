var showText = function (target, message, index, interval) {   
    if (index < message.length) {
      $(target).append(message[index++]);
      setTimeout(function () { showText(target, message, index, interval); }, interval);
    }
  }
  $(function () {
  
    showText("#msg", "Terminal", 0, 100);
    showText("#msg1", "Welcome...", 0, 100);
  });
   $(document).ready(function () {
              setTimeout("$('#fname').focus();", 500);
  });
  
  function checkforblank(){
    if (document.getElementById('fname').value == "") {
      alert('Please Enter your Instructions');
      return false;
    }
  
  }
  
  var textarea = document.querySelector('textarea');
  
  textarea.addEventListener('keydown', autosize);
  
               
  function autosize(){
    var el = this;
    setTimeout(function(){
      el.style.cssText = 'height:0; padding:0';
      el.style.cssText = 'height:' + el.scrollHeight + 'px';
    },0);
  }
  $(function() {
      $('textarea').on('keypress', function(e) {
          if (e.which == 32)
              return false;
      });
  });
  setTimeout(function(){
     $("textarea").text("LOADING TERMINAL");
  },1000); 
  
  setTimeout(function(){
     $("textarea").text("STAND BY");
  },1000); 
  
  
  setTimeout(function(){
     $("textarea").text("SUCCESSFUL");
  },500); 
  
  
  setTimeout(function(){
     $("textarea").text("");
  },7000); 
  
  
  
  
  
  