let html = document.documentElement;
let cursor = document.querySelector(".cursor");
let menu = {
  nav: {
    active: "header--navigation-active",
    hide: "header--navigation-hide",
  },
  contact: {
    active: "header--contact-active",
    hide: "header--contact-hide",
    list: {
      active: "header--contact-list-active",
      hide: "header--contact-list-hide",
    },
    form: {
      active: "header--contact-form-active",
      hide: "header--contact-form-hide",
    },
    call: {
      active: "header--contact-call-active",
      hide: "header--contact-call-hide",
    },
  },
};
let i = 0;

const formInput = () => {
  const formGroups = document.querySelectorAll(".header .form-group");

  formGroups.forEach((formGroup) => {
    const input = formGroup.querySelector("input, textarea, select"); // Find the input, textarea, or select element
    const label = formGroup.querySelector("label"); // Find the label element
    input.parentNode.insertBefore(label, input.nextSibling); // Move the label inside the input's parent (the span)
    input.setAttribute('autocomplete', 'off');
  });
};

header = () => {
  let select = document.querySelector(".header");
  let btnGroup = select.querySelector(".header__btns");
  let menuBtns = select.querySelectorAll(".header__btns > *");
  let getInTouchBtn = document.querySelectorAll(".js-contact-btn");
  let contactBtns = select.querySelectorAll(".header__mega-menu-contact-item");
  let backBtn = select.querySelectorAll(".header__back-btn");
  let overlay = select.querySelector(".header__overlay");

  menuBtns = [...menuBtns, ...getInTouchBtn];
  contactBtns = [...contactBtns, ...backBtn];

  menuBtns.forEach((e) => {
    e.addEventListener("click", () => {
      !html.classList.contains("header--active") ? (i = 0) : "";

      // Increasing i's value by 1.
      i++;

      // To check which button is being clicked.
      let btnType = e.classList.contains("header__menu-btn")
        ? "menu"
        : e.classList.contains("header__contact-btn")
        ? "contact"
        : "";

      btnGroup.classList.add("u-pointer-none");
      setTimeout(() => btnGroup.classList.remove("u-pointer-none"), 1000);

      /* 
				Cases to check if the mega menu is active or not.
				1: false
				2: true
			*/
      switch (i) {
        case 1:
          html.classList.add("header--active");
          cursor.classList.add("cursor--close");

          switch (btnType) {
            case "menu":
              html.classList.add(menu.nav.active, menu.contact.hide);
              break;
            case "contact":
              html.classList.add(
                menu.contact.active,
                menu.contact.list.active,
                menu.contact.form.hide,
                menu.contact.call.hide,
                menu.nav.hide
              );
              break;
          }
          break;
        case 2:
          /* 
						Cases depending on the button being clicked.
						If same button is clicked twice, hide mega menu.
						If different button is clicked, toggle between the menu types.
					*/
          switch (btnType) {
            case "menu":
              if (html.classList.contains(menu.nav.active)) {
                html.classList.remove("header--active", menu.nav.active);
                cursor.classList.remove("cursor--close");
                setTimeout(() => html.classList.remove(menu.contact.hide), 800);

                i = 0; // Next click, i == 1
              } else if (html.classList.contains(menu.contact.active)) {
                html.classList.remove(
                  menu.contact.active,
                  menu.contact.list.active,
                  menu.contact.form.active,
                  menu.contact.call.active
                );
                setTimeout(() => {
                  html.classList.add(menu.contact.hide);
                  html.classList.remove(
                    menu.nav.hide,
                    menu.contact.list.hide,
                    menu.contact.form.hide,
                    menu.contact.call.hide
                  );
                  setTimeout(() => html.classList.add(menu.nav.active), 10); // Adding setTimeout to remove hide first.
                }, 800);

                i = 1; // Next click, i == 2
              }
              break;
            case "contact":
              if (html.classList.contains(menu.contact.active)) {
                html.classList.remove(
                  "header--active",
                  menu.contact.active,
                  menu.contact.list.active,
                  menu.contact.form.active,
                  menu.contact.call.active
                );
                cursor.classList.remove("cursor--close");
                setTimeout(
                  () =>
                    html.classList.remove(
                      menu.nav.hide,
                      menu.contact.form.hide,
                      menu.contact.call.hide,
                      menu.contact.list.hide
                    ),
                  800
                );

                i = 0; // Next click, i == 1
              } else if (html.classList.contains(menu.nav.active)) {
                html.classList.remove(menu.nav.active);
                setTimeout(() => {
                  html.classList.remove(menu.contact.hide);
                  html.classList.add(menu.nav.hide);
                  setTimeout(
                    () =>
                      html.classList.add(
                        menu.contact.active,
                        menu.contact.list.active,
                        menu.contact.form.hide,
                        menu.contact.call.hide
                      ),
                    10
                  ); // Adding setTimeout to remove hide first.
                }, 800);

                i = 1; // Next click, i == 2
              }
              break;
          }
          break;
      }
    });
  });

  contactBtns.forEach((e) => {
    e.addEventListener("click", () => {
      let btnType = e.classList.contains("header__contact-call-btn")
        ? "call"
        : e.classList.contains("header__contact-msg-btn")
        ? "msg"
        : e.classList.contains("header__back-btn")
        ? "back"
        : "";

      switch (btnType) {
        case "msg":
          html.querySelector(".header__contact-form form").reset();
          html
            .querySelector(".header__contact-form form")
            .classList.remove("spam", "sent");
          html
            .querySelector(".header__contact-form form")
            .setAttribute("data-status", "init");

          html.classList.remove(
            menu.contact.list.active,
            menu.contact.form.hide
          );
          setTimeout(() => {
            html.classList.add(
              menu.contact.list.hide,
              menu.contact.call.hide,
              menu.contact.form.active
            );
          }, 800);
          break;
        case "back":
          html.classList.remove(
            menu.contact.call.active,
            menu.contact.form.active
          );

          setTimeout(() => {
            html.classList.remove(menu.contact.list.hide);
            setTimeout(() => {
              html.classList.add(
                menu.contact.list.active,
                menu.contact.call.hide,
                menu.contact.form.hide
              );
            }, 10);
          }, 800);
          break;
      }
    });
  });

  overlay.addEventListener("click", () => {
    html.classList.remove(
      "header--active",
      menu.contact.active,
      menu.contact.list.active,
      menu.contact.form.active,
      menu.contact.call.active,
      menu.nav.active
    );
    cursor.classList.remove("cursor--close");
    setTimeout(
      () =>
        html.classList.remove(
          menu.nav.hide,
          menu.contact.hide,
          menu.contact.form.hide,
          menu.contact.call.hide,
          menu.contact.list.hide
        ),
      800
    );
  });

  formInput();
};

