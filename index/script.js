var projects = [
  {
    title: "Activity 8",
    description: "My Islands of Personality",
    thumbnail: "a08.png",
    link: "A08/"
  }
]

function createProjectCard() {
  for (var i = 0; i < projects.length; i++) {
    var project = projects[i];
    var container = document.getElementById("projectContainer");

    container.innerHTML += `
      <div class="col-12 col-sm-12 col-md-6 col-lg-4 my-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s"> 
        <div class="card h-100">
          <img src="index/img/thumbnails/` + project.thumbnail + `" class="card-img-top" style="border-bottom: 2px solid black">
          <div class="card-body d-flex flex-column">
            <h2>` + project.title + `</h2>
            <p class="card-text">` + project.description + `</p>
            <a href="` + project.link + `" target="_blank" class="mt-auto btn page-btn mb-3">Visit <i class="bi bi-box-arrow-up-right"></i></a>
            <a href="https://github.com/najilabatistil/WD-BE/tree/main/` + project.link + `" target="_blank" class="mt-auto btn page-btn">View Code <i class="bi bi-box-arrow-up-right"></i></a>
          </div>
        </div>
      </div>`
  }
}

createProjectCard();