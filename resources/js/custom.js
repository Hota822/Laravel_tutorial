var elements = document.getElementsByName('follow_button');
elements.forEach(function(elm) {
    elm.addEventListener('click', executeFollowButton);
});

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
	var operator = 1;
	var followClass = 'hide';
	var unfollowClass = '';
	value = 'unfollow';
    } else {
	var method = 'DELETE';
	var operator = -1;
	var followClass = '';
	var unfollowClass = 'hide';	
	value = 'follow';
	targetUrl += followedId;
    }
    console.log('method:', method);
    //var tar = document.getElementById('api');
    //tar.innerText ='aaaaaaaaaaaaaaaaaaaaaaa'
    //console.log(tar.innerText);
    xhr.onreadystatechange = function(){
	if (xhr.readyState === 4 && xhr.status === 200) {
	    console.log('Enter on ready state change');

	    console.log('unfollow', unfollowClass);
	    document.getElementById('follow_content').className = followClass;
	    document.getElementById('unfollow_content').className = unfollowClass;

	    var element = document.getElementById('followers');
	    console.log(element.innerText);
	    element.innerText = parseInt(element.innerText) + operator;
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

