function updateStatus() {
    const status = document.getElementById('status');

    if (navigator.onLine) {
        status.innerHTML = '<i class="ti-signal text-success"></i>';
    } else {
        status.innerHTML = '<i class="ti-na text-danger"></i>';
    }
}

updateStatus();