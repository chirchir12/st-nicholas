<?php


function clean_text($string){
  $string = trim($string);
  $string = stripslashes($string);
  $string = htmlspecialchars($string);
return $string;
}


function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
  }


  function is_valid_query($results) {
    if (!$results) {
    	return false;
    }
    return true;
}

function set_message($query_results) {
  if(is_valid_query($query_results)) {
      $_SESSION['msg_type'] = 'success';
      $_SESSION['message'] =  'Message send Successfully';
  }else {
      $_SESSION['msg_type'] = 'danger';
      $_SESSION['message'] = 'error while sending message';
  }


}
  

?>