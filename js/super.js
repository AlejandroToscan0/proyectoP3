/* 1 */
function getParameterByName(name, url) {
    if (!url) {
        url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, '\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return "";
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
/* 2 */
function changeUsername(e) {
    document.getElementById("changeUserForm").submit();
}

/* 3 */

window.onload = function () {
    window.location.hash = "no-back-button";
    window.location.hash = "Again-No-button";

    window.onhashchange = function () {
        window.location.hash = "no-back-button";
    }
}

