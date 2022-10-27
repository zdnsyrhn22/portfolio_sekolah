// search

const contentSection = document.querySelector(".content-section");
const courses = document.querySelectorAll(".card-course");
const searchInput = document.querySelector(".search-input");

searchInput.addEventListener('keyup', () => {

    courses.forEach(course => {
        console.log(course)
        let title = course.querySelector('.card-title').innerText.toLowerCase();
        if(title.indexOf(searchInput.value) > -1){
            course.style.display = "";
        }else{
            course.style.display = "none";
        }
    });

})
