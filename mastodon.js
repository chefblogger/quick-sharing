function sendtroet() {
    /*
    $.post('mastodon.php');
    return;
    */

    var text = "ich bin demodemo8";

    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", window.location.href + "wp-content/plugins/quick-sharing/mastodon.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 
            console.log(this.responseText); // echo from php
        }       
    };
    xmlhttp.send("msg=" + text);
    


}