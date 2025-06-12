<?php
$server = "mc.hypixel.net"; // değiştirilebilir
$url = "https://mcstatus.zewlox.com.tr/api/status/" . urlencode($server);

$response = @file_get_contents($url);
if ($response === FALSE) {
    die("API'den veri alınamadı.");
}

$data = json_decode($response, true);
if (!$data['success']) {
    die("Sunucu bilgisi alınamadı.");
}

// Bilgileri ekrana yazdır
echo "<h2>Sunucu: " . htmlspecialchars($data['data']['server']['address']) . "</h2>";
echo "<p>Durum: " . ($data['data']['status']['online'] ? "Online ✅" : "Offline ❌") . "</p>";
echo "<p>Oyuncular: " . $data['data']['status']['players']['online'] . " / " . $data['data']['status']['players']['max'] . "</p>";
echo "<p>Açıklama: " . htmlspecialchars($data['data']['status']['description']) . "</p>";
echo "<img src='https://mcstatus.zewlox.com.tr/api/icon/" . urlencode($server) . "' alt='Sunucu İkonu' />";
?>
