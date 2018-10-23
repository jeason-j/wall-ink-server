<?php
function schedulingGetDeviceType($device) {
    $getDeviceType = "";
    $getDeviceType .= "<fieldset class=\"field\">";
        $getDeviceType .= "<legend>Device Type</legend>";
        $getDeviceType .= "<ul>";
            $getDeviceType .= "<li>";
                $getDeviceType .= "<label for=\"1\">4\" Landscape 1, 30 minute refresh cycle</label>";
                $getDeviceType .= "<input type=\"radio\" id=\"type_1\" name=\"new_device_type\" value=\"1\"";
                if ($device['device_type'] == 1) {
                    $getDeviceType .= " checked";
                }
                $getDeviceType .= ">";
            $getDeviceType .= "</li>";
            $getDeviceType .= "<li>";
                $getDeviceType .= "<label for=\"4\">4\" Landscape 2, 30 minute refresh cycle</label>";
                $getDeviceType .= "<input type=\"radio\" id=\"type_4\" name=\"new_device_type\" value=\"4\"";
                if ($device['device_type'] == 4) {
                    $getDeviceType .= " checked";
                }
                $getDeviceType .= ">";
            $getDeviceType .= "</li>";
            $getDeviceType .= "<li>";
                $getDeviceType .= "<label for=\"6\">4\" Landscape 3 (with QR code), 30 minute refresh cycle</label>";
                $getDeviceType .= "<input type=\"radio\" id=\"type_6\" name=\"new_device_type\" value=\"6\"";
                if ($device['device_type'] == 6) {
                    $getDeviceType .= " checked";
                }
                $getDeviceType .= ">";
            $getDeviceType .= "</li>";
            $getDeviceType .= "<li>";
                $getDeviceType .= "<label for=\"9\">4\" Landscape 4 (with QR code), 30 minute refresh cycle</label>";
                $getDeviceType .= "<input type=\"radio\" id=\"type_9\" name=\"new_device_type\" value=\"9\"";
                if ($device['device_type'] == 9) {
                    $getDeviceType .= " checked";
                }
                $getDeviceType .= ">";
            $getDeviceType .= "</li>";
            $getDeviceType .= "<li>";
                $getDeviceType .= "<label for=\"8\">4\" Static Image, 30 minute refresh cycle</label>";
                $getDeviceType .= "<input type=\"radio\" id=\"type_8\" name=\"new_device_type\" value=\"8\"";
                if ($device['device_type'] == 8) {
                    $getDeviceType .= " checked";
                }
                $getDeviceType .= ">";
            $getDeviceType .= "</li>";
            $getDeviceType .= "<li>";
                $getDeviceType .= "<label for=\"0\">7\" Portrait, 15 minute refresh cycle</label>";
                $getDeviceType .= "<input type=\"radio\" id=\"type_0\" name=\"new_device_type\" value=\"0\"";
                if ($device['device_type'] == 0) {
                    $getDeviceType .= " checked";
                }
                $getDeviceType .= ">";
            $getDeviceType .= "</li>";
            $getDeviceType .= "<li>";
                $getDeviceType .= "<label for=\"2\">7\" Landscape 1, 15 minute refresh cycle</label>";
                $getDeviceType .= "<input type=\"radio\" id=\"type_2\" name=\"new_device_type\" value=\"2\"";
                if ($device['device_type'] == 2) {
                    $getDeviceType .= " checked";
                }
                $getDeviceType .= ">";
            $getDeviceType .= "</li>";
            $getDeviceType .= "<li>";
                $getDeviceType .= "<label for=\"3\">7\" Landscape 2, 30 minute refresh cycle</label>";
                $getDeviceType .= "<input type=\"radio\" id=\"type_3\" name=\"new_device_type\" value=\"3\"";
                if ($device['device_type'] == 3) {
                    $getDeviceType .= " checked";
                }
                $getDeviceType .= ">";
            $getDeviceType .= "</li>";
            $getDeviceType .= "<li>";
                $getDeviceType .= "<label for=\"7\">7\" Landscape 3 (with QR code), 30 minute refresh cycle</label>";
                $getDeviceType .= "<input type=\"radio\" id=\"type_7\" name=\"new_device_type\" value=\"7\"";
                if ($device['device_type'] == 7) {
                    $getDeviceType .= " checked";
                }
                $getDeviceType .= ">";
            $getDeviceType .= "</li>";
            $getDeviceType .= "<li>";
                $getDeviceType .= "<label for=\"10\">7\" Landscape 4 (with QR code), 30 minute refresh cycle, better battery</label>";
                $getDeviceType .= "<input type=\"radio\" id=\"type_10\" name=\"new_device_type\" value=\"10\"";
                if ($device['device_type'] == 10) {
                    $getDeviceType .= " checked";
                }
                $getDeviceType .= ">";
            $getDeviceType .= "</li>";
            $getDeviceType .= "<li>";
                $getDeviceType .= "<label for=\"7\">7\" Static Image, 30 minute refresh cycle</label>";
                $getDeviceType .= "<input type=\"radio\" id=\"type_5\" name=\"new_device_type\" value=\"5\"";
                if ($device['device_type'] == 5) {
                    $getDeviceType .= " checked";
                }
                $getDeviceType .= ">";
            $getDeviceType .= "</li>";
            $getDeviceType .= "<li>";
                $getDeviceType .= "<label for=\"7\">7\" Landscape for event spaces</label>";
                $getDeviceType .= "<input type=\"radio\" id=\"type_11\" name=\"new_device_type\" value=\"11\"";
                if ($device['device_type'] == 11) {
                    $getDeviceType .= " checked";
                }
                $getDeviceType .= ">";
            $getDeviceType .= "</li>";
        $getDeviceType .= "</ul>";
    $getDeviceType .= "</fieldset>";
    return $getDeviceType;
}
?>