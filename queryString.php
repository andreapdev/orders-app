<?php
    $queryString="SELECT \n"
    . "	orders.id_order AS idOrder, \n"
    . "	orders.date_add AS dateStamp, \n"
    . "    CONCAT(address.firstname, \" \", address.lastname) AS fullName,\n"
    . "    CONCAT(address.address1, \" \", address.address2, \" \", address.city) AS fullAddress,\n"
    . "    country_lang.name AS country,\n"
    . "    GROUP_CONCAT(order_detail.product_name ) AS products,\n"
    . "    order_state_lang.name AS orderState\n"
    . "\n"
    . "FROM orders\n"
    . "JOIN address ON orders.id_customer= address.id_customer\n"
    . "JOIN country_lang ON orders.id_customer=address.id_customer AND address.id_country=country_lang.id_country\n"
    . "JOIN order_detail ON orders.id_order=order_detail.id_order \n"
    . "JOIN order_state_lang ON orders.current_state=order_state_lang.id_order_state\n"
    . "GROUP BY orders.id_order \n"
    . "ORDER BY orders.date_add DESC;";

    return $queryString;
?>