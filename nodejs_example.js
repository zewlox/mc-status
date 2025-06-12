import fetch from 'node-fetch';

const server = 'mc.hypixel.net';
const url = `https://mcstatus.zewlox.com.tr/api/status/${encodeURIComponent(server)}`;

fetch(url)
  .then(res => {
    if (!res.ok) throw new Error("Sunucu bilgisi alınamadı");
    return res.json();
  })
  .then(data => {
    if (data.success) {
      console.log(`Sunucu: ${data.data.server.address}`);
      console.log(`Durum: ${data.data.status.online ? "Online ✅" : "Offline ❌"}`);
      console.log(`Oyuncular: ${data.data.status.players.online} / ${data.data.status.players.max}`);
      console.log(`Açıklama: ${data.data.status.description}`);
    } else {
      console.log("Sunucu bilgisi alınamadı.");
    }
  })
  .catch(err => {
    console.error("Hata:", err.message);
  });
