/* 
Created by: Kenrick Beckett

Name: Chat Engine
*/

var instanse = false;
var state;
var mes;
var file;

function Chat () {
    this.update = updateChat;
    this.send = sendChat;
	this.getState = getStateOfChat;
}

//gets the state of the chat
function getStateOfChat(){
	if(!instanse){
		 instanse = true;
		 $.ajax({
			   type: "POST",
			   url: "process.php",
			   data: {  
			   			'function': 'getState',
						'file': file
						},
			   dataType: "json",
			
			   success: function(data){
				   state = data.state;
				   instanse = false;
			   },
			});
	}	 
}

//Updates the chat
function updateChat(){
	
	if(!instanse){
		instanse = true;
	    $.ajax({
			type: "POST",
			url: "process.php",
			data: {  
				'function': 'update',
				'state': state,
				'file': file
			},
			dataType: "json",
			success: function(data){
				if(data.text){
					document.getElementById("alphaP").innerHTML = data.text[0];
					document.getElementById("betaP").innerHTML = data.text[1];
					document.getElementById("gammaP").innerHTML = data.text[2];							  
				}
				document.getElementById('chat-area').scrollTop = document.getElementById('chat-area').scrollHeight;
				instanse = false;
				state = data.state;
			},
		});
	}
	else {
		setTimeout(updateChat, 150);
	}
}

//send the message
function sendChat(alpha, beta, gamma)
{       
    $.ajax({
		type: "POST",
		url: "process.php",
		data: {  
		   	'function': 'send',
			'alpha': alpha,
			'beta': beta,
			'gamma' : gamma,
			'file': file
		},
		dataType: "json",
		success: function(data){
		},
	});
}
