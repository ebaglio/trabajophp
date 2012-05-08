<table width="900px" border="1">
        <tr>
                <td> PID </td>
                <td> CPU </td>
                <td> Mem </td>
                <td> Start </td>
                <td> Command</td>
        </tr>
        <?php
        exec("ps aux", $psOutput);
        if (count($psOutput) > 0) {
                foreach ($psOutput as $ps) {
                        $ps = preg_split('/ +/', $ps);
                        $pid = $ps[1];
                        $cpu = $ps[2];
                        $mem = $ps[3];
                        $time = $ps[8];
                        $command = $ps[10] . " " . $ps[11];
                        echo "<tr>";
                          echo "<td>" . $pid . "</td>";
                          echo "<td>" . $cpu . "</td>";
                          echo "<td>" . $mem . "</td>";
                          echo "<td>" . $time . "</td>";
                          echo "<td>" . $command . "</td>";
                        echo "</tr>";
                }
        }
        ?>
</table>