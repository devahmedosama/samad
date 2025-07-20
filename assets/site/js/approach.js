
// button container
const buttons = document.querySelectorAll('.btnFixedBar');

buttons.forEach(button => {
  button.addEventListener('click', () => {
    // Remove active class
    buttons.forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');

    const targetId = button.dataset.target;
    document.getElementById(targetId).scrollIntoView({ behavior: 'smooth' });
  });
});

///////////////////////

  window.addEventListener('scroll', function() {
        const scrollY = window.scrollY; // مقدار التمرير العمودي
        
        if (scrollY >= 300 && scrollY < 2000) {
            // تغيير اللون عند التمرير 100 بكسل
            document.body.style.backgroundColor = 'black';
            document.body.style.color = 'white';
        } else if (scrollY >= 2000) {
            // تغيير اللون عند التمرير 500 بكسل
            document.body.style.backgroundColor = 'white';
            document.body.style.color = 'black';
        } else {
            // إعادة الألوان إلى الوضع الافتراضي
            document.body.style.backgroundColor = 'white';
            document.body.style.color = 'black';
        }
    });

    // hidden and show fixed bar 
    function hideElementOnFooterScroll() {
        const element = document.getElementById('myIdFixedBar');
        const footer = document.querySelector('footer');

        window.addEventListener('scroll', function() {
            // تحقق ما إذا كنا قد وصلنا إلى الفوتر
            const footerTop = footer.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (footerTop <= windowHeight) {
                element.classList.add('fixedBarHidden'); // إخفاء العنصر
            } else {
                element.classList.remove('fixedBarHidden'); // إظهار العنصر
            }
        });
    }
    // استدعاء الدالة
    hideElementOnFooterScroll();
    