contactBtn = () => {
  const select = document.querySelectorAll(".js-contact-btn");
  select.forEach((e) => {
    e.addEventListener("click", () => {
      html.classList.add(
        "header--active",
        menu.contact.active,
        menu.contact.list.active,
        menu.contact.form.hide,
        menu.contact.call.hide,
        menu.nav.hide
      );
      cursor.classList.add("cursor--close");

      i = 1;
    });
  });
};

mouseMove = () => {
  const myCursor = document.querySelector(".cursor");
  const selector = document.querySelector(".header__container");
  if (!myCursor) return;

  let mouseX = 0,
    mouseY = 0;

  // Update cursor position on mouse move
  window.addEventListener("mousemove", function (event) {
    myCursor.style.transform = `translate(${event.clientX}px, ${event.clientY}px)`;
    mouseX = event.clientX;
    mouseY = event.clientY;
  });

  // Add cursor--hide when entering .header__container
  selector.addEventListener("mouseenter", function () {
    myCursor.classList.add("cursor--hide");
  });

  // Remove cursor--hide when leaving .header__container
  selector.addEventListener("mouseleave", function () {
    myCursor.classList.remove("cursor--hide");
  });
};

document.addEventListener("DOMContentLoaded", function () {
  header();
  contactBtn();
  mouseMove();
});
