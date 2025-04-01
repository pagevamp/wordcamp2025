lazyContent = () => {
  const classes = {
    remove: "lazy-content-hidden",
    add: "lazy-content-visible",
  };

  const arr = [
    '[animation="text-intro"]',
    '[animation="img-intro"]',
    '[animation="fade-in"]',
  ];

  arr.forEach((elem) => {
    const elemArr = document.querySelectorAll(elem);

    if ("IntersectionObserver" in window) {
      // Lazy loading for image
      let observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            let target = entry.target;
            target.classList.remove(classes.remove);
            target.classList.add(classes.add);

            observer.unobserve(target);
          }
        });
      });

      elemArr.forEach((e) => {
        e.classList.add(classes.remove);
        observer.observe(e);
      });
    }
  });
};

lazyLoad = () => {
  const imgList = document.querySelectorAll(".js-lazy-media");
  if ("IntersectionObserver" in window) {
    // Lazy loading for image
    let lazyImageObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            let img = entry.target;
            if (img.tagName != "VIDEO") {
              img.src = img.src;
              // After image fully loads, remove class.
              img.addEventListener("load", () =>
                img.classList.remove("js-lazy-media")
              );
            } else {
              for (let source in img.children) {
                let videoSource = img.children[source];
                if (
                  typeof videoSource.tagName === "string" &&
                  videoSource.tagName === "SOURCE"
                ) {
                  videoSource.src = videoSource.src;
                  img.addEventListener("loadeddata", () =>
                    img.classList.remove("js-lazy-media")
                  );
                }
              }

              img.load();
            }

            lazyImageObserver.unobserve(img);
          }
        });
      },
      {
        root: document.querySelector(".site-main"),
        rootMargin: "500px",
      }
    );

    imgList.forEach(function (lazyImage) {
      lazyImageObserver.observe(lazyImage);
    });
  }
};

document.addEventListener("DOMContentLoaded", function () {
  lazyContent();
  lazyLoad();
});
