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
      },
    });
  } else {
    console.warn("لم يتم العثور على العناصر المطلوبة. تحقق من الكلاسات.");
  }
});



// zoom effect img header 
document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
        const sections = document.querySelectorAll(".zoom_effect");
        const windowHeight = window.innerHeight;
        const windowTop = window.scrollY;

        sections.forEach(function (section) {
            const sectionTop = section.getBoundingClientRect().top + windowTop;
            const sectionHeight = section.offsetHeight;

            const isVisible =
                sectionTop < windowTop + windowHeight &&
                sectionTop + sectionHeight > windowTop;

            if (isVisible) {
                const scrollPercent =
                    (windowTop + windowHeight - sectionTop) /
                    (windowHeight + sectionHeight);

                // نطاق التكبير: 0.1 إلى 1.5
                const scale = Math.min(0.1 + scrollPercent * 1.4, 1.5);

                section.style.transform = "scale(" + scale + ")";
            } else if (windowTop + windowHeight < sectionTop) {
                // إعادة تعيين إلى مقياس صغير فقط عندما يكون القسم فوق الشاشة
                section.style.transform = "scale(0.1)";
            }
            // إذا كان القسم أسفل الشاشة - لا شيء (احتفظ بأخر مقياس لتجنب الوميض)
        });
    });
});


// // video animiate scrolling playr
// document.addEventListener("DOMContentLoaded", function () {
//     const video = document.getElementById("scrollVideo");
//     const section = document.querySelector(".video_effect");
//     const targetDuration = 5; // seconds

//     video.addEventListener("loadedmetadata", function () {
//         const actualDuration = Math.min(video.duration, targetDuration);

//         window.addEventListener("scroll", function () {
//             const scrollTop = window.scrollY;
//             const sectionTop = section.getBoundingClientRect().top + window.scrollY;
//             const sectionHeight = section.offsetHeight;

//             if (scrollTop >= sectionTop && scrollTop <= sectionTop + sectionHeight) {
//                 const scrollProgress = (scrollTop - sectionTop) / sectionHeight;
//                 const currentTime = scrollProgress * actualDuration;
//                 video.currentTime = currentTime;
//             }
//         });
//     });
// });

