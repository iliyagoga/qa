document.addEventListener('DOMContentLoaded', function() {
    var trs = document.querySelectorAll('tr');
    count = 0;
    for (let i = 0; i < trs.length; i++) {
        count++;
        if (count % 2 != 0) {
            trs[i].style.background = 'rgb(195, 248, 255)';
            trs[i].style.opacity = 0.8;
        } else {
            trs[i].style.background = 'white';
            trs[i].style.opacity = 0.8;
        }
    }
    var middlee = document.querySelector('.middlee figure');
    middlee.style.width = '80%';
    middlee.style.margin = 'auto';

    middlee.style.paddingTop = "10px"
    middlee.style.paddingBottom = "5px"
})