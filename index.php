<?php
uni.request({
url: ‘http://openvpn.com’,
method: ‘GET’,
success: res => {
  echo res;
}
})

?>
