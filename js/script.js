// Ensure you match your main page script slider configuration to return 5 items for full desktops:
function getVisibleItemsCount() {
  const width = window.innerWidth;
  if (width > 1200) return 5; // Updated to return 5 items setup
  if (width > 992) return 4;
  if (width > 768) return 3;
  if (width > 480) return 2;
  return 1;
}

document.addEventListener("DOMContentLoaded", () => {
  // Data Feed Repository
  const circularsLiveFeed = [
    {
      text: "Terms of Reference (ToR) for Hiring a Weather Officer in Relief Commissioner Office, Government of Uttar Pradesh...",
      fileLink: "img/Weather Officer ToR (1).pdf",
      fileSize: "6.45 MB",
      date: "04 July 2026",
    },
    {
      text: "EXPRESSION OF INTEREST (EOI) FOR IMPLEMENTATION OF INNOVATION, TECHNOLOGY, COMMUNITY LEADERSHIP PROGRAMS IN UP...",
      fileLink: "img/EoI_for_Academic_Institutions_2nd_advert (1).pdf",
      fileSize: "1.31 MB",
      date: "09 July 2026",
    },
    {
      text: "Guidelines for Streamlining Local District Disaster Management Sub-Committees & State Emergency Mitigation Funds...",
      fileLink: "#",
      fileSize: "920 KB",
      date: "18 September 2026",
    },
  ];

  // Scroller compilation template loop
  const scrollerGridTarget = document.getElementById("liveScrollerGridPool");
  if (scrollerGridTarget) {
    let compiledHTML = "";
    circularsLiveFeed.forEach((item) => {
      compiledHTML += `
                    <div class="ns-item">
                        <div class="ns-dot"></div>
                        <div>
                            <div class="ns-text">${item.text}</div>
                            <div class="ns-file mt-2">
                                <a href="${item.fileLink}" target="_blank">Download PDF</a>
                                <span class="text-muted small">(${item.fileSize}, ${item.date})</span>
                            </div>
                        </div>
                    </div>
                `;
    });
    scrollerGridTarget.innerHTML = compiledHTML;

    const poolParent = document.getElementById("autoScrollerContainer");
    const cloneNode = scrollerGridTarget.cloneNode(true);
    poolParent.appendChild(cloneNode);

    let speed = 0.6,
      scrollPos = 0,
      isPaused = false;
    function autoScrollEngine() {
      if (!isPaused) {
        scrollPos += speed;
        const dynamicHeight = scrollerGridTarget.offsetHeight || 310;
        if (scrollPos >= dynamicHeight) {
          scrollPos = 0;
        }
        poolParent.scrollTop = scrollPos;
      }
      requestAnimationFrame(autoScrollEngine);
    }
    poolParent.addEventListener("mouseenter", () => (isPaused = true));
    poolParent.addEventListener("mouseleave", () => (isPaused = false));
    poolParent.addEventListener("touchstart", () => (isPaused = true), {
      passive: true,
    });
    poolParent.addEventListener("touchend", () => (isPaused = false), {
      passive: true,
    });
    setTimeout(() => {
      requestAnimationFrame(autoScrollEngine);
    }, 100);
  }

  // Hardware accelerated dynamic counter system configuration
  const counterFields = document.querySelectorAll(".counter");
  if (counterFields.length > 0) {
    const runtimeObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const element = entry.target;
            const targetVal =
              parseFloat(element.getAttribute("data-target-value")) || 1500.0;

            let currentVal = 0;
            const steps = 60;
            const increment = targetVal / steps;
            const isDecimal = targetVal % 1 !== 0;

            const triggerCount = () => {
              currentVal += increment;
              if (currentVal < targetVal) {
                element.innerText = isDecimal
                  ? currentVal.toFixed(2)
                  : Math.floor(currentVal).toLocaleString("en-IN");
                setTimeout(triggerCount, 16);
              } else {
                element.innerText = isDecimal
                  ? targetVal.toFixed(2)
                  : targetVal.toLocaleString("en-IN");
              }
            };
            triggerCount();
            runtimeObserver.unobserve(element);
          }
        });
      },
      { threshold: 0.1 },
    );
    counterFields.forEach((field) => runtimeObserver.observe(field));
  }
});

