function displayRadioValue() {
    var ele = document.getElementsByName('inlineRadioOptions');

    for(i = 0; i < ele.length; i++) {
        if(ele[i].checked) {
            var val = ele[i].value;
            if (val == "dtonly") {
                hidePositionTrades();
                hideSwingTrades();
                showDayTrades();
            } else if (val == "stonly") {
                hidePositionTrades();
                hideDayTrades();
                showSwingTrades();
            } else if (val == "ptonly") {
                hideDayTrades();
                hideSwingTrades();
                showPositionTrades();
            } else {
                showDayTrades();
                showPositionTrades();
                showSwingTrades();
            }
        }
    }
}

function hideDayTrades() {
    var hTags = document.getElementsByTagName("h1");
    var searchText = "Day Strategy";
    var found;

    for (var i = 0; i < hTags.length; i++) {
        if (hTags[i].textContent == searchText) {
            found = hTags[i];
            var closestElement = found.closest('.card');
            $(closestElement).hide();
        }
    }
}

function showDayTrades() {
    var hTags = document.getElementsByTagName("h1");
    var searchText = "Day Strategy";
    var found;

    for (var i = 0; i < hTags.length; i++) {
        if (hTags[i].textContent == searchText) {
            found = hTags[i];
            var closestElement = found.closest('.card');
            $(closestElement).show();
        }
    }
}

function hidePositionTrades() {
    var hTags = document.getElementsByTagName("h1");
    var searchText = "Position Strategy";
    var found;

    for (var i = 0; i < hTags.length; i++) {
        if (hTags[i].textContent == searchText) {
            found = hTags[i];
            var closestElement = found.closest('.card');
            $(closestElement).hide();
        }
    }
}

function showPositionTrades() {
    var hTags = document.getElementsByTagName("h1");
    var searchText = "Position Strategy";
    var found;

    for (var i = 0; i < hTags.length; i++) {
        if (hTags[i].textContent == searchText) {
            found = hTags[i];
            var closestElement = found.closest('.card');
            $(closestElement).show();
        }
    }
}

function hideSwingTrades() {
    var hTags = document.getElementsByTagName("h1");
    var searchText = "Swing Strategy";
    var found;

    for (var i = 0; i < hTags.length; i++) {
        if (hTags[i].textContent == searchText) {
            found = hTags[i];
            var closestElement = found.closest('.card');
            $(closestElement).hide();
        }
    }
}

function showSwingTrades() {
    var hTags = document.getElementsByTagName("h1");
    var searchText = "Swing Strategy";
    var found;

    for (var i = 0; i < hTags.length; i++) {
        if (hTags[i].textContent == searchText) {
            found = hTags[i];
            var closestElement = found.closest('.card');
            $(closestElement).show();
        }
    }
}
