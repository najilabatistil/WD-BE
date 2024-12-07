var projects = [
  {
    title: "Activity 8",
    description: "A website showcasing my 'Islands of Personality,' with all content retrieved and displayed from a database.",
    thumbnail: "A08.png",
    link: "A08/"
  }
]

function createProjectCard() {
  for (var i = 0; i < projects.length; i++) {
    var project = projects[i];
    var container = document.getElementById("projectContainer");

    container.innerHTML += 
    `
      <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center my-3 wow animate__animated animate__fadeInUp" data-wow-delay="`+ (0.3 * i) + `s"> 
        <div class="card h-100">
          <img src="homepage/img/thumbnails/` + project.thumbnail + `" class="card-img-top" style="border-bottom: 2px solid black">
          <div class="card-body d-flex flex-column align-items-center my-auto">
            <div class="row mb-3">
              <h2 class="card-title">` + project.title + `</h2>
              <p class="card-text">` + project.description + `</p>
            </div>
            <div class="row mt-auto w-100">
              <a href="` + project.link + `" target="_blank" class="btn page-btn mb-2">
                Visit <i class="bi bi-box-arrow-up-right"></i>
              </a>
              <a href="https://github.com/najilabatistil/WD-BE/tree/main/` + project.link + `" target="_blank" class="btn page-btn">
                View Code
              </a>
            </div>
          </div>
        </div>
      </div>
    `
  }
}

createProjectCard();