// Pure JS Dynamic Gallery Content Filter Engine
document.querySelectorAll(".gallery-tab-btn").forEach((btn) => {
  btn.addEventListener("click", () => {
    // Toggle active tab class
    document
      .querySelectorAll(".gallery-tab-btn")
      .forEach((t) => t.classList.remove("active"));
    btn.classList.add("active");

    const filterValue = btn.getAttribute("data-filter");
    const items = document.querySelectorAll(".gallery-item");

    items.forEach((item) => {
      if (filterValue === "all") {
        item.style.display = "block";
      } else {
        if (item.getAttribute("data-type") === filterValue) {
          item.style.display = "block";
        } else {
          item.style.display = "none";
        }
      }
    });
  });
});

// Auto-hide play overlay when video starts playing
document.querySelectorAll(".gallery-video-box video").forEach((video) => {
  const overlay = video.parentElement.querySelector(".video-play-overlay");
  video.addEventListener("play", () => {
    overlay.style.opacity = "0";
  });
  video.addEventListener("pause", () => {
    overlay.style.opacity = "1";
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const mainHomeView = document.getElementById("weatherMainHomeSection");
  const detailedDashboardView = document.getElementById(
    "weatherDetailedDashboard",
  );
  // const triggerBtn = document.getElementById('triggerMapDashboard');
  const closeBtn = document.getElementById("closeMapDashboard");

  const upLatitude = 26.8467;
  const upLongitude = 80.9462;

  let homeMap, leftDashboardMap, rightDashboardMap;


  if (closeBtn) {
    closeBtn.addEventListener("click", () => {
      // detailedDashboardView.style.display = 'none';
      // mainHomeView.style.display = 'block';
      setTimeout(() => {
        homeMap.invalidateSize();
      }, 50);
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  // 3. Dynamic Glass Tabs Switcher Logic
  const tabs = document.querySelectorAll(".tab");
  const contents = document.querySelectorAll(".tab-content-box");
  if (tabs.length > 0 && contents.length > 0) {
    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        tabs.forEach((t) => t.classList.remove("active"));
        contents.forEach((c) => c.classList.remove("active"));
        tab.classList.add("active");
        const target = document.getElementById(tab.getAttribute("data-tab"));
        if (target) target.classList.add("active");
      });
    });
  }

  // 4. Circular Announcements Auto-Scroller
  const scrollContainer = document.getElementById("autoScrollerContainer");
  const scrollWrapper = document.getElementById("scrollVelocityWrapper");
  if (scrollContainer && scrollWrapper) {
    const cloneNode = scrollWrapper.cloneNode(true);
    scrollContainer.appendChild(cloneNode);
    let speed = 0.6,
      scrollPos = 0,
      isPaused = false;

    function autoScrollEngine() {
      if (!isPaused) {
        scrollPos += speed;
        const dynamicHeight = scrollWrapper.offsetHeight || 290;
        if (scrollPos >= dynamicHeight) {
          scrollPos = 0;
        }
        scrollContainer.scrollTop = scrollPos;
      }
      requestAnimationFrame(autoScrollEngine);
    }
    scrollContainer.addEventListener("mouseenter", () => (isPaused = true));
    scrollContainer.addEventListener("mouseleave", () => (isPaused = false));
    scrollContainer.addEventListener("touchstart", () => (isPaused = true), {
      passive: true,
    });
    scrollContainer.addEventListener("touchend", () => (isPaused = false), {
      passive: true,
    });
    setTimeout(() => {
      requestAnimationFrame(autoScrollEngine);
    }, 100);
  }

  // 5. Infinite Continuous Disaster Slider Carousel
  const track = document.getElementById("disasterTrack");
  let items = document.querySelectorAll(".dis-item");
  const nextBtn = document.querySelector(".next");
  const prevBtn = document.querySelector(".prev");

  if (track && items.length > 0) {
    const originalLength = items.length;
    items.forEach((item) => {
      let clone = item.cloneNode(true);
      track.appendChild(clone);
    });
    const allItems = document.querySelectorAll(".dis-item");
    let index = 0;

    function getVisibleItemsCount() {
      const width = window.innerWidth;
      if (width > 992) return 4;
      if (width > 768) return 3;
      if (width > 480) return 2;
      return 1;
    }

    function slide() {
      const itemWidth = allItems[0].getBoundingClientRect().width;
      track.style.transform = `translateX(-${index * itemWidth}px)`;
    }

    function nextSlide() {
      index++;
      if (index > allItems.length - getVisibleItemsCount()) {
        track.style.transition = "none";
        index = 0;
        slide();
        setTimeout(() => {
          track.style.transition =
            "transform 0.5s cubic-bezier(0.25, 1, 0.5, 1)";
          index++;
          slide();
        }, 20);
      } else {
        slide();
      }
    }

    function prevSlide() {
      index--;
      if (index < 0) {
        track.style.transition = "none";
        index = originalLength;
        slide();
        setTimeout(() => {
          track.style.transition =
            "transform 0.5s cubic-bezier(0.25, 1, 0.5, 1)";
          index--;
          slide();
        }, 20);
      } else {
        slide();
      }
    }

    nextBtn.addEventListener("click", nextSlide);
    prevBtn.addEventListener("click", prevSlide);
    let autoPlay = setInterval(nextSlide, 3000);

    track.parentElement.addEventListener("mouseenter", () =>
      clearInterval(autoPlay),
    );
    track.parentElement.addEventListener("mouseleave", () => {
      clearInterval(autoPlay);
      autoPlay = setInterval(nextSlide, 3000);
    });

    window.addEventListener("resize", () => {
      track.style.transition = "none";
      slide();
      setTimeout(() => {
        track.style.transition = "transform 0.5s cubic-bezier(0.25, 1, 0.5, 1)";
      }, 50);
    });

    track.addEventListener("click", (e) => {
      const clickedItem = e.target.closest(".dis-item");
      if (clickedItem) {
        const title = clickedItem.getAttribute("data-title");
        const url = clickedItem.getAttribute("data-link");
        alert(
          `आप राहत सेवा: "${title}" पर क्लिक कर चुके हैं।\nयह आपको फ़ाइल "${url}" पर रीडायरेक्ट करेगा.`,
        );
      }
    });
  }

  // 6. Intersection Dashboard Counters Engine
  const counters = document.querySelectorAll(".counter");
  if (counters.length > 0) {
    const counterSpeed = 60;
    const startCounting = (counter) => {
      const target = parseFloat(counter.getAttribute("data-target")) || 0;
      let current = 0;
      const isDecimal = target % 1 !== 0;
      const increment = target / counterSpeed;

      const updateCount = () => {
        current += increment;
        if (current < target) {
          if (isDecimal) {
            counter.innerText = current.toFixed(1);
          } else {
            counter.innerText = Math.floor(current).toLocaleString("en-IN");
          }
          setTimeout(updateCount, 20);
        } else {
          counter.innerText = isDecimal
            ? target.toFixed(2)
            : target.toLocaleString("en-IN");
        }
      };
      updateCount();
    };

    const statsObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            startCounting(entry.target);
            statsObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.2 },
    );
    counters.forEach((counter) => statsObserver.observe(counter));
  }

  // Announcement card triggers
  document.querySelectorAll(".announcement-card").forEach((card) => {
    card.addEventListener("click", () => {
      const link = card.getAttribute("data-link");
      if (link) window.open(link, "_blank");
    });
  });
});

