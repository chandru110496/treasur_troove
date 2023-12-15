$sql = "SELECT p.product_id, p.product_name,p.product_image1,p.original_price, COUNT(*) AS count
            FROM `order` o
            JOIN product_details p ON o.product_id = p.product_id
            WHERE o.status = 'Completed'
            GROUP BY o.product_id
            HAVING COUNT(*) > 1
            ORDER BY COUNT(*) DESC
            LIMIT 10";
            $result = $db->query($sql);