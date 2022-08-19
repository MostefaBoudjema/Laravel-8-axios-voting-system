const forms = document.querySelectorAll('#form-js');
// console.log('form = ',forms);
forms.forEach(form => {
    form.addEventListener('change', function (e) {
        // e.preventDefault();
        // console.log('e = ',e);
        // console.log('select!!!',form);
    });
});

forms.forEach(form => {
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const url = this.getAttribute('action');
        const token = document.querySelector('meta[name="csrf-token"]').content;
        const ripId = this.querySelector('#rip-id-js').value;
        const count = this.querySelector('#count-js');
        const jaime = this.querySelector('#jaime');

        fetch(url, {
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token
            },
            method: 'post',
            body: JSON.stringify({
                id: ripId
            })
        }).then(response => {
            response.json().then(data => {
                count.innerHTML = data.count + ' Like(s)';
                jaime.innerHTML = data.message;
            })
        }).catch(error => {
            console.log(error)
        });

    });
});
