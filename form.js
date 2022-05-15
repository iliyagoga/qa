document.addEventListener('DOMContentLoaded', function() {
    var input = document.querySelector('input');

    input.addEventListener('keyup', function(e) {
        if (e.key == 'Enter') {
            let sessions = atob(sessionStorage.getItem('reqiure')).split('<?/?>');
            for (let session of sessions) {
                if (input.value == session) {
                    let parent = document.createElement('div');
                    let page = document.createElement('p');
                    parent.classList.add('parent');
                    parent.classList.add('page');
                    page.innerHTML = 'Успешно';
                    parent.append(page);
                    document.querySelector('.middlee').append(parent);
                    sessionStorage.removeItem('reqiure');
                    timer;
                    setTimeout(function() { parent.remove() }, 5000);
                    break
                } else {
                    let parent = document.createElement('div');
                    let page = document.createElement('p');
                    parent.classList.add('parent_2');
                    parent.classList.add('page_2');
                    page.innerHTML = 'Неправильно! Посмотрите, где вы ошиблись';
                    parent.append(page);
                    document.querySelector('.middlee').append(parent);
                    setTimeout(function() { parent.remove() }, 5000);
                    break;
                }
            }

        }
    })

})