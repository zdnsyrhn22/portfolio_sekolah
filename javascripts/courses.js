const contentSection = document.querySelector(".content-section");
const courses = document.querySelectorAll(".card-course");
const searchInput = document.querySelector(".search-input");

let pagination = document.querySelectorAll(".pagination .page-item");

let pages = 1;
let itemsPerPage = 4;
let offset = (pages - 1) * itemsPerPage;

let pageItem = Math.ceil(courses.length / itemsPerPage);

// searchInput
searchInput.addEventListener("keyup", () => {

  // set pagination on pagenumber 1
    pagination.forEach(element => {
        element.querySelector('.page-link').classList.remove('active');
    });

    pagination[1].querySelector('.page-link').classList.add('active');

  courses.forEach((course) => {
    let title = course.querySelector(".card-title").innerText.toLowerCase();
    if (title.indexOf(searchInput.value) > -1) {
      course.style.display = "";
    } else {
      course.style.display = "none";
    }
  });
});

//setup show item in page
courses.forEach((course) => {
    course.style.display = "none";
  });
  
  for (let i = offset; i < offset + itemsPerPage; i++) {
    const course = courses[i];
    if (course != undefined) {
      window.scrollTo();
      course.style.display = "";
    }
  }



// create element page-item
for (let i = 1; i <= pageItem; i++) {
  const elementPageItem = document.createElement("li");
  elementPageItem.classList.add("page-item");

  const btnPageItem = document.createElement("button");
  btnPageItem.classList.add("btn");
  btnPageItem.classList.add("page-link");
  btnPageItem.value = i;
  btnPageItem.innerText = i;

  if (i == 1) {
    btnPageItem.classList.add("active");
  }

  elementPageItem.appendChild(btnPageItem);
  pagination[0].appendChild(elementPageItem);
}


pagination = document.querySelectorAll(".pagination .page-item");

for (let i = 0; i < pagination.length; i++) {
  pagination[i].querySelector(".page-link").addEventListener("click", () => {

    pagination.forEach(element => {
        element.querySelector('.page-link').classList.remove('active');
    });

    pagination[i].querySelector('.page-link').classList.add('active');

    courses.forEach((course) => {
      course.style.display = "none";
    });

    pages = pagination[i].querySelector(".page-link").value;

    if (pages === "first") {
        pages = 1;
    } 

    if(pages === "last"){
        pages = pagination[pagination.length - 2].querySelector(".page-link").value;;
    }

    offset = (pages - 1) * itemsPerPage;

    //
    for (let i = offset; i < offset + itemsPerPage; i++) {
      const course = courses[i];
      if (course != undefined) {
        window.scrollTo();
        course.style.display = "";
      }
    }
  });
}
