// modal
const btnVideo = document.querySelector('#btn-video');
const btnJoin = document.querySelectorAll('#btn-join');

const btnCloseModalVideo = document.querySelector('#btn-close-modal-video');
const btnCloseModalForm = document.querySelector('#btn-close-modal-form');

const modalYoutube = document.querySelector('#modal-youtube');
const modalFormCourse = document.querySelector('#modal-form-course');

const selectedCourse = document.querySelectorAll('.modal-form #course option')

const body = document.querySelector('body');

// modal-youtube
if (btnVideo != null) {
    btnVideo.addEventListener("click", () => {
        modalYoutube.style.visibility = "visible";
        body.style.overflow = "hidden"
    })
}

modalYoutube.addEventListener("click", () => {
    modalYoutube.style.visibility = "hidden";
    body.style.overflow = "visible";
})

btnCloseModalVideo.addEventListener("click", () => {
    modalYoutube.style.visibility = "hidden";
    body.style.overflow = "visible";
})

// modal-form
if (btnJoin != null) {
    btnJoin.forEach(el => {
        el.addEventListener("click", () => {
            let id_product = el.value

            modalFormCourse.style.visibility = "visible";
            body.style.overflow = "hidden";

            selectedCourse.forEach(selected => {
                selected.removeAttribute("selected");
                if (selected.id == id_product) {
                    selected.setAttribute("selected", "");
                }
            })
        })
    });
}

btnCloseModalForm.addEventListener("click", () => {
    modalFormCourse.style.visibility = "hidden";
    body.style.overflow = "visible";
})

