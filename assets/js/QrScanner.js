
const video = document.createElement('video');

navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
    .then((stream) => {
        video.srcObject = stream;
        video.setAttribute('playsinline', true);
        video.play();
        requestAnimationFrame(scanQRCode);
    });

function scanQRCode() {
    const canvas = document.getElementById('canvas');
    const context = canvas.getContext('2d');
    canvas.height = video.videoHeight;
    canvas.width = video.videoWidth;
    context.drawImage(video, 0, 0, canvas.width, canvas.height);

    const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
    const code = jsQR(imageData.data, canvas.width, canvas.height);

    if (code) {
        alert('QR Code trouvé: ' + code.data);
        // Tu peux rediriger vers l'URL du QR code ou l'afficher
    } else {
        requestAnimationFrame(scanQRCode);
    }
}

