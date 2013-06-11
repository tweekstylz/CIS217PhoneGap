<?php
/**
 * Created by JetBrains PhpStorm.
 * User: joshuan7559
 * Date: 5/20/13
 * Time: 10:02 AM
 * To change this template use File | Settings | File Templates.
 */

    print_r( $_GET );
    $qty = $_GET['qty'];
    $pids = $_GET['pid'];

    print_r( $qty );
    print_r( $pids );

    // Process some of the order here

    $form = <<<END_OF_FORM

    <form method=post action="purchase.php?">
        Name: <input type="text" name="name" /><br/>
        Address: <input type="text" name="address" /><br/>

        <input type="submit" nam="submit" value="Submit Order" />
    </form>
END_OF_FORM;

    echo json_encode( $form );
