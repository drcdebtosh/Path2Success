// Credential response handler function
function handleCredentialResponse(response){
    // Post JWT token to server-side
    fetch("auth_init.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ request_type:'user_auth', credential: response.credential }),
    })
    .then(response => response.json())
    .then(data => {
        if(data.status == 1){
            let responsePayload = data.pdata;

            // Display the user account data
            let profileHTML = '<h3>Welcome '+responsePayload.given_name+'! <a href="javascript:void(0);" onclick="signOut('+responsePayload.sub+');">Sign out</a></h3>';
            profileHTML += '<img src="'+responsePayload.picture+'"/><p><b>Auth ID: </b>'+responsePayload.sub+'</p><p><b>Name: </b>'+responsePayload.name+'</p><p><b>Email: </b>'+responsePayload.email+'</p>';
            document.getElementsByClassName("pro-data")[0].innerHTML = profileHTML;
            
            document.querySelector("#btnWrap").classList.add("hidden");
            document.querySelector(".pro-data").classList.remove("hidden");
        }
    })
    .catch(console.error);
}

// Sign out the user
function signOut(authID) {
    document.getElementsByClassName("pro-data")[0].innerHTML = '';
    document.querySelector("#btnWrap").classList.remove("hidden");
    document.querySelector(".pro-data").classList.add("hidden");
}    