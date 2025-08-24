window.addEventListener("load", () => {
  ScrollTrigger.refresh();
});
document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(ScrollTrigger);

  // تأكد من وجود العناصر
  const pinSection = document.querySelector(".animate-black");
  const videosSection = document.querySelector(".min-hScreen1.hiddenLGScrean");
  const swiperMobileSection = document.querySelector(".swiper-mobile-section");

  if (pinSection && (videosSection || swiperMobileSection)) {
    // Pin the section and change background to black
    ScrollTrigger.create({
      trigger: pinSection,
      start: "top top",
      end: () => "+=" + (videosSection ? videosSection.offsetHeight : swiperMobileSection.offsetHeight),
      pin: true,
      pinSpacing: false,
      scrub: true,
      onEnter: () => {
        pinSection.style.background = "#111";
        pinSection.style.zIndex = "10";
      },
      onLeave: () => {
        pinSection.style.background = "";
        pinSection.style.zIndex = "";
      },
      onEnterBack: () => {
        pinSection.style.background = "#111";
        pinSection.style.zIndex = "10";
      },
      onLeaveBack: () => {
        pinSection.style.background = "";
        pinSection.style.zIndex = "";
      },
    });

    // الفيديوهات تطلع فوق السيكشن المثبت
    gsap.to(videosSection, {
      y: () => -pinSection.offsetHeight,
      ease: "none",
      scrollTrigger: {
        trigger: pinSection,
        start: "top top",
        end: () => "+=" + videosSection.offsetHeight,
        scrub: true,
        // pin: true,
      },
    });

    // السويبر الموبايل
    gsap.to(swiperMobileSection, {
      y: () => -pinSection.offsetHeight,
      ease: "none",
      scrollTrigger: {
        trigger: pinSection,
        start: "top top",
        end: () => "+=" + swiperMobileSection.offsetHeight,
        scrub: true,
        // pin: true, // تثبيت السويبر
        // pinSpacing: false, // إزالة المسافة بين السيكشن المثبت والسويبر
      },
    });
  } else {
    console.warn("لم يتم العثور على العناصر المطلوبة. تحقق من الكلاسات.");
  }
});

// mobile effect swiper section


// zoom effect img header 
gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.defaults({
  // Defaults are used by all ScrollTriggers
  toggleActions: "restart pause resume pause", // Scoll effect Forward, Leave, Back, Back Leave
  // markers: true
   // Easaly remove markers for production 
});

const timelineHeader = gsap.timeline({
  scrollTrigger: {
    class: ".header-agency", // Custom label to the marker
    trigger: "#header-zoom", // What element triggers the scroll
    scrub: 0.5, // Add a small delay of scrolling and animation. `true` is direct
    start: "top top", // Start at top of Trigger and at the top of the viewport
    end: "+=100% 50px", // The element is 500px hight and end 50px from the top of the viewport
		pin: true, // Pin the element true or false
  }
});

timelineHeader
  .to(".zoom_effect", {
    scale: 3
  });


