document.getElementById('btn').addEventListener('click', handler)
const form = document.getElementById('form')
const errors = document.getElementById('errors')
const success = document.getElementById('success')
async function handler() {

    const formData = new URLSearchParams(new FormData(form)).toString();
    const options = {
        method: 'post',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'content-type': 'application/x-www-form-urlencoded'
        },
    };

    const res = await fetch('/handler.php', options)
    const err = await res.json()

    if(err?.length) {
        let str = ''
        err.forEach(item => {
            str += `<li>${item}</li>`
        })
        errors.innerHTML = `<ul>${str}</ul>`
    }
    else {
        form.style.display = 'none'
        success.innerHTML = '<div>Ви успішно зареєструвалися!</div>'
    }
}
