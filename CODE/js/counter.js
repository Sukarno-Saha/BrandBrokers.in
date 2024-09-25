
        // Function to trigger count animation
        function startCountUp(element) {
            let startValue = 0;
            let endValue = parseInt(element.getAttribute("data-val"));
            let duration = Math.floor(4000 / endValue);

            let counter = setInterval(function () {
                startValue += 1;
                element.textContent = startValue + "+";
                if (startValue === endValue) {
                    clearInterval(counter);
                }
            }, duration);
        }

        // Use Intersection Observer to trigger animation on scroll
        let observerOptions = {
            root: null, // Use viewport as root
            threshold: 0.5 // Trigger when 50% of the element is visible
        };

        let valueDisplays = document.querySelectorAll(".num");

        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startCountUp(entry.target);
                    observer.unobserve(entry.target); // Stop observing once the animation is triggered
                }
            });
        }, observerOptions);

        valueDisplays.forEach((num) => {
            observer.observe(num); // Start observing each counter
        });