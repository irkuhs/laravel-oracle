<?php
    $XE = '
        (DESCRIPTION =
        (ADDRESS = (PROTOCOL = TCP)(HOST = SHUKRI)(PORT = 1521))
        (CONNECT_DATA =
            (SERVER = DEDICATED)
            (SERVICE_NAME = XE)
        )
    )';

    $conn = oci_connect('BMS', 'password', $XE);

    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    } else {
        $sql = 'SELECT * FROM BMS.EMPLOYEES';
        $stmt = oci_parse($conn, $sql);
        if (!$stmt) {
            $e = oci_error($conn);
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        } else {
            oci_execute($stmt);
            while ($row = oci_fetch_array($stmt, OCI_ASSOC+OCI_RETURN_NULLS)) {
                foreach ($row as $item) {
                    echo $item;
                }
            }
        }
    }

    oci_close($conn);
?>
