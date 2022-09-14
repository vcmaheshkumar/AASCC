let scanner = new Instascan.Scanner({ video: document.getElementById('scanArea') });
Instascan.Camera.getCameras().then(function(cameras) {
    if (cameras.length > 0) {
        scanner.start(cameras[0]);
    } else {
        alert('Cam device not detected');
    }
}).catch(function(e) {
    console.error(e);
});

scanner.addListener('scan', function(c) {
    document.getElementById('detector').value = c;
    document.forms[0].submit();
});