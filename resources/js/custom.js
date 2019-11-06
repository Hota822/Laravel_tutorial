
document.getElementById('follow_button').addEventListener('click', executeFollowButton);

function executeFollowButton() {
    console.log('Enter executeFollowbutton');
    var xhr = new XMLHttpRequest();
    var value = document.activeElement.innerText;
    var followedId = document.getElementById('followed_id').value;
    var followerId = document.getElementById('follower_id').value;
    var token = document.getElementsByName('_token')[0].value
    var targetUrl = 'https://192.168.33.10/relationship/'
    var params = 'follower_id=' + followerId + '&followed_id=' + followedId + '&_token=' + token;
    console.log('value:', value);
    if (value == 'follow') {
	var method = 'POST';
	var classValue = 'btn';
	var operator = 1
	value = 'unfollow';
    } else {
	var method = 'DELETE';
	var classValue ='btn btn-primary';
	var operator = -1
	value = 'follow'
	targetUrl += followedId
    }
    console.log('method:', method);
    //var tar = document.getElementById('api');
    //tar.innerText ='aaaaaaaaaaaaaaaaaaaaaaa'
    //console.log(tar.innerText);
    xhr.onreadystatechange = function(){
	if (xhr.readyState === 4 && xhr.status === 200) {
	    console.log('Enter on ready state change');
	    var string ='<form id="follow_content" method="' + method + '" action="' + targetUrl + '">';
	    string += '<input type="hidden" name="_token"';
	    string += 'value="' + token + '">';
	    string += '<input id="followed_id" type="hidden" name="followed_id"';
	    string += 'value="' + followedId + '">';
	    string += '<input id="follower_id" type="hidden" name="follower_id"';
	    string += 'value="' + followerId + '">';
	    string += '<button id="follow_button" type="button" class="' + classValue + '">' + value + '</button>'
	    $('#follow_content').html(string)
	    document.getElementById('follow_button').addEventListener('click', executeFollowButton);
	    
	    var element = document.getElementById('followers')
	    console.log(element.innerText)
	    element.innerText = parseInt(element.innerText) + operator
	    //var target = document.getElementById('api');
	    //target.innerText = JSON.parse(xhr.responseText);
	}
    }

    //console.log(params);
    formData = new FormData(document.getElementById('follow_content'));
    console.log('targetUrl', targetUrl);
    xhr.open(method, targetUrl);
    xhr.setRequestHeader( 'X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content') );
    xhr.send(formData);
}

