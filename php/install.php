<?php
   if( $_POST["api_key"] && trim($_POST['api_key']) !== "") {
      echo "Authorization: Bearer ". $_POST['api_key'];
      
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.digitalocean.com/v2/droplets');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"name\":\"wp-server\",\"region\":\"nyc3\",\"size\":\"s-1vcpu-1gb\",\"image\":\"ubuntu-18-04-x64\",\"ssh_keys\":null,\"backups\":false,\"ipv6\":true,\"user_data\": \"#cloud-config\n\nruncmd:\n  - curl https://raw.githubusercontent.com/lamazingco/digitalocean-wordpress-install-script/master/wordpress.sh | sh\",\"private_networking\":null,\"volumes\": null,\"tags\":[\"web\"]}");
        curl_setopt($ch, CURLOPT_POST, 1);

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = "Authorization: Bearer ". $_POST['api_key'];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        echo 'Result: ' . $result;
        curl_close ($ch);

      exit();
   }
?>