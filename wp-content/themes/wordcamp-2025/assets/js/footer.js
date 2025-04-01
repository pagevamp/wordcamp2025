updateTime = () => {
  const timeElements = document.querySelectorAll(".timezone");

  timeElements.forEach((element) => {
    const timeZone = element.id;
    const timeString = new Intl.DateTimeFormat("en-US", {
      timeZone,
      hour: "2-digit",
      minute: "2-digit",
      hour12: false, // 24-hour format
    }).format(new Date());

    element.textContent = timeString;
  });
};

setInterval(updateTime, 1000);

document.addEventListener("DOMContentLoaded", function () {
  updateTime();
});