let homeMap;
let fullMap;

document
  .getElementById("triggerMapDashboard")
  .addEventListener("click", function () {
    const modal = new bootstrap.Modal(document.getElementById("mapModal"));

    modal.show();

    setTimeout(() => {
      if (!fullMap) {
        fullMap = L.map("fullScreenMap");

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png").addTo(
          fullMap,
        );

        fetch("up.geojson")
          .then((res) => res.json())
          .then((data) => {
            const upLayer = L.geoJSON(data, {
              style: {
                color: "#ff5722",
                weight: 4,
                fillOpacity: 0.2,
              },
            }).addTo(fullMap);

            fullMap.fitBounds(upLayer.getBounds());
          });
      } else {
        fullMap.invalidateSize();
      }
    }, 300);
  });

document.addEventListener("DOMContentLoaded", () => {
  const hero = document.getElementById("heroSlider");

  if (!hero) return;

  const images = [
    "img/ban1.jpg",
    "img/ban2.jpg",
    "img/ban3.jpg"
  ];

  let current = 0;

  function showSlide() {
    hero.style.backgroundImage = `url("${images[current]}")`;
  }

  document.querySelector(".hero-next")?.addEventListener("click", () => {
    current = (current + 1) % images.length;
    showSlide();
  });

  document.querySelector(".hero-prev")?.addEventListener("click", () => {
    current = (current - 1 + images.length) % images.length;
    showSlide();
  });

  showSlide();

  setInterval(() => {
    current = (current + 1) % images.length;
    showSlide();
  }, 5000);
});