document.addEventListener("DOMContentLoaded", function () {
    let currentTestimonialGroup = 0;
    const testimonialGroups = document.querySelectorAll(".testimonial-group");
    const dots = document.querySelectorAll(".dot");

    console.log("Dots:", dots);
    console.log("Testimonial Groups:", testimonialGroups);

    function showTestimonial(index) {
        console.log("Show Testimonial:", index);
        testimonialGroups.forEach((group, i) => {
            group.style.display = i === index ? "flex" : "none";
        });
        dots.forEach((dot, i) => {
            dot.classList.toggle("active", i === index);
        });
        currentTestimonialGroup = index;
    }

    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            console.log("Dot clicked:", index);
            showTestimonial(index);
        });
    });

    setInterval(() => {
        showTestimonial((currentTestimonialGroup + 1) % testimonialGroups.length);
    }, 5000);

    showTestimonial(0);
});

document.getElementById('openPageBtn').addEventListener('click', function() {
    window.open('index.php', '_blank');
});
