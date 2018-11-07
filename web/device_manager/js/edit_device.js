function refreshPreview() {
    if (document.querySelector('input[name="new_device_type"]:checked').value == 5 || document.querySelector('input[name="new_device_type"]:checked').value == 8) {
        document.getElementById('orientation').style.display = "none";
        document.getElementById('upload').style.display = "initial";
    } else {
        document.getElementById('orientation').style.display = "initial";
        document.getElementById('upload').style.display = "none";
    }

    document.getElementById('hidden_mac').value = document.getElementById('mac_address').value;
    document.getElementById('hidden_device_type').value = document.querySelector('input[name="new_device_type"]:checked').value;

    document.getElementById('preview').src="../get_png.php?mac_address=" + document.getElementById('mac_address').value + "&layout=" + document.querySelector('input[name="new_device_type"]:checked').value;
}

inputs = document.getElementsByTagName('input');
for(i=0; i<inputs.length; i++) {
    inputs[i].addEventListener('change', refreshPreview, false);
}
        
function deleteLists() {
    var elements = document.getElementsByClassName("hidden");
    while (elements.length > 0) {
        elements[0].parentNode.removeChild(elements[0]);
    }
}

var schedulingSystem = document.getElementById("scheduling_system");
schedulingSystem.addEventListener('change', function() {
    var hiddenFields = document.getElementsByClassName("hidden");
    var numHidden = hiddenFields.length;
    for (i = 0; i < numHidden; i++) {
        hiddenFields[0].classList.remove("hidden");
    }
    var resources = document.getElementsByClassName("resource");
    for (i = 0; i < resources.length; i++) {
        if (resources[i].getAttribute('data-pluginid') != schedulingSystem.value) {
            resources[i].classList.add("hidden");
        }
    }
    var getdevicetype = document.getElementsByClassName("getdevicetype");
    for (i = 0; i < getdevicetype.length; i++) {
        if (getdevicetype[i].getAttribute('data-pluginid') != schedulingSystem.value) {
            getdevicetype[i].classList.add("hidden");
        }
    }
});
