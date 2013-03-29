<?php 
         $app_id = "569950283019196";

         $canvas_page = "http://apps.facebook.com/dudesports/";

         $message = "How much you bench?, well let see on DUDE SPORTS, JOIN ME!!";

         $requests_url = "http://www.facebook.com/dialog/apprequests?app_id=" 
                . $app_id . "&redirect_uri=" . urlencode($canvas_page)
                . "&message=" . $message;

         if (empty($_REQUEST["request_ids"])) {
            echo("<script> top.location.href='" . $requests_url . "'</script>");
         } else {
            echo "Request Ids: ";
            print_r($_REQUEST["request_ids"]);
         }
?>