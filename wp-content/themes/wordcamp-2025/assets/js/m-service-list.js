serviceList = () => {
  const select = document.querySelectorAll(".m-service-list");

  if (select.length === 0) return;

  select.forEach((elem) => {
    const parentElem = elem.querySelector(".m-service-list__slider");
    const childArr = parentElem.querySelectorAll(
      ".m-service-list__single-service"
    );

    childArr.forEach((child) => {
      let i = 0,
        hoverEffect;

      const ul = child.querySelector("ul");
      const totalLi = child.querySelectorAll("li").length;

      const parentHoverClass = "m-service-list__slider--hover";
      const hoverClass = "m-service-list__single-service--hover";
      const resetClass = "m-service-list__single-service--reset-animation";

      // Event to run while hovering on single element
      child.addEventListener("mouseenter", () => {
        parentElem.classList.add(parentHoverClass);
        child.classList.add(hoverClass);
        i++;

        if (i == 1) {
          setTimeout(() => {
            ul.style.setProperty("--active-child", i);
            i++;
          }, 100);
        }

        setTimeout(() => {
          if (i != 1) {
            hoverEffect = setInterval(() => {
              if (child.classList.contains(hoverClass)) {
                if (i == totalLi) {
                  child.classList.add(resetClass);
                  i = 0;
                } else {
                  child.classList.remove(resetClass);
                }
                ul.style.setProperty("--active-child", i);
                i++;
              }
            }, 800);
          }
        }, 100);
      });

      // Reset everything while hover out
      child.addEventListener("mouseleave", () => {
        parentElem.classList.remove(parentHoverClass);
        child.classList.remove(hoverClass, resetClass);
        i = 0;
        ul.style.setProperty("--active-child", i);
        clearInterval(hoverEffect);
      });
    });
  });
};

document.addEventListener("DOMContentLoaded", function () {
  serviceList();
});
