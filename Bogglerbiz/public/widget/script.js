$(function(){
$(".openChat").click(function () {
  $('#sidebar_secondary').addClass('popup-box-on');
  $('.oChatcont').addClass('hide');
    });
  
    $(".closeChat").click(function () {
      $('#sidebar_secondary').removeClass('popup-box-on');
      $('.oChatcont').removeClass('hide');
    });
}) 


// disableChat();
  $(document).on('submit', '#chatForm', function(event){
      event.preventDefault();
      var msg = $('#msg').val();
      clearMsg();
      sendMsg(msg);
  });   

  $(document).on('click', '#sendMsg', function(event){
      event.preventDefault();
      var msg = $('#msg').val();
      clearMsg();
      sendMsg(msg);
  });   

  function sendMsg(msg){
    var Myimg   = "dasd";
    var botPic  = "sada";
    var aimodel = $("#aimodel").val();
    var endpoint = $('#chatForm').attr('action');
    if (msg.length > 2) {
        appendMsg(msg, 'chat_message_right'); 
        $.ajax({
         url: endpoint,
         method:"POST",
         data: {msg:msg, aimodel:aimodel}, 
         beforeSend: function() {
                setTyping();
                disableChat();        
          }
        })
        .done(function(data) {
            removeTyping();
            var obj = JSON.parse(data);
            if (obj.status == 200 || obj.status == 300) {
                appendMsg(''+obj.msg+'', 'left');  
            }else if(obj.status == 201){
                 $(".chat_message_right:last").remove();
                  alert(obj.msg);
            }else{
                 $(".chat_message_right:last").remove();
              
                  alert(obj.msg);              
            }
            
            enableChat();
                 
          })
         .fail(function(jqXHR, ajaxOptions, thrownError) {
                 $(".chat_message_right:last").remove();
                 removeTyping();
                  alert('Something went wrong to communicate with the OpenAI server.');
                 enableChat();
         });
         
    }else{
      alert('The message length must be greater than 2 characters.');
    }
  }



  function appendMsg(msg, className){
      var chatContainer = $("#chatList");

      if (className == 'chat_message_right') {
        chatContainer.append('<div class="chat_message_wrapper chat_message_right">'+
                                '<ul class="chat_message">'+
                                    '<li>'+
                                        '<p>'+msg+'</p>'+
                                    '</li>'+
                                '</ul>'+
                            '</div>');  
      }else{
        
        chatContainer.append('<div class="chat_message_wrapper">'+
                                '<div class="chat_user_avatar">'+
                                    '<img src="http://127.0.0.1:8000/img/session.webp" class="md-user-image">'+
                                '</div>'+
                                '<ul class="chat_message">'+
                                    '<li>'+
                                        '<p>'+msg+'</p>'+
                                    '</li>'+
                                '</ul>'+
                            '</div>');
      }
      
      goDown();
  }
  
  function clearMsg(){
    $("#msg").val('');
  }

function setTyping(){
    $("#chatList").append(' <div id="typing" class="typingIndicatorContainer chat-box-wrapper"><div class="typingIndicatorBubble"><div class="typingIndicatorBubbleDot"></div><div class="typingIndicatorBubbleDot"></div><div class="typingIndicatorBubbleDot"></div>'+
'</div></div>')
        goDown();
  }

  function removeTyping(){
    $("#typing").remove();
      goDown();
  }

  function disableChat(){
    $("#msg").attr('readonly', 'true');
    $("#sendMsg").attr('disabled', 'true');
  }

  function enableChat(){
    $("#msg").removeAttr('readonly');
    $("#sendMsg").removeAttr('disabled');
  }

  function currTime(){
    var today = new Date();
    var options = {
      day: 'numeric',
      month: 'short',
      year: 'numeric',
      hour: 'numeric',
      minute: 'numeric',
      hour12: true
    };
    return today.toLocaleString('en-US', options);
  }

function goDown(){
var id = "chat";
 const element = $(`#${id}`);
    element.animate({
        scrollTop: element.prop("scrollHeight")
    }, 500);
}

$(document).on('click', '.selectModel', function(){
  var model = $(this).attr('mtype');
  $("#aimodel").val(model);
  if (model == 'text') {
    $('.selectModel').removeClass('active');
    $(this).addClass('active');
    $("#msg").attr('placeholder', 'Type query to ask');
  }else{
    $('.selectModel').removeClass('active');
    $(this).addClass('active');
    $("#msg").attr('placeholder', 'Describe the image you\'d like me to create');
  }
})