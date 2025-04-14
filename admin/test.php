<?// Lấy số lượng đơn hàng mới
$sql_orders = "SELECT COUNT(*) AS total_orders FROM orders";
$result_orders = $conn->query($sql_orders);
$total_orders = $result_orders->fetch_assoc()['total_orders'];

// Lấy tổng doanh thu
$sql_revenue = "SELECT SUM(total_amount) AS total_revenue FROM orders";
$result_revenue = $conn->query($sql_revenue);
$total_revenue = $result_revenue->fetch_assoc()['total_revenue'];

// Lấy số lượng khách hàng mới
$sql_customers = "SELECT COUNT(DISTINCT customer_name) AS total_customers FROM orders";
$result_customers = $conn->query($sql_customers);
$total_customers = $result_customers->fetch_assoc()['total_customers'];

// Lấy dữ liệu đơn hàng gần đây
$sql_recent_orders = "SELECT * FROM orders ORDER BY order_date DESC LIMIT 5";
$result_recent_orders = $conn->query($sql_recent_orders);

?>
<?php while ($row = $result_recent_orders->fetch_assoc()) { ?>
<tr>
    <td>#<?php echo $row['id']; ?></td>
    <td><?php echo $row['order_date']; ?></td>
    <td><?php echo $row['customer_name']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td><?php echo number_format($row['total_amount'], 0, ',', '.'); ?> VND</td>
</tr>
<?php } ?>
