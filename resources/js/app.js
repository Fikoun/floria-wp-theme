// Navigation toggle
window.addEventListener('load', function () {
      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      });

      // Smooth scroll to anchors with longer duration
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                  e.preventDefault();
                  const targetElement = document.querySelector(this.getAttribute('href'));
                  const offsetTop = targetElement.getBoundingClientRect().top + window.pageYOffset;
                  
                  window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                  });

                  // Optional: Adjust the duration of the animation
                  const duration = 1000; // Duration in milliseconds
                  const start = window.pageYOffset;
                  const distance = offsetTop - start;
                  let startTime = null;

                  function animation(currentTime) {
                        if (startTime === null) startTime = currentTime;
                        const timeElapsed = currentTime - startTime;
                        const run = ease(timeElapsed, start, distance, duration);
                        window.scrollTo(0, run);
                        if (timeElapsed < duration) requestAnimationFrame(animation);
                  }

                  function ease(t, b, c, d) {
                        t /= d / 2;
                        if (t < 1) return c / 2 * t * t + b;
                        t--;
                        return -c / 2 * (t * (t - 2) - 1) + b;
                  }

                  requestAnimationFrame(animation);
            });
      });
});
