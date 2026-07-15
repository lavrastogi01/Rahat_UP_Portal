const swiperV5 = new Swiper(".mySwiperV5", {
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".next-v5",
    prevEl: ".prev-v5",
  },
});
// End Gallery Slider

// =========Counter section Start===================

// counter increament once when visible
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && !entry.target.dataset.done) {
        const counter = entry.target;
        let endValue = parseFloat(counter.textContent);
        let startValue = 0;
        counter.dataset.done = "true";
        let updating = setInterval(() => {
          startValue += endValue / 200;
          counter.textContent = startValue.toFixed(0);
          if (startValue >= endValue) {
            counter.textContent = endValue;
            clearInterval(updating);
            observer.unobserve(counter);
            console.log("end");
          }
        }, 10);
      }
    });
  },
  { threshold: 1 },
);
document
  .querySelectorAll(".counter")
  .forEach((counter) => observer.observe(counter));

// =========Counter Section End=====================

//====================== Current Date & Time Top Bar Start=================================
// function updateDateTime() {
//   const now = new Date();

//   const options = {
//     weekday: "long",
//     year: "numeric",
//     month: "long",
//     day: "numeric",
//     hour: "numeric",
//     minute: "numeric",
//     second: "numeric",
//     hour12: true,
//   };

//   const formatted = now.toLocaleString("en-US", options);

//   document.getElementById("currentDateTime").innerHTML = formatted;
// }

// setInterval(updateDateTime, 1000);
// updateDateTime();

//====================== Current Date & Time Top Bar End=================================

//====================== increase (A+), decrease (A-), and reset (A) Start ==================

const elements = document.querySelectorAll(
  "p, span, h1, h2, h3, h4, h5, h6, a, li",
);

let defaultSize = 16;
let currentSize = defaultSize;

const increaseBtn = document.getElementById("increase");
const decreaseBtn = document.getElementById("decrease");
const resetBtn = document.getElementById("reset");

if (increaseBtn) {
  increaseBtn.addEventListener("click", function (e) {
    e.preventDefault();
    elements.forEach((el) => {
      let size = parseFloat(window.getComputedStyle(el).fontSize);
      el.style.fontSize = size + 2 + "px";
    });
  });
}

if (decreaseBtn) {
  decreaseBtn.addEventListener("click", function (e) {
    e.preventDefault();
    elements.forEach((el) => {
      let size = parseFloat(window.getComputedStyle(el).fontSize);
      if (size > 10) {
        el.style.fontSize = size - 2 + "px";
      }
    });
  });
}

if (resetBtn) {
  resetBtn.addEventListener("click", function (e) {
    e.preventDefault();
    elements.forEach((el) => {
      el.style.fontSize = "";
    });
  });
}
//====================== increase (A+), decrease (A-), and reset (A) End===========>

// key acessbale js
document.querySelectorAll(".tab").forEach((tab) => {
  tab.addEventListener("keydown", function (e) {
    if (e.key === "Enter" || e.key === " ") {
      e.preventDefault();
      this.click();
    }
  });
});

// menu active color start